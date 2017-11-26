<?php

namespace App\Test\TestCase;

use Cake\TestSuite\TestCase;
use Settings\Settings;

class SettingsTest extends TestCase {
    public function testSettings() {
        $settings = new Settings(file_get_contents(dirname(dirname(__FILE__))."/mocks/settings.json"));
        $this->assertEquals("Pro Service", $settings->businessName());
        $this->assertEquals("123 Fair Lane", $settings->businessAddress());
        $this->assertEquals("Sanjose", $settings->businessCity());
        $this->assertEquals("CA", $settings->businessState());
    }

    public function testSettingsEmpty() {

        $settings = new Settings(file_get_contents(dirname(dirname(__FILE__))."/mocks/settings-empty.json"));
        $this->assertEquals("", $settings->businessName());
        $this->assertEquals("", $settings->businessAddress());
        $this->assertEquals("", $settings->businessCity());
        $this->assertEquals("", $settings->businessState());
    }
}