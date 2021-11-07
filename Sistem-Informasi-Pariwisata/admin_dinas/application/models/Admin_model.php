<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function input_data($data,$table)
	{
        $this->db->insert($table,$data);

    }

    public function get_data($table){
        $query =$this->db->get($table);
        return $query->result();
    }

    public function get_data_id($id,$table,$field){
        $this->db->where($field,$id);
        $query =$this->db->get($table);
        return $query->result();
    }

    public function get_data_join($table,$table2,$kondisi)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $kondisi);
        $query = $this->db->get();
        return $query->result();
    }

    public function update_data($data,$table,$field,$id){
        $this->db->where($field, $id);
        $this->db->update($table, $data);
    }

    public function delete_data($id,$table,$field)
    {
        $data=$this->get_data_id($id,$table,$field);
        foreach ($data as $row) {
            unlink('./upload/'.$row->foto);
        }
        $this->db->delete($table,array($field => $id));
    }

    public function upload_foto($path){
        $config['upload_path']          = '../upload/'.$path;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']			= true;
        $config['max_size']             = 2000; // 1MB

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto')) {
            $error= $this->upload->display_errors(); 
             $this->session->set_flashdata('error',
            '<div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button> 
                <strong>Warning!</strong>'.$error.'</div>');
                redirect($_SERVER['HTTP_REFERER']);
        }else {
            return $this->upload->data("file_name");
        }
    }
}