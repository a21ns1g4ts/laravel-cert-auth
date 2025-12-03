<?php

use A2Insights\LaravelCertAuth\Example;

it('foo', function (): void {
    $example = new Example;

    $result = $example->foo();

    expect($result)->toBe('bar');
});
