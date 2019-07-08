<?php
class WargaModel extends CI_Model
{

    public function getWarga($id = NULL)
    {
        $this->db->select('*');
        $this->db->from('t_warga');
        if ($id !== NULL) {
            $this->db->where('id', $id);
        }
        $this->db->where('t_user_type !=', 1);
        $query = $this->db->get();
        return $query->result_array();
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

    public function checkAdmin($email)
    {
        // $query = $this->db->get_where('t_warga', ['t_email' => $email]);

        // $this->db->select('*');
        // $this->db->from('t_warga');
        // $this->db->where('t_email', $email);
        // $this->db->where('t_user_type', 1);
        // $this->db->or_where_in('t_user_type', 2);

        $q = $this->db->query("SELECT *  FROM t_warga
            WHERE t_email = '$email'
            AND ( t_user_type = 1 OR t_user_type = 2 OR t_user_type = 3)
        ");
        return $q->result_array();
    }
}
