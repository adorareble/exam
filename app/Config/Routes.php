<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('register', 'UserController::register');
$routes->post('register', 'UserController::register_account');

$routes->get('login', 'UserController::login');
$routes->post('login', 'UserController::login_account');

$routes->get('exam_site', 'ExamController::index');

$routes->get('manage_soal', 'ExamController::manage_soal');
$routes->get('input_pilgan', 'ExamController::input_pilgan');
$routes->get('input_essay', 'ExamController::input_essay');
$routes->get('input_file', 'ExamController::input_file');


// Admin Sidebar
$routes->get('admin_dashboard', 'AdminController::index');
$routes->get('master_jurusan', 'AdminController::view_admin_jurusan');
$routes->get('master_semester', 'AdminController::view_admin_semester');
$routes->get('master_matakuliah', 'AdminController::view_admin_matakuliah');
$routes->get('master_datadosen', 'AdminController::view_admin_datadosen');
$routes->get('master_datamahasiswa', 'AdminController::view_admin_datamahasiswa');
$routes->get('master_semester_dosen', 'AdminController::view_admin_semester_dosen');
$routes->get('master_jurusan_matakuliah', 'AdminController::view_admin_jurusan_matakuliah');
$routes->get('master_banksoal', 'AdminController::view_admin_banksoal');
$routes->get('master_user', 'AdminController::view_admin_userM');


// Dosen Sidebar
$routes->get('dosen_dashboard', 'DosenController::index');
$routes->get('dosen_datamahasiswa', 'DosenController::datamahasiswa');
$routes->get('dosen_banksoal', 'DosenController::banksoal');
$routes->get('manageujian', 'DosenController::manageujian');
$routes->get('hasilujian', 'DosenController::hasilujian');

// Mahasiswa Sidebar
$routes->get('mahasiswa_dashboard', 'MahasiswaController::index');
$routes->get('ujian', 'MahasiswaController::ujian');












$routes->get('logout', 'UserController::logout_account');




