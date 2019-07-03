<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminPageController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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
        $data["page_title"] = 'User List';
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
}
