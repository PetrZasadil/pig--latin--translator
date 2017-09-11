<?php

namespace App;

/**
 * Description of translator
 *
 * @author petrz
 */
class Translator {
    
    public $vowels = 'aeiou';
    public $oth = 'qu';
    
    public function hasVowels($input){
        $word = preg_match('/(['.$this->vowels.']+)(.*)/', $input);
        return $word;
    }
    
    public function translate($input){
        return $output;
    }
    
}
