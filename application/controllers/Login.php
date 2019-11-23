<?php
    class Login extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('user');

        }
        public function index($error = false)
        {   $data['error'] = $error;
            $this->load->view('login',$data);
        }

        public function action_login()
        {
            $username   = $this->input->post('your_name');
            $password   = $this->input->post('your_pass');

            $isDataExist= $this->user->cek_user($username,$password);

            if($isDataExist){
                //login berhasil
                $array = array(
                    'islogin' => true,
                    'username' => $username
                );
                $this->session->set_userdata( $array );

                redirect(base_url('admin'));
                
                
            } else {
                //login gagal
                $this->index(true);
                
            }
        }
        
    }
?>