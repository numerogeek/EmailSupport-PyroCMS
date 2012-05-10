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
	class Module_supporto extends Module {
	
        public $version = '1.0';
    
        public function info(){
        
                return array(
                        'name' => array(
                                'it' => 'Supporto email',
                                'en' => 'Email support'
                        ),
                        'description' => array(
                                'it' => 'Questo modulo permette di inviare richieste di supporto al webmaster utilizzando direttamente il pannello di controllo',
                                'en' => 'Allow users send email to the webmaster for support or trubles'
                        ),
                        'frontend' => FALSE,
                        'backend' => TRUE,
                        'menu' => 'utilities',
                        'sections' => array(
		                	'supporto' => array(
			                    'name'  => 'label_support', //get from language file
			                    'uri'   => 'admin/supporto'
		                     )		                   
		                )
                );
        
        }
        
        public function install(){
        	return TRUE;
        }
        
        
        public function uninstall(){
            return TRUE;
        }
        
        public function upgrade($old_version){
            return TRUE;
        }
        
        public function help(){    
            return TRUE;
        }

	}