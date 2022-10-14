<?php

namespace App\Models\Mypage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    public function selectUserFindById($id)
    {
    // 「SELECT id, name, email WHERE id = ?」を発行する
    $query = $this->select([
        'id',
        'name',
        'email',
        'post_code',
        'adress',
        'tell',
        'password'
    ])->where([
        'id' => $id
    ]);
    // first()は1件のみ取得する関数
    return $query->first();
    }

    /**
     * IDで指定したユーザを更新する
     */
    public function updateUserFindById($user)
    {
        // 「UPDATE FROM users SET name = ?, email = ? WHERE id = ?」を発行する
        return $this->where([
            'id' => $user['id']
        ])->update([
            'name' => $user['name'],
            'email' => $user['email'],
            'post_code' => $user['post_code'],
            'adress' => $user['adress'],
            'tell' => $user['tell'],
            'password' => Hash::make($user['new_password'])
        ]);
    }
}
