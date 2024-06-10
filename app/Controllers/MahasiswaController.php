<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Config\Session;

class MahasiswaController extends Controller
{
    public function index()
    {
        $session = \Config\Services::session();
        // Cek apakah pengguna sudah login
        if (!$session->get('id')) {
            // Redirect ke halaman login atau tampilkan pesan kesalahan
            return redirect()->to('login');
        }
        return view('mahasiswa\header').view('mahasiswa\dashboard').view('mahasiswa\footer');
    }
    

    public function ujian(){
        return view('mahasiswa\header').view('mahasiswa\ujian').view('mahasiswa\footer');
    }

    public function exam_pilgan(){
        return view('mahasiswa\exam_pilgan');
    }

    public function exam_essay(){
        return view('mahasiswa\exam_essay');
    }

    public function exam_file(){
        return view('mahasiswa\exam_file');
    }
}
