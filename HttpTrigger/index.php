<?php
use Azserverless\Context\FunctionContext;

function run(FunctionContext $context) {
    $req = $context->inputs['req'];
    $context->log->info('Http trigger invoked');

    $query = $req['Query'];

    if (array_key_exists('code', $query)) {
        $code = $query['code'];
        $message = 'Hello ' . $query['code'] . '!';
    } else {
        $code = 'EMPTY';
        $message = 'Please pass a `code` in the query string';
    }

    return [
        'body' => $message,
        'headers' => [
            'Content-type' => 'text/plain'
        ]
    ];
}
?>