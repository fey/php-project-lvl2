<?php

namespace GenDiff\Formatters\Json;

function format($diff): string
{
    return json_encode($diff, JSON_PRETTY_PRINT) . "\n";
}
