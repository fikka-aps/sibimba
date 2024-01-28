<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_sibimba extends CI_Model
{
    public function delete_user($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->delete('user');
    }
    public function delete_bimbel($id)
    {
        $this->db->where('bimbel_id', $id);
        return $this->db->delete('bimbel');
    }
    public function delete_promo($id)
    {
        $this->db->where('id_promo', $id);
        return $this->db->delete('promo');
    }
    public function edit_user($id)
    {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        ];
        $this->db->set('name', $data['name']);
        $this->db->where('id_user', $id);
        $this->db->update('user');
    }
    public function detail_data($id)
    {
        $query = $this->db->get_where('bimbel', array('bimbel_id' => $id))->row_array();
        return $query;
    }
    public function detail_promo($id)
    {
        $this->db->select('*');
        $this->db->from('promo');
        $this->db->join('bimbel', 'bimbel.bimbel_id = promo.id_bimbel');
        $query = $this->db->get_where('', array('id_promo' => $id))->row_array();
        return $query;
    }
    public function promo_list()
    {
        $this->db->select('*');
        $this->db->from('promo');
        $this->db->join('bimbel', 'bimbel.bimbel_id = promo.id_bimbel');
        $query = $this->db->get();
        return $query;
    }
    public function ambil_data($keyword = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_data');
        if (!empty($keyword)) {
            $this->db->like('nama_barang', $keyword);
        }
        return $this->db->get()->result_array();
    }
    public function data_bimbel($keyword = null)
    {
        if ($keyword) {
            $this->db->like('bimbel_name', $keyword);
        }
        return $this->db->get('bimbel')->result_array();
    }
}
