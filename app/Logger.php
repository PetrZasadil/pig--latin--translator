<?php

namespace App;

/**
 * Description of Logger
 * Simple logger for Pig Translator
 * @author petrz
 */
class Logger {
   
    function __construct() {
        
        global $logging_path;
        
        $this->path = $logging_path;
    }
    
    public function log($input,$output){
        
        $date = date('m.d.Y H:i:s');
        
        $action = $date .' | '. $input .' -> translate to -> '.$output.PHP_EOL;
        $content = file_get_contents($this->path);
        $content .= $action;
        $log = file_put_contents($this->path, $content );
        
    }
    
}
