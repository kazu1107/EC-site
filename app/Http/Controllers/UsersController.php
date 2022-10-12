<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Userモデルを使うのに必要なuse文
use App\Models\Mypage\User;

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
}
