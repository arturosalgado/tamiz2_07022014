<?php

class tamiz extends MY_Controller{
    
    
    
    function __construct() {
        parent::__construct();
    }
    
    
    function Content()
    {
       if ($this->view=='form') {
       //echo " id ".$this->id;
       $t = new TamizModel($this->id);    
       $t->where('id',  $this->id)->get(1);
      
       //echo $t->nombre;
      // print_r($record);
       
       $this->data['record']=$t;    
       return  $this->load->view("admin/lab/tamiz/form",  $this->data,true);     
       }
       else
       {    
           $t = new TamizModel();
           $t->get();
           $all = $t->all;
           $this->data['all']=$all;
           return  $this->load->view("admin/lab/tamiz/list_view",  $this->data,true);  
        
       } 
        
    }
    
    
    function form($id = null)
    {
        $this->id = $id;
       // echo $this->id;
        $this->view = 'form';
       $this->index();
        
    }
    function update($id = null)
    {
        
        $t = new TamizModel($id);
        
        
     //   $_POST['fechadenacimiento']= $this->formatdate($_POST['fechadenacimiento']);
      //  $_POST['fechademuestra']= $this->formatdate($_POST['fechademuestra']);
      
      
        
        foreach($_POST as $key =>$field){
           // echo "key is $key ".$field;
           // echo "<br>";
            $t->$key = $this->input->post($key);
        }
        $t->save();
        redirect(site_url("/lab/tamiz/"));
        
    }
    
    function formatdate($date)
    {
        list($d,$m,$y)= @split("/",$date);
        $insertDate  = date("Y-m-d",strtotime("$m/$d/$y"));
        return $insertDate;
        
    }
    
   
}