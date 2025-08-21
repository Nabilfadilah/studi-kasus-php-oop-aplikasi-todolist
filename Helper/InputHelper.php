<?php

// namespace helper
namespace Helper {

    // class inputhelper
    class InputHelper
    {
        // function input, parameter $info, tipe data string
        // static function, agar bisa diakses langsung 
        static function input(string $info): string
        {
            // tampilkan info 
            echo "$info : ";
            $result = fgets(STDIN);
            return trim($result);
        }
    }
}
