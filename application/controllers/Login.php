<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('WargaModel', 'w_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $isLogin =  $this->session->userdata('userLogin');

        //sudah memiliki session dialihkan ke dashboard
        if (isset($isLogin)) {
            redirect('dashboard');
        }
    }
    public function index()
    {
        $this->form_validation->set_rules('t_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('t_password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data["page_title"] = 'Login';
            $this->load->view('template/head-only', $data);
            $this->load->view('login');
            $this->load->view('template/footer-only', $data);
        } else {
            $this->_login();
        }
    }


    private function _login()
    {
        $email = $this->input->post('t_email');
        $password = $this->input->post('t_password');
        // $user = $this->db->get_where('t_warga', ['t_email' => $email])->row_array();
        $user = $this->w_model->checkAdmin($email);

        if (count($user) === 1) {
            $user = $user[0];
            $exist_password = $user['t_password'];
            $verify = password_verify(base64_encode($password), $exist_password);
            if ($verify) {
                $this->session->set_userdata("userLogin", $user);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password/Email Salah!</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User Not Exist</div>');
            redirect('login');
        }
    }
}
