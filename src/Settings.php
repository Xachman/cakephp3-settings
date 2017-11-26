<?php
namespace Settings;
class Settings implements ISettings {
    private $json;
    public function __construct($jsonString) {
        $this->json = json_decode($jsonString);
    }
    public function businessName(): string {
        if(!isset($this->json->business)) return "";
        $return = $this->json->business->name;
        return ($return)? $return: "";
    }
    public function businessAddress(): string {
        if(!isset($this->json->business)) return "";
        $return = $this->json->business->address;
        return ($return)? $return: "";
    }
    public function businessCity(): string {
        if(!isset($this->json->business)) return "";
        $return = $this->json->business->city;
        return ($return)? $return: "";
    }
    public function businessState(): string {
        if(!isset($this->json->business)) return "";
        $return = $this->json->business->state;
        return ($return)? $return: "";
    }
}