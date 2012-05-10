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
 
 class Admin extends Admin_Controller
 {
 	function __construct()
 	{
 		parent::__construct();
 	}
 	
 	function index()
 	{
 		
 		$this->load->library('form_validation');
 		
 		$this->form_validation->set_rules('message',lang('label_message'),'trim|required');
 		
 		if(!$this->form_validation->run()){
 			
 			$this->template->build('form');
 		}
 		
 	}
 }