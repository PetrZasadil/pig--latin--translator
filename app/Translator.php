<?php
namespace App;

use App\Validator;

use App\Logger;
/**
 * Description of translator
 * Main Class for Pig Latin translator
 * @author petrz
 */
class Translator {
    
    public function __construct() {
        global $vowels, $oth, $logging;
        
        $this->vowels = $vowels;
        $this->oth = $oth;
        
        $this->logging = $logging;
        
    }
    
    public function hasVowels($input){
        $word = preg_match('/(['.$this->vowels.']+)(.*)/', $input);
        return $word;
    }
    
    public function strTranslate($input){
        
        $validator = new Validator();
        
        $valid_input = trim($validator->validate($input)); //validate full string
        
        $words = explode(' ', $valid_input); //create array of words
        
        $output = '';
        
        foreach($words as $word){ //translate all words
            
            if(substr($word, 0, 2) === $this->oth && substr($word, -2) != 'ay'){
                
                $output .= ' '.preg_replace('/^(^'.$this->oth.'*)(.*)/', '$2-$1ay', $word);
                
            } elseif(substr($word, -2) != 'ay' && $this->hasVowels($word)){
                
                $output .=  ' '.preg_replace('/^([^'.$this->vowels.']*)(.*)/', '$2-$1ay', $word);    
                
            } else {
                
                $output .=  ' '.$word;
            }
            
        }        
        
        if($this->logging){
            $log = new Logger();
            $log->log($valid_input, trim($output));
        }
        
        return trim($output);
    }
    
}
