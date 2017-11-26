<?php

namespace Settings\Controller;

use Settings\Controller\SettingsController;
use Cake\TestSuite\IntegrationTestCase;
use Settings\Settings;

/**
 * App\Controller\CustomersController Test Case
 */
class SettingsControllerTest extends IntegrationTestCase
{
    private $filePath;
    
    
    public function setUp() {
        parent::setUp();
        $this->filePath = dirname(dirname(dirname(__FILE__))).'/tmp/settings.json';
    }
    
    public function controllerSpy($event, $controller = null) {
        parent::controllerSpy($event, $controller = null);
        
        if (isset($this->_controller)) {
            $this->_controller->setSettingsModel(new \Settings\Model\Settings($this->filePath));
        }
    }
    public function testEdit() {
        $settingsData = [
            "business" => [
                "name" => "Pro Biz",
                "address" => "123 test street",
                "city" => "Sanjose",
                "state" => "CA"
            ]
        ];
        
        $this->post('/settings/edit', $settingsData);
        
        $this->assertResponseOk();
        $content = file_get_contents($this->filePath);
        $json = json_decode(file_get_contents($this->filePath), true);
        
        $this->assertEquals($settingsData, $json);
        
        
    }
    
}