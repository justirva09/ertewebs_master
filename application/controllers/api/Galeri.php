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
