<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akomodasi extends CI_Model {
	private $table='akomodasi';
	private $pk='id_ako';



	function __construct()
	
	{
		parent::__construct();
	}

	function list_akomodasi($id)

	{
		$query = $this->db->get_where('akomodasi', array('id_jns_ako' => $id));
		return $query;
	}

	function detail_event($id)

	{
		$query = $this->db->get_where('events', array('id_eve' => $id));
		return $query;
	}

	function list_jns_akomodasi($id)

	{
		$query = $this->db->get_where('jenis-ako', array('id_jns_ako' => $id));
		return $query;
	}

	function list_pasar()

	{
		$query = $this->db->get('pasar');
		return $query;
	}

	function penginapan()

	{
		$query = $this->db->get_where('akomodasi', array('id_jns_ako' => '2'));
		return $query;
	}

	function homestay()

	{
		$query = $this->db->get_where('akomodasi', array('id_jns_ako' => '3'));
		return $query;
	}

	public function detail($id)
	{
		$query = $this->db->get_where('akomodasi', array('id_ako' => $id));
		return $query;
	}

	public function detail_pas($id)
	{
		$query = $this->db->get_where('pasar', array('id_pas' => $id));
		return $query;
	}
}	