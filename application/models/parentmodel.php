<?php


class ParentModel extends DataMapper{
    
  
    function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    
    function editLink()
    {
        return "#";
    }
    
    function newLink()
    {
        
        return "#";
        
    }
    function formAction()
    {
        
        return '';
        
    }
    
    function returnPage()
    {
        return site_url("catalogs/process/states/");
        
    }
    
    function viewPath()
    {
        return "";
        
    }
    
}