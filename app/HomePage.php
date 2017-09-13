<?php
namespace App;

use App\Translator;
/**
 * Description of HomePage
 *
 * @author petrz
 */
class HomePage {

    public function renderHomePage(){

        $posts = filter_input(INPUT_POST, 'input', FILTER_SANITIZE_STRING);
        /* Template iput is for simple ajax.  This ajax solution is not for real apps, no routing, no security etc.
         * This solution is for a code demonstration.  
         */
        $template = filter_input(INPUT_POST, 'template', FILTER_SANITIZE_STRING);

        if(!$template){
            $template = 'HomePage';
        }

        $output = NULL;
        if($posts){
            
            $translator = new Translator();
            $output = $translator->strTranslate($posts);
            
        }

        $latte = new \Latte\Engine;
        $latte ->setTempDirectory(__DIR__ . '/temp');
        $latte ->render( __DIR__ . '/templates/'.$template.'.latte', ['posts' => $output]); 
    }
    
}