<?php

use Saloon\Enums\Method;
use YourStoryz\PhpSdk\Requests\Users\GetPublishedVideos;
use YourStoryz\PhpSdk\Requests\Users\GetStories;
use YourStoryz\PhpSdk\Requests\Users\Me;

it('Me resolves the correct endpoint', function () {
    $request = new Me;

    expect($request->resolveEndpoint())->toBe('/api/v1/users/me')
        ->and($request->getMethod())->toBe(Method::GET);
});

it('GetStories resolves the correct endpoint', function () {
    $request = new GetStories(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/users/42/stories')
        ->and($request->getMethod())->toBe(Method::GET);
});

it('GetPublishedVideos resolves the correct endpoint', function () {
    $request = new GetPublishedVideos(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/users/42/published-videos')
        ->and($request->getMethod())->toBe(Method::GET);
});
