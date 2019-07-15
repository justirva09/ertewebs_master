<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

/*
 @ REST API GALERI KEGIATAN
 */

class Galeri extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('GaleriModel', 'g_model');
    }
    public function index_get()
    {
        $id = $this->get('g_id');

        if ($id === NULL) {
            $galeri = $this->g_model->getGaleri();
        } else {
            $galeri = $this->g_model->getGaleri($id);
        }

        if ($galeri) {
            $this->response([
                'status' => true,
                'code' => 200,
                'message' => 'Succsess!',
                'data' => $galeri
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'code' => 400,
                'message' => 'Not Found Galeri!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    public function upload_img()
    {
        $file_name = $this->post('warga_galeri_file');
        $file_data = $this->post('galeri_file');
        $file_name = "$file_name";
        $file = $_FILES['galeri_file'];

        $upload_dir = '/assets/galeri';
        $config['upload_path'] = $upload_dir;
        $config['file_name'] = $file_name;
        $config['allowed_types'] = 'jpg|jpeg|png|gif|svg';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('galeri_file')) { 
            $errorData = [
                'file_name' => $file_name,
                'file' => $file,
                'file2' => $file_name
            ];
            $error = array('error' => $this->upload->display_errors());
            $this->response([
                'status' => false,
                'code' => 400,
                'message' => $error,
                'data' => $errorData
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $uploadData = $this->upload->data();
            $this->response([
                'status' => true,
                'code' => 200,
                'message' => 'Success Insert Photos!',
                'data' => $uploadData
            ], REST_Controller::HTTP_OK);
        }
    }



    public function index_post()
    {
        $galeriData = [
            'g_title' => $this->post('g_title'),
            'g_desc' => $this->post('g_desc'),
            'g_path_gambar' => $this->post('g_path_gambar'),
        ];

        $addGaleri = $this->g_model->addGaleri($galeriData);

        if ($addGaleri > 0) {
            $g_title = $this->post('g_title');
            $message = "Berhasil Menambahkan " . $g_title . " Kedalam Database!";
            $this->response([
                'status' => true,
                'code' => 200,
                'message' => $message,
                'data' => $galeriData
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'code' => 400,
                'message' => 'FAILED Add Galery!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
