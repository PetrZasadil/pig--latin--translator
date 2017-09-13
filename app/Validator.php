<?php
namespace App;

/**
 * Description of validator
 * validation input for pig tranlator
 * @author petrz
 */

class Validator {
    
    /*simple validator for translator*/
    public function validate($input){
        $string = filter_var($input, FILTER_SANITIZE_STRING);
        if($string && $string !=  ' '){
            $san_string = preg_replace('/\s+/', ' ',$string);
        } else {
            $san_string = '';
        }
        $final_string  = strtolower($san_string);
        return trim($final_string);
    }
    
}
