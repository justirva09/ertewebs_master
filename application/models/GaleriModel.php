<?php
class GaleriModel extends CI_Model
{
    public function getGaleri($id = NULL)
    {
        if ($id === null) {
            $query = $this->db->get('g_galeri');
        } else {
            $query = $this->db->get_where('g_galeri', ['g_id' => $id]);
        }
        return $query->result_array();
    }

    public function addGaleri($galeriData)
    {
        $this->db->insert('g_galeri', $galeriData);
        return $this->db->affected_rows();
    }
}
