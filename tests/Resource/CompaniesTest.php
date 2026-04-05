<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use YourStoryz\PhpSdk\Requests\Companies\GetCompanies;
use YourStoryz\PhpSdk\Requests\Companies\GetCompany;
use YourStoryz\PhpSdk\Requests\Companies\GetDepartments;
use YourStoryz\PhpSdk\Requests\Companies\GetPublishedVideos;
use YourStoryz\PhpSdk\Requests\Companies\GetSettings;
use YourStoryz\PhpSdk\Requests\Companies\GetStories;
use YourStoryz\PhpSdk\YourStoryz;

it('can get all companies', function () {
    $mockClient = new MockClient([
        GetCompanies::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetCompanies, $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetCompanies::class);
});

it('can get a single company', function () {
    $mockClient = new MockClient([
        GetCompany::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetCompany(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetCompany::class);
});

it('can get company settings', function () {
    $mockClient = new MockClient([
        GetSettings::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetSettings(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetSettings::class);
});

it('can get company departments', function () {
    $mockClient = new MockClient([
        GetDepartments::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetDepartments(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetDepartments::class);
});

it('can get company stories', function () {
    $mockClient = new MockClient([
        GetStories::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetStories(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetStories::class);
});

it('can get company published videos', function () {
    $mockClient = new MockClient([
        GetPublishedVideos::class => MockResponse::make(['data' => []], 200),
    ]);

    $connector = new YourStoryz('test-token');
    $response = $connector->send(new GetPublishedVideos(1), $mockClient);

    expect($response->status())->toBe(200);
    $mockClient->assertSent(GetPublishedVideos::class);
});
