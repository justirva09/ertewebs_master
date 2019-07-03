<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

/*
 @ REST API DATA WARGA
 */
class Warga extends REST_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('WargaModel', 'w_model');
    }

    public function index_get()
    {
        $id = $this->get('t_id');

        if ($id === NULL) {
            $warga = $this->w_model->getWarga();
        } else {
            $warga = $this->w_model->getWarga($id);
        }

        if ($warga) {
            $this->response([
                'status'    => true,
                'code'      => 200,
                'message'   => 'Success!',
                'data'      => $warga
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status'    => false,
                'code'      => 400,
                'message'   => 'Not Found!',
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function createUser_post()
    {
        $t_user_type = $this->post('t_user_type');
        $t_name = $this->post('t_nama');
        $t_tempat_ttl = $this->post('t_tempat_tgl_lahir');
        $t_agama = $this->post('t_agama');
        $t_pekerjaan = $this->post('t_pekerjaan');
        $t_alamat = $this->post('t_alamat');
        $t_gender = $this->post('t_gender');
        $t_username = $this->post('t_username');
        $t_email = $this->post('t_email');
        $t_password = $this->post('t_password');

        $checkEmail = $this->w_model->checkUserByEmail($t_email);
        if (count($checkEmail) == 0) {
            $checkUsername = $this->w_model->checkUserByUsername($t_username);
            if (count($checkUsername) == 0) {
                $userData = [
                    't_user_type' => $t_user_type,
                    't_nama' => $t_name,
                    't_tempat_tgl_lahir' => $t_tempat_ttl,
                    't_agama' => $t_agama,
                    't_pekerjaan' => $t_pekerjaan,
                    't_alamat' => $t_alamat,
                    't_gender' => $t_gender,
                    't_username' => $t_username,
                    't_email' => $t_email,
                    't_password' => password_hash(base64_encode($t_password), PASSWORD_DEFAULT)
                ];
                $createUser = $this->w_model->createUser($userData);

                if ($createUser > 0) {
                    $t_nama = $this->post("t_nama");
                    $message = "Data User ".$t_nama." telah berhasil ditambahkan kedalam database";
                    $this->response([
                        'status' => true,
                        'code' => 200,
                        'message' => $message,
                        'data' => $userData
                    ], REST_Controller::HTTP_CREATED);
                } else {
                    $this->response([
                        'status' => false,
                        'code' => 400,
                        'message' => 'FAILED CREATE USER!'
                    ], REST_Controller::HTTP_BAD_REQUEST);
                }
            } else {
                $this->response([
                    'status' => false,
                    'code' => 400,
                    'message' => 'USER WITH EMAIL IS EXIST'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_put()
    {
        $t_id = $this->put('t_id');
        // $t_password = 
        $userData = [
            't_user_type' => $this->put('t_user_type'),
            't_nama' => $this->put('t_nama'),
            't_tempat_tgl_lahir' => $this->put('t_tempat_tgl_lahir'),
            't_agama' => $this->put('t_agama'),
            't_pekerjaan' => $this->put('t_pekerjaan'),
            't_alamat' => $this->put('t_alamat'),
            't_gender' => $this->put('t_gender'),
            't_username' => $this->put('t_username'),
            't_email' => $this->put('t_email'),
            't_password' => password_hash(base64_encode('t_password'), PASSWORD_DEFAULT)
        ];
        $update = $this->w_model->updateUser($userData, $t_id);
        if($update > 0) {

            $t_nama = $this->put("t_nama");
            $pesan = "Data Warga ".$t_nama." telah berhasil didit";      
            $this->response([
                'status' => true,
                'code' => 200,
                "message" => $pesan
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'code' => 400,
                'message' => 'GAGAL UPDATE!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_delete()
    {
        $t_id = $this->delete('t_id');
        if ($t_id === NULL) {
            $this->response([
                'statu' => false,
                'code' => 400,
                'message' => 'Silahkan Masukkan ID user Terlebih dahulu!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->w_model->deleteUser($t_id) > 0) {
                $this->response([
                    'status' => true,
                    'message' => 'User Berhasil Dihapus!'
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Gagal Menghapus User! Tidak ada ID yang Cocok'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    //END
}
