<?php

class MY_Controller extends CI_Controller {

	public function __construct()
    {
        
        parent::__construct();
		$this->data['title']		= 'Blistin';
							
	}
				
}

class My_Admin extends CI_Controller
{
    public function __construct()
    {
    
    	parent::__construct();
    	$this->data['title']		= 'Blistin';
    
    }
    		
} 