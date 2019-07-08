<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientPageController extends CI_Controller {
    function __construct(){
        parent::__construct();

        $this->API = base_url() . 'api/';
    }

    public function index(){
        $page_title = "Beranda - Website Rukun Tetangga";

        $content = [
            "page_title" => $page_title 
        ];
        
        $this->load->view('client/frontend/templates/head', $content);
		$this->load->view('client/frontend/contents/homepage', $content);
		$this->load->view('client/frontend/templates/footer', $content);
    }
    public function galeri_index() {
        $data["page_title"] = 'Galeri - Website Rukun Tetangga';
        $this->load->view('client/frontend/templates/head', $data);
        $this->load->view('client/frontend/contents/galery', $data);
        $this->load->view('client/frontend/templates/footer', $data);
    }
    public function single_index() {
        $data["page_title"] = 'Artikel - Website Rukun Tetangga';
        $this->load->view('client/frontend/templates/head', $data);
        $this->load->view('client/frontend/contents/single-page', $data);
        $this->load->view('client/frontend/templates/footer', $data);
    }
    

    //   public function clientLogout(){
	// 	$this->session->sess_destroy();
	// 	redirect('/');
    // }

}