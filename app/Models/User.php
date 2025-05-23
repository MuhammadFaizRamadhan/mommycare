<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $timestamps = false; // Nonaktifkan timestamps

    protected $fillable = [
        'nama_user', 'email', 'password', 'no_telp', 'alamat', 'foto'
    ];

    protected $hidden = [
        'password'
    ];
}
