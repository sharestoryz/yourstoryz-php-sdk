<?php

use Saloon\Enums\Method;
use YourStoryz\PhpSdk\Requests\PublishedVideos\GetPublishedVideo;

it('GetPublishedVideo resolves the correct endpoint', function () {
    $request = new GetPublishedVideo(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/published-videos/42')
        ->and($request->getMethod())->toBe(Method::GET);
});
