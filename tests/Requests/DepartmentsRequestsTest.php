<?php

use Saloon\Enums\Method;
use YourStoryz\PhpSdk\Requests\Departments\GetDepartment;
use YourStoryz\PhpSdk\Requests\Departments\GetDepartments;
use YourStoryz\PhpSdk\Requests\Departments\GetPublishedVideos;
use YourStoryz\PhpSdk\Requests\Departments\GetSettings;
use YourStoryz\PhpSdk\Requests\Departments\GetStories;

it('GetDepartments resolves the correct endpoint', function () {
    $request = new GetDepartments;

    expect($request->resolveEndpoint())->toBe('/api/v1/departments')
        ->and($request->getMethod())->toBe(Method::GET);
});

it('GetDepartment resolves the correct endpoint', function () {
    $request = new GetDepartment(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/departments/42')
        ->and($request->getMethod())->toBe(Method::GET);
});

it('GetSettings resolves the correct endpoint', function () {
    $request = new GetSettings(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/departments/42/settings')
        ->and($request->getMethod())->toBe(Method::GET);
});

it('GetStories resolves the correct endpoint', function () {
    $request = new GetStories(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/departments/42/stories')
        ->and($request->getMethod())->toBe(Method::GET);
});

it('GetPublishedVideos resolves the correct endpoint', function () {
    $request = new GetPublishedVideos(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/departments/42/published-videos')
        ->and($request->getMethod())->toBe(Method::GET);
});
