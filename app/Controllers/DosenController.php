<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Config\Session;

class DosenController extends Controller
{
    public function index()
    {
        $session = \Config\Services::session();
        // Cek apakah pengguna sudah login
        if (!$session->get('id')) {
            // Redirect ke halaman login atau tampilkan pesan kesalahan
            return redirect()->to('login');
        }
        return view('dosen\header').view('dosen\dashboard').view('dosen\footer');
    }
    

    public function manageujian(){
        return view('dosen\header').view('dosen\manageujian').view('dosen\footer');
    }
    
    public function banksoal(){
        return view('dosen\header').view('dosen\banksoal').view('dosen\footer');
    }
    
    public function hasilujian(){
        return view('dosen\header').view('dosen\hasilujian').view('dosen\footer');
    }

    public function datamahasiswa(){
        return view('dosen\header').view('dosen\datamahasiswa').view('dosen\footer');
    }

}
