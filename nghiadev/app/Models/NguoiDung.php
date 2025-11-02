<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // 🔹 thay Model bằng Authenticatable
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NguoiDung extends Authenticatable
{
    use HasFactory, Notifiable;

    // 🔹 Chỉ định tên bảng
    protected $table = 'nguoi_dungs';

    // 🔹 Các cột có thể gán hàng loạt
    protected $fillable = [
        'name',
        'email',    
        'password',
    ];

    // 🔹 Ẩn mật khẩu khi trả JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
