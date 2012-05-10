<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 * @author      Christian Giupponi STILOGO
 * @link		http://www.stilogo.it
 * @package 	PyroCMS
 * @subpackage  supporto
 * @category	module
 * @license     FREE
 */
 
 class Supporto_m extends CI_Model
 {
 	function __construct()
 	{
 		parent::__construct();
 	} 	 	
 	
 	function get_user_email($id)
 	{
 		$table = $this->db->dbprefix('users');
 		$this->db->select('email');
 		$query = $this->db->get_where($table,array('id'=>$id));
 		if($query->num_rows()>0)
 			 foreach($query->result() as $info)
 			 	return $info->email;
 		return 0;
 	}
 }