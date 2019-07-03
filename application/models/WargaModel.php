<?php
class WargaModel extends CI_Model
{

    public function getWarga($id = NULL)
    {
        if ($id === NULL) {
            return $this->db->get('t_warga')->result_array();
        } else {
            return $this->db->get_where('t_warga', ['t_id' => $id])->result_array();
        }
    }
    public function updateUser($userData, $t_id)
    {
        $this->db->update("t_warga", $userData, ['t_id' => $t_id]);
        return $this->db->affected_rows();
    }

    public function deleteUser($t_id)
    {
        $this->db->delete('t_warga', ['t_id' => $t_id]);
        return $this->db->affected_rows();
    }

    public function createUser($userData)
    {
        $this->db->insert('t_warga', $userData);
        return $this->db->affected_rows();
    }

    public function checkUserByEmail($t_email)
    {
        $query = $this->db->get_where('t_warga', ['t_email' => $t_email]);
        return $query->result_array();
    }

    public function checkUserByUsername($t_username)
    {
        $query = $this->db->get_where('t_warga', ['t_username' => $t_username]);
        return $query->result_array();
    }
}
