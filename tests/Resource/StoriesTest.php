<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use YourStoryz\PhpSdk\Requests\Stories\CreateStory;
use YourStoryz\PhpSdk\Requests\Stories\DeleteStory;
use YourStoryz\PhpSdk\Requests\Stories\GetStories;
use YourStoryz\PhpSdk\Requests\Stories\GetStory;
use YourStoryz\PhpSdk\Requests\Stories\UpdateStory;
use YourStoryz\PhpSdk\YourStoryz;

it('can get all stories', function () {
    $mockClient = new MockClient([
        GetStories::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetStories, $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetStories::class);
});

it('can get a single story', function () {
    $mockClient = new MockClient([
        GetStory::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetStory(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetStory::class);
});

it('can create a story', function () {
    $mockClient = new MockClient([
        CreateStory::class => MockResponse::make(['data' => []], 201),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new CreateStory, $mockClient);

    expect($response->status())->toBe(201);
    $mockClient->assertSent(CreateStory::class);
});

it('can update a story', function () {
    $mockClient = new MockClient([
        UpdateStory::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new UpdateStory(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(UpdateStory::class);
});

it('can delete a story', function () {
    $mockClient = new MockClient([
        DeleteStory::class => MockResponse::make([], 204),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new DeleteStory(1), $mockClient);

    expect($response->status())->toBe(204);
    $mockClient->assertSent(DeleteStory::class);
});
