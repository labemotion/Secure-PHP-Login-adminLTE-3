<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SiteDefinitions
 *
 * @author Dell
 */
class SiteDefinitions {

    public function __construct() {
        global $conn;

        $result = $conn->query("SELECT config_name, config_value FROM configuration");

        while ($rowt = $result->fetch_array()) {
            define($rowt['config_name'], $rowt['config_value']);
        }
    }

}
