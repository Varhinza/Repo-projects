<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
	private $table='events';
	private $pk='id_eve';



	function __construct()
	{
		parent::__construct();
	}

	function events(){

	return $this->db->get('events');


	}

	function wisata(){

	return $this->db->get('dwt');


	}

	function detail_wisata($id)

	{
		$query = $this->db->get_where('dwt', array('id_dwt' => $id));
		return $query;
	}

	function input_saran($data)
	{
        $this->db->insert('saran',$data);

	}
	
	function link_wisata()
	{
		$this->db->select('nm_wst');
		$this->db->select('id_dwt');
		$this->db->from('dwt');
		$this->db->order_by('id_dwt', 'DESC');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query->result_array();
	}

	function link_events()
	{
		$this->db->select('nm_ako');
		$this->db->select('id_ako');
		$this->db->from('akomodasi');
		$this->db->where('id_jns_ako' ,'4');
		$this->db->order_by('id_ako', 'DESC');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query->result_array();
	}
}	