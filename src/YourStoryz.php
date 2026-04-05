<?php

namespace YourStoryz\PhpSdk;

use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;
use YourStoryz\PhpSdk\Resource\Companies;
use YourStoryz\PhpSdk\Resource\Departments;
use YourStoryz\PhpSdk\Resource\PublishedVideos;
use YourStoryz\PhpSdk\Resource\Stories;
use YourStoryz\PhpSdk\Resource\Users;

/**
 * Your Storyz API Documentation
 *
 * This documentation aims to provide all the information you need to work with our API.
 */
class YourStoryz extends Connector
{
    use AlwaysThrowOnErrors;

    public function __construct(
        protected string $token,
        protected string $baseUrl = 'https://dashbaord.yourstoryz.com',
    ) {}

    public function resolveBaseUrl(): string
    {
        return $this->baseUrl;
    }

    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator($this->token);
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    public function companies(): Companies
    {
        return new Companies($this);
    }

    public function departments(): Departments
    {
        return new Departments($this);
    }

    public function publishedVideos(): PublishedVideos
    {
        return new PublishedVideos($this);
    }

    public function stories(): Stories
    {
        return new Stories($this);
    }

    public function users(): Users
    {
        return new Users($this);
    }
}
