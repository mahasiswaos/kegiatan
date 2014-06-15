<?php

/**
 * Description of Printpre
 *
 * @author aljufry
 */
class PrintPre {

    /**
     * Method ini digunakan untuk mencetak
     * array, object dan berbagai macam
     * tipe data dalam struktrur yang rapi
     * menggunakan tag pre html
     * 
     * @param mix $var
     * @param boolean $detail
     */
    public static function out($var, $detail = false) {
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
