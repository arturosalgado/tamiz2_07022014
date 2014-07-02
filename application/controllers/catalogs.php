<?php

class catalogs extends MY_Controller
{
    private $catalog=''; 
    
    
    function __construct() {
        parent::__construct();
    }
    
    
    function Content()
    {
        echo "this catalog is  [$this->catalog] ";
        switch($this->catalog)
        {
            
            case 'states' : return $this->estados(); 
                
            
        }
        
    }
    
    
    function estados()
    {
        $e = new States();
        $all = $e->get()->all;
        $this->load->view("catalogs/states/list");
        
    }
    
    
    function process($catalog)
    {
        $this->catalog = $catalog;
        $this->index();
    }
    
}