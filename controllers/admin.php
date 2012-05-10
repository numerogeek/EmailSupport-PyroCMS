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
 	protected $section = "supporto";
 	
 	function __construct()
 	{
 		parent::__construct();
 		
 		//Load language
 		$this->lang->load('supporto');
 		
 		//Load model
 		$this->load->model('supporto_m','',TRUE);
 	}
 	
 	function index()
 	{
 		
 		//Load form_validation library
 		$this->load->library('form_validation');
 		
 		//Set validation rules 		
 		$this->form_validation->set_rules('name',lang('label_name'),'trim|required');
 		$this->form_validation->set_rules('lastname',lang('label_lastname'),'trim|required');
 		$this->form_validation->set_rules('message',lang('label_message'),'trim|required');
 		 		
 		//Is it valid?
 		if(!$this->form_validation->run()){
 		
 			//No it isn't, show the form agan
 			$this->template->build('form');
 		}
 		else{
 			//Yes it is, let's get data
			
			//Get user id
			$user_id = $this->current_user->id;
			
			//I need also the user email for the answare, i can get it from users table
			$user_email = $this->supporto_m->get_user_email($user_id);
			
			
 		}
 		
 	}
 }