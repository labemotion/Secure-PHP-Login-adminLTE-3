<?php

class SiteDefinitions {

    public function __construct() {
        global $conn;

        $result = $conn->query("SELECT config_name, config_value FROM configuration");

        while ($rowt = $result->fetch_array()) {
            define($rowt['config_name'], $rowt['config_value']);
        }
    }

}
