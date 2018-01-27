<?php

class blockmanager {
    public function __construct($ENV) {
        $this->ENV = $ENV;
    }

    public function flashinfo() {
        $url = "http://".$this->ENV['SERVER_IP']."/config/flashinfo.json";
        $flashinfo = curl_init();  
        curl_setopt($flashinfo,CURLOPT_URL, $url);
        curl_setopt($flashinfo,CURLOPT_RETURNTRANSFER, true);
        $flashinfo = curl_exec($flashinfo);
        $flashinfo = json_decode($flashinfo, true);
        return $flashinfo;
    }

    public function weather() {
        $url = "http://api.weatherbit.io/v2.0/current?key=" . $this->ENV['weatherbit_APIKEY'] . "&lang=fr&units=M&city=" . $this->ENV['weatherbit_city'] . "" ;
        $weather = curl_init();  
        curl_setopt($weather, CURLOPT_URL,$url);
        curl_setopt($weather, CURLOPT_RETURNTRANSFER, true);
        $weather = curl_exec($weather);
        $weather = json_decode($weather, true);
        if (!empty($weather['status_code']) && $weather['status_code'] == 429) {
            return false;
        } else {
            return $weather;
        }
    }
    
}

?>