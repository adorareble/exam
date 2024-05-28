<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Config\Session;

class UserController extends Controller
{
    public function register(){
        return view('register');
    }
    
    public function login(){
        return view('login');
    }
    
    public function login_account()
    {
        // Load UserModel
        $model = new UserModel();

        // Ambil username dan password dari form login
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi login
        $user = $model->validate_login($username, $password);

        if ($user) {
            // Jika login berhasil, lakukan tindakan sesuai kebutuhan, misalnya menyimpan ke sesi
            // $session->set('id', $user['id']);
            $session = \Config\Services::session();
            $session->set('id', $user['id']);
            $session->set('name', $user['name']);
            $session->set('username', $user['username']);
            $session->set('role', $user['role']);

            // Redirect ke halaman dashboard atau halaman lain yang diinginkan
            if ($user['role'] == "admin") {
                return redirect()->to('admin_dashboard');
            } elseif ($user['role'] == "dosen") {
                return redirect()->to('dosen_dashbord');
            } elseif ($user['role'] == "mahasiswa") {
                return redirect()->to('mahasiswa');
            } else {
                return redirect()->to('login')->with('error', 'Username atau password salah.');
            }
        } else {
            // Jika login gagal, kembali ke halaman login dengan pesan kesalahan
            return redirect()->to('login')->with('error', 'Username atau password salah.');
        }
    }

    public function register_account(){
        $model = new UserModel();
        $data = [
            'name'      => $this->request->getPost('nama'),
            'username'  => $this->request->getPost('username'),
            'password'  => md5($this->request->getPost('password')),
            'role'      => $this->request->getPost('role')
        ];
        $model->insertData($data);
        return view('register');
    }

    public function logout_account(){
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to('login');
    }
}