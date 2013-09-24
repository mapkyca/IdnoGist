<?php

$embedded = '';
if (preg_match_all('/gist\.github\.com\/([^\/]+\/[0-9a-f]+)/i', $vars['object']->body, $matches)) {
    foreach ($matches[1] as $m)
        $embedded .= '<script src="https://gist.github.com/' . $m . '.js"></script>';
}

echo $embedded;