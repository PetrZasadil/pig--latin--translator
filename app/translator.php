<?php

namespace App;

/**
 * Description of translator
 * Main Class for Pig Latin translator
 * @author petrz
 */
class Translator {
    
    public $vowels = 'aeiou';
    public $oth = 'qu';
    
    public function hasVowels($input){
        $word = preg_match('/(['.$this->vowels.']+)(.*)/', $input);
        return $word;
    }
    
    public function strTranslate($input){
        
        $words = explode(' ', trim($input));
        
        $output = '';
        foreach($words as $word){
            
            if(substr($word, 2) === $this->oth && substr($word, -2) != 'ay'){
                
                $output .= ' '.preg_replace('/^(^'.$this->oth.'*)(.*)/', '$2-$1ay', $word);
                
            } elseif(substr($word, -2) != 'ay' && $this->hasVowels($word)){
                
                $output .=  ' '.preg_replace('/^([^'.$this->vowels.']*)(.*)/', '$2-$1ay', $word);
                
            } else {
                $output .=  ' '.$word;
            }
            
        }        
        return trim($output);
    }
    
}
