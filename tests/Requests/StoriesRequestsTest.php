<?php

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use YourStoryz\PhpSdk\Requests\Stories\CreateStory;
use YourStoryz\PhpSdk\Requests\Stories\DeleteStory;
use YourStoryz\PhpSdk\Requests\Stories\GetStories;
use YourStoryz\PhpSdk\Requests\Stories\GetStory;
use YourStoryz\PhpSdk\Requests\Stories\UpdateStory;

it('GetStories resolves the correct endpoint', function () {
    $request = new GetStories;

    expect($request->resolveEndpoint())->toBe('/api/v1/stories')
        ->and($request->getMethod())->toBe(Method::GET);
});

it('GetStory resolves the correct endpoint', function () {
    $request = new GetStory(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/stories/42')
        ->and($request->getMethod())->toBe(Method::GET);
});

it('CreateStory resolves the correct endpoint', function () {
    $request = new CreateStory;

    expect($request->resolveEndpoint())->toBe('/api/v1/stories')
        ->and($request->getMethod())->toBe(Method::POST)
        ->and($request)->toBeInstanceOf(HasBody::class);
});

it('UpdateStory resolves the correct endpoint', function () {
    $request = new UpdateStory(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/stories/42')
        ->and($request->getMethod())->toBe(Method::PUT);
});

it('DeleteStory resolves the correct endpoint', function () {
    $request = new DeleteStory(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/stories/42')
        ->and($request->getMethod())->toBe(Method::DELETE);
});
