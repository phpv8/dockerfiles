<?php declare(strict_types=1);

use Ref\WeakReference;
use V8\{
    Isolate,
    Context,
    StringValue,
    Script
};

$isolate = new Isolate();
$context = new Context($isolate);

echo 'Running script ...', PHP_EOL;
echo (new Script($context, new StringValue($isolate, "'Hello, ' + 'world!'")))->run($context)->value(), PHP_EOL;

$weak_ref = new WeakReference($isolate, function () {
    echo 'Isolate destroyed', PHP_EOL;
});

echo 'Destroying ...', PHP_EOL;
$context = null;
$isolate = null;
echo 'Exiting ...', PHP_EOL;
