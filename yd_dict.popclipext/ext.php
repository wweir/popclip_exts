#!/usr/bin/env php
<?php

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => 'https://aidemo.youdao.com/trans',
    CURLOPT_POSTFIELDS => ['q' => getenv('POPCLIP_TEXT')],
    CURLOPT_RETURNTRANSFER => true,
]);
$resp = curl_exec($ch);
$resp = @(json_decode($resp, true));
curl_close($ch);

$translation = @join('; ', $resp['translation']);
if ($translation == getenv('POPCLIP_TEXT')) {
    $translation = @join('; ', $resp['basic']['explains']);
}

echo $translation;
