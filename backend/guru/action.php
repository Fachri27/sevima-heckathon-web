<?php

 use Orhanerday\OpenAi\OpenAi;
 
 require __DIR__ . '/../../vendor/autoload.php'; // remove this line if you use a PHP Framework.

 
 $open_ai = new OpenAi('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');

 //completions
 $complete = $open_ai->completion([
    'model' => 'text-davinci-002',
    'prompt' => 'Hello Fachri',
    'temperature' => 0.9,
    'max_tokens' => 150,
    'frequency_penalty' => 0,
    'presence_penalty' => 0.6,
 ]);

 echo $complete;

//  if($complete != null){
//     $php_obj = json_decode($complete);
//     $respon = $php_obj->choices[0]->text;
//     echo $respon;
//  }



?>