<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peoples_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getAllPeoples()
  {
    return $this->db->get('peoples')->result_array();
  }

  public function getPeoples($limit, $start)
  {
    return $this->db->get('peoples', $limit, $start)->result_array();
  }

  public function countAllPeoples()
  {
    return $this->db->get('peoples')->num_rows();
  }

}
