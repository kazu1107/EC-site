<?php

namespace App\Models\Mypage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'tell'
    ])->where([
        'id' => $id
    ]);
    // first()は1件のみ取得する関数
    return $query->first();
    }
}
