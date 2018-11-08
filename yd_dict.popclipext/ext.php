#!/usr/bin/env php
<?php

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => 'https://aidemo.youdao.com/trans',
    CURLOPT_POSTFIELDS => ['q' => getenv('POPCLIP_TEXT')],
    CURLOPT_RETURNTRANSFER => true,
]);
$resp = curl_exec($ch);
curl_close($ch);

echo @join('; ', @(json_decode($resp, true))['translation']);