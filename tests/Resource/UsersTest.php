<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use YourStoryz\PhpSdk\Requests\Users\GetPublishedVideos;
use YourStoryz\PhpSdk\Requests\Users\GetStories;
use YourStoryz\PhpSdk\Requests\Users\Me;
use YourStoryz\PhpSdk\YourStoryz;

it('can get the authenticated user', function () {
    $mockClient = new MockClient([
        Me::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new Me, $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(Me::class);
});

it('can get user published videos', function () {
    $mockClient = new MockClient([
        GetPublishedVideos::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetPublishedVideos(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetPublishedVideos::class);
});

it('can get user stories', function () {
    $mockClient = new MockClient([
        GetStories::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetStories(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetStories::class);
});
