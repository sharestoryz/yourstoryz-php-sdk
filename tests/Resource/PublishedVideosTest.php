<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use YourStoryz\PhpSdk\Requests\PublishedVideos\GetPublishedVideo;
use YourStoryz\PhpSdk\YourStoryz;

it('can get a published video', function () {
    $mockClient = new MockClient([
        GetPublishedVideo::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetPublishedVideo(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetPublishedVideo::class);
});
