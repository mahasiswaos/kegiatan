<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Printpre
 *
 * @author aljufry
 */
class Printpre {

    public static function aut($var, $detail = false) {
        if ($detail == false) {
            echo "<pre>";
            print_r($var);
            echo "</pre>";
        } else {
            echo "<pre>";
            var_dump($var);
            echo "</pre>";
        }
    }

}
