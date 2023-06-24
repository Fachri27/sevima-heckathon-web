<?php

require __DIR__ . '/vendor/autoload.php'; // remove this line if you use a PHP Framework.

use Orhanerday\OpenAi\OpenAi;

$open_ai = new OpenAi("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");


$complete = $open_ai->completion([
    'model' => 'text-davinci-002',
    'prompt' => 'Hello',
    'temperature' => 0.9,
    'max_tokens' => 150,
    'frequency_penalty' => 0,
    'presence_penalty' => 0.6,
 ]);

 print($complete);