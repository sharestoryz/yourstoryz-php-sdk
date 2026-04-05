<?php

use Saloon\Http\Auth\TokenAuthenticator;
use YourStoryz\PhpSdk\Resource\Companies;
use YourStoryz\PhpSdk\Resource\Departments;
use YourStoryz\PhpSdk\Resource\PublishedVideos;
use YourStoryz\PhpSdk\Resource\Stories;
use YourStoryz\PhpSdk\Resource\Users;
use YourStoryz\PhpSdk\YourStoryz;

it('resolves the base url', function () {
    $connector = new YourStoryz('test-token');

    expect($connector->resolveBaseUrl())->toBe('https://dashbaord.yourstoryz.com');
});

it('accepts a custom base url', function () {
    $connector = new YourStoryz('test-token', 'https://custom.example.com');

    expect($connector->resolveBaseUrl())->toBe('https://custom.example.com');
});

it('uses token authentication', function () {
    $connector = new YourStoryz('test-token');

    $auth = $connector->getAuthenticator();

    expect($auth)->toBeInstanceOf(TokenAuthenticator::class);
});

it('sets default headers', function () {
    $connector = new YourStoryz('test-token');

    $headers = $connector->headers()->all();

    expect($headers)->toHaveKey('Accept', 'application/json')
        ->toHaveKey('Content-Type', 'application/json');
});

it('returns a companies resource', function () {
    $connector = new YourStoryz('test-token');

    expect($connector->companies())->toBeInstanceOf(Companies::class);
});

it('returns a departments resource', function () {
    $connector = new YourStoryz('test-token');

    expect($connector->departments())->toBeInstanceOf(Departments::class);
});

it('returns a published videos resource', function () {
    $connector = new YourStoryz('test-token');

    expect($connector->publishedVideos())->toBeInstanceOf(PublishedVideos::class);
});

it('returns a stories resource', function () {
    $connector = new YourStoryz('test-token');

    expect($connector->stories())->toBeInstanceOf(Stories::class);
});

it('returns a users resource', function () {
    $connector = new YourStoryz('test-token');

    expect($connector->users())->toBeInstanceOf(Users::class);
});
