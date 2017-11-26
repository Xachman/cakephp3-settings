<?php

namespace Settings;

interface ISettings {
    public function businessName(): string;
    public function businessAddress(): string;
    public function businessCity(): string;
    public function businessState(): string;
}