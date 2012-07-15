<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

	public function index(){
			
		$data['title']	= 'Blistin';
		$data['meta'] = array(
       		array('name' => 'robots', 'content' => 'no-cache'),
        	array('name' => 'description', 'content' => ''),
        	array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
    	);
				
		$data['view'] 	= 'main';
		$this->load->view('template', $data);
		
	}
	
}
