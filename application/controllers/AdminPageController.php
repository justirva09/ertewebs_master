<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminPageController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');

        $isLogin = $this->session->userdata("userLogin");
        if (!isset($isLogin)) {
            redirect('login');
        }
    }

    public function dashboard_index()
    {
        $data["page_title"] = 'Dashboard';
        $this->load->view('template/head', $data);
        $this->load->view('admin/content/dashboard/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function blog_index()
    {
        $data["page_title"] = 'BlogPost';
        $this->load->view('template/head', $data);
        $this->load->view('admin/content/post/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function userlist_index()
    {
        $data["page_title"] = 'Pengurus';
        $this->load->view('template/head', $data);
        $this->load->view('admin/content/setting/Userlist');
        $this->load->view('template/footer', $data);
    }
    public function warga_index()
    {
        $data["page_title"] = 'Warga List';
        $this->load->view('template/head', $data);
        $this->load->view('admin/content/warga/index');
        $this->load->view('template/footer', $data);
    }
    public function profile_index()
    {
        $data["page_title"] = 'Profile';
        $this->load->view('template/head', $data);
        $this->load->view('admin/content/profile/index');
        $this->load->view('template/footer', $data);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil keluar akun!</div>');
        redirect('/');
    }
}
