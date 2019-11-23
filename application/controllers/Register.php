<?php

    class Register extends CI_Controller{

        public $error = false;

        function __construct()
        {
            parent::__construct();
            $this->load->model('user');
        }


        public function index()
        {
             $data['error'] = $this->error; 
             $this->load->view('register',$data); // lempar data error ke view
        }

        public function action_register()
        {
            //ambil data yang dilemparkan melalui method post
            $newUsername = $this->input->post('username');
            $newEmail    = $this->input->post('email');
            $pass1       = $this->input->post('password1');
            $pass2       = $this->input->post('password2');

            //cek apakah pass1 dan pass2 sudah sama, jika sudah maka lanjutkan jika belum tampilkan pesan kesalahan

            //cek apakah data yang dimasukkan sudah ada yang pakai atau belum
                // caranya ambil data dari model user
                $isDataExist = $this->user->cek_user($newUsername,$pass1);

            // jika sudah maka tampilkan halaman register dengan pesan kesalahan
            if (!empty($isDataExist)) {
                $this->error = true;
                $this->index();
            } else{
            // jika belum maka lakukan insert data
                $newAccount = array(
                    'username' => $newUsername,
                    'password' => md5($pass1),
                    'email'    => $newEmail
                );

                $this->db->insert('user', $newAccount);
                
            }
        }
    }
?>