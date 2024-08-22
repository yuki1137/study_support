<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    # どのテーブルに関連しているかを指定
    protected $table = 'subjects';

    # マスアサインメントを許可する属性
    protected $fillable = [
        'subject_name',
    ];

    # タイムスタンプがない場合は、これを無効にする
    public $timestamps = false;
}
