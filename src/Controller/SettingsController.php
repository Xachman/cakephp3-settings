<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Settings\Controller;
use Settings\Controller\AppController;
/**
 * Description of Invoices
 *
 * @author dell precision
 */
class SettingsController extends AppController {
    //put your code here
    private $Settings;
    var $uses = false;
    
    
    public function initialize() {
        $this->modelClass = false;
        $this->Settings = new Settings();
    }
    
    public function setSettingsModel($model) {
        $this->Settings = $model;
    }
    
    public function index() {
        $settings = $this->Settings->get();
        
        $this->set(compact("settings"));
    }
    public function edit() {
        $settings = $this->Settings->get();
        $this->set(compact("settings"));
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->Settings->save($this->request->data);
        }
    }
    
}