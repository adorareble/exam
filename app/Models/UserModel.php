<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','name', 'username', 'password', 'role'];
    
    public function validate_login($username, $password){
        $user = $this->where('username', $username)->first();

        if ($user) {
            // Jika pengguna ditemukan, verifikasi password
            if (md5($password) == $user['password']) {
                return $user; // Login berhasil
            }
        }
        return null; // Login gagal
    }
        
    public function insertData($data){
        return $this->insert($data);
    }
}
