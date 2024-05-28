<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Config\Session;

class ExamController extends Controller
{
    public function index()
    {
        $session = \Config\Services::session();
        // Cek apakah pengguna sudah login
        if (!$session->get('id')) {
            // Redirect ke halaman login atau tampilkan pesan kesalahan
            return redirect()->to('login');
        }
        return view('header').view('exam_site').view('footer');
    }

    public function input_pilgan(){
        return view('header').view('input_pilgan').view('footer');
    }

    public function input_essay(){
        return view('header').view('input_essay').view('footer');
    }

    public function input_file(){
        return view('header').view('input_file').view('footer');
    }
    
    public function manage_soal(){
        return view('header').view('manage_soal').view('footer');
    }
    
    public function view_admin_jurusan(){
        return view('admin\header').view('admin\jurusan').view('admin\footer');
    }
}
