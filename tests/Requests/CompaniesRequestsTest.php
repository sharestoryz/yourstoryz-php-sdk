<?php

use Saloon\Enums\Method;
use YourStoryz\PhpSdk\Requests\Companies\GetCompanies;
use YourStoryz\PhpSdk\Requests\Companies\GetCompany;
use YourStoryz\PhpSdk\Requests\Companies\GetDepartments;
use YourStoryz\PhpSdk\Requests\Companies\GetPublishedVideos;
use YourStoryz\PhpSdk\Requests\Companies\GetSettings;
use YourStoryz\PhpSdk\Requests\Companies\GetStories;

it('GetCompanies resolves the correct endpoint', function () {
    $request = new GetCompanies;

    expect($request->resolveEndpoint())->toBe('/api/v1/companies')
        ->and($request->getMethod())->toBe(Method::GET);
});

it('GetCompany resolves the correct endpoint', function () {
    $request = new GetCompany(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/companies/42')
        ->and($request->getMethod())->toBe(Method::GET);
});

it('GetSettings resolves the correct endpoint', function () {
    $request = new GetSettings(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/companies/42/settings')
        ->and($request->getMethod())->toBe(Method::GET);
});

it('GetDepartments resolves the correct endpoint', function () {
    $request = new GetDepartments(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/companies/42/departments')
        ->and($request->getMethod())->toBe(Method::GET);
});

it('GetStories resolves the correct endpoint', function () {
    $request = new GetStories(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/companies/42/stories')
        ->and($request->getMethod())->toBe(Method::GET);
});

it('GetPublishedVideos resolves the correct endpoint', function () {
    $request = new GetPublishedVideos(42);

    expect($request->resolveEndpoint())->toBe('/api/v1/companies/42/published-videos')
        ->and($request->getMethod())->toBe(Method::GET);
});
