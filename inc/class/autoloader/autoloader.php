<?php

class autoload {

    public function __construct($ENV) {
        $this->ENV = $ENV;
    }

    public function css() {
        return require ('assets/css/autoload.php');
    }
    public function js() {
        return require ('assets/js/autoload.php');
    }

    public function board() {
        if ($this->ENV['BOARD']) {
            return '<div id="BOARD"></div>';
        }
    }
    public function clock() {
        if ($this->ENV["CLOCK"]) {
            return '<div id="CLOCK"></div>';
        }
    }
    public function weather() {
        if ($this->ENV['WEATHER']) {
            return '<div id="WEATHER"></div>';
        }
    }
    public function flashinfo() {
        if ($this->ENV['FLASHINFO']) {
            return '<div id="FLASHINFO"></div>';
        }
    }
    public function partners() {
        if ($this->ENV['PARTNERS']) {
            return '<div id="PARTNERS"></div>';
        }
    }
    public function schedule() {
        if ($this->ENV['SCHEDULE'] && $this->ENV['FLASHINFO']) {
            return '<div id="SCHEDULE"></div>';
        }
    }
}


?>