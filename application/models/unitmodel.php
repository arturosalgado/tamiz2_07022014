<?php


class UnitModel extends ParentModel
{
    
    public  $table = 'units';
            
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
    
    
    function listMalformaciones()
    {
        
        $options = '';
        
        
        $m = new MalformacionModel();
        
        foreach ($m->get()->all as $mal)
        {
            
            $options.= '<option value="'.$mal->id.'">'.$mal->nombre.'<option>';
            
        }
        
        return $options;
        
        
        
        
        
    }
    
    function formAction() {
        return site_url("catalogs/update/estadomodel/{$this->id}");
    }
    
    function editLink(){
        
        return site_url("catalogs/edit/estado/{$this->id}");
    }
    function returnPage()
    {
        return site_url("catalogs/process/states/");
        
    }
    function viewPath()
    {
        return 'admin/catalogs/units/list';
        
    }
    
}
