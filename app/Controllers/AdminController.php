<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Config\Session;

class AdminController extends Controller
{
    public function index()
    {
        $session = \Config\Services::session();
        // Cek apakah pengguna sudah login
        if (!$session->get('id')) {
            // Redirect ke halaman login atau tampilkan pesan kesalahan
            return redirect()->to('login');
        }
        return view('admin\header').view('admin\dashboard').view('admin\footer');
    }
    
    public function view_admin_jurusan(){
        return view('admin\header').view('admin\jurusan').view('admin\footer');
    }

    public function view_admin_semester(){
        return view('admin\header').view('admin\semester').view('admin\footer');
    }

    public function view_admin_matakuliah(){
        return view('admin\header').view('admin\matakuliah').view('admin\footer');
    }

    public function view_admin_datadosen(){
        return view('admin\header').view('admin\datadosen').view('admin\footer');
    }

    public function view_admin_datamahasiswa(){
        return view('admin\header').view('admin\datamahasiswa').view('admin\footer');
    }

    public function view_admin_semester_dosen(){
        return view('admin\header').view('admin\semesterdosen').view('admin\footer');
    }

    public function view_admin_jurusan_matakuliah(){
        return view('admin\header').view('admin\jurusanmatakuliah').view('admin\footer');
    }
}
