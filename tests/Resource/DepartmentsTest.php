<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use YourStoryz\PhpSdk\Requests\Departments\GetDepartment;
use YourStoryz\PhpSdk\Requests\Departments\GetDepartments;
use YourStoryz\PhpSdk\Requests\Departments\GetPublishedVideos;
use YourStoryz\PhpSdk\Requests\Departments\GetSettings;
use YourStoryz\PhpSdk\Requests\Departments\GetStories;
use YourStoryz\PhpSdk\YourStoryz;

it('can get all departments', function () {
    $mockClient = new MockClient([
        GetDepartments::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetDepartments, $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetDepartments::class);
});

it('can get a single department', function () {
    $mockClient = new MockClient([
        GetDepartment::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetDepartment(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetDepartment::class);
});

it('can get department settings', function () {
    $mockClient = new MockClient([
        GetSettings::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetSettings(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetSettings::class);
});

it('can get department stories', function () {
    $mockClient = new MockClient([
        GetStories::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetStories(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetStories::class);
});

it('can get department published videos', function () {
    $mockClient = new MockClient([
        GetPublishedVideos::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetPublishedVideos(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetPublishedVideos::class);
});
