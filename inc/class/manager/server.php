<?php

class servermanager {
    public function __consctruct($ENV) {
        $this->ENV = $ENV;
    }
    public function shutdown() {
        return false;
    }
    public function shutdown_now() {
        exec('/var/www/pixelsync/inc/class/manager/./shutdown.sh');
    }
}

?>