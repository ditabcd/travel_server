<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class tiket extends REST_Controller {
//$this->response(array("status"=>"success","result" => $get_pembeli));
//$this->response(array("status"=>"success"));
	function tiket_get($kata=''){
		if ($kata!='') 
		{
			$this->db->or_like('kota',$kata);
		}
		$get_tiket = $this->db->get("tiket")->result();
		$this->response(array("status"=>"success","result" => $get_tiket));
	}
}
?>