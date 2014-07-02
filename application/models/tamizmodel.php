<?php


class TamizModel extends ParentModel
{
    
    public  $table = 'tamiz';
            
    function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    function nombre_completo()
    {
        
        return $this->apellido_paterno. ' '.$this->apellido_materno.' '.$this->nombre;
        
    }
    function getFechadenacimiento()
    {
       // echo $this->fechadenacimiento;
        if (!empty($this->fechadenacimiento) and $this->fechadenacimiento!='0000-00-00 00:00:00')
        {
            return date('d/m/Y',  strtotime($this->fechadenacimiento));
        }
        else return '';
        
    }
    
    
     function getFechademuestra()
    {
       // echo $this->fechadenacimiento;
        if (!empty($this->fechademuestra) and $this->fechademuestra!='0000-00-00 00:00:00')
        {
            return date('d/m/Y',  strtotime($this->fechademuestra));
        }
        else return '';
        
    }
    function getHora()
    {
        
       if (!empty($this->horanacimiento) and $this->horanacimiento!='0000-00-00 00:00:00')
        {
            return date('d/m/Y',  strtotime($this->horanacimiento));
        }
        else return '';
        
    }
    
    function getToma()
    {
        
      if (!empty($this->fechademuestra) and $this->fechademuestra!='0000-00-00 00:00:00')
        {
            return date('d/m/Y',  strtotime($this->fechademuestra));
        }
        else return '';
        
    }
    
    
    function getResponsable()
    {
        
       return  'Carlos Alberto Sanchez ';
        
    }
    
    
    function listMalformaciones($selected=null)
    {
        
        $options = '';
        
        $selected_string = '';
        
        
        $m = new MalformacionModel();
        
        foreach ($m->get()->all as $mal)
        {
            $selected_string = '';
            
            if ($selected == $mal->id)
            $selected_string = 'selected = "selected"';    
            $options.= '<option  '.$selected_string.' value="'.$mal->id.'" >'.$mal->nombre.'</option>';
            
        }
        
        return $options;
        
        
        
        
        
    }
    
    
    function listGesta($selected = 1)
    {
        $options  = '';
        $selected_string = '';
        
        for($i=1; $i<16; $i++)
        {
            $selected_string = '';
            if ($selected == $i)
            $selected_string = 'selected = "selected" ';
            $options .= '<option '.$selected_string.' value="'.$i.'">'.$i.'</option>';
        }
        
        return $options;
        
    }
    
    
    function listEstados($selected=null)
    {
        
           
        $options = '';
        
        $selected_string = '';
        
        
        $m = new EstadoModel();
        
        foreach ($m->get()->all as $mal)
        {
            $selected_string = '';
            
            if ($selected == $mal->id)
            $selected_string = 'selected = "selected"';    
            $options.= '<option  '.$selected_string.' value="'.$mal->id.'" >'.$mal->nombre.'</option>';
            
        }
        
        return $options;
        
    }
    
     function listResponsable($selected=null)
    {
        
           
        $options = '';
        
        $selected_string = '';
        
        
        $m = new ResponsableModel();
        
        foreach ($m->get()->all as $mal)
        {
            $selected_string = '';
            
            if ($selected == $mal->id)
            $selected_string = 'selected = "selected"';    
            $options.= '<option  '.$selected_string.' value="'.$mal->id.'" >' .$mal->paterno. ' ' .$mal->materno.' ' .$mal->nombre.' '.'</option>';
            
        }
        
        return $options;
        
    }
    
}
