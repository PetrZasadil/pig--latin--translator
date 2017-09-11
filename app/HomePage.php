<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

use App\Translator;
/**
 * Description of HomePage
 *
 * @author petrz
 */
class HomePage {

    public function renderHomePage(){
        
        $posts = filter_input(INPUT_POST, 'input');
        $output = NULL;
        if($posts){
            
            $translator = new Translator();
            $output = $translator->strTranslate($posts);
            
        }
        $latte = new \Latte\Engine;
        $latte ->setTempDirectory(__DIR__ . '/temp');
        $latte ->render( __DIR__ . '/templates/HomePage.latte', ['posts' => $output]);
        
        
    }
    
}
