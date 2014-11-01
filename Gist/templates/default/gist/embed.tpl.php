<?php

$embedded = '';
$body = Idno\Core\site()->triggerEvent('url/expandintext', ['object' => $vars['object']], $vars['object']->body); 

if (preg_match_all('/gist\.github\.com\/([^\/]+\/[0-9a-f]+)/i', $body, $matches)) {
    foreach ($matches[1] as $m)
        $embedded .= '<script src="https://gist.github.com/' . $m . '.js"></script>';
}

echo $embedded;