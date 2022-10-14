<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Userモデルを使うのに必要なuse文
use App\Models\Mypage\User;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    protected $user;

    /**
     * コンストラクタ
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 画面表示件データ一件取得用
     */
    public function getEdit($id)
    {
        $user = $this->user->selectUserFindById($id);
        // 'users.edit'は後程作成するviewを指定しています。
        return view('product.useredit', compact('user'));
    }

    /**
     * ユーザ更新関数
     *
     * @param unknown $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit($id, Request $request)
    {

        $user = Auth::user();

        if(!password_verify($request->current_password,$user->password))
        {
            return redirect('product.useredit')
                ->with('warning','パスワードが違います');
        }
        $user->password = bcrypt($request->new_password);
        /* $user->save(); */

        // フォームから渡されたデータの取得
        $user = $request->post();

        // DBへ更新依頼
        $this->user->updateUserFindById($user);

        // 再度編集画面へリダイレクト
        return redirect()->route('product.useredit', ['id' => $id]);
    }
}
