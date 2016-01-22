<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validate
 *
 * @author puneet
 */
class Validate extends CI_Controller {
    //put your code here
    
    public function __construct() {
        parent::__construct();
    }
    
    public function setValidation()
    {
        define('STRING');
        $validation = array(
            'header'=>array(
                'name'      => '',
                'required'  =>  '',
                'type'      =>  'STRING',
                'row'       =>  0,
                
            ),
            'rows'  => array(
                'required'  =>  TRUE,
                
                
                
                
            )
            
        )
        
    }
}
