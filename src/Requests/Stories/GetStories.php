<?php

namespace YourStoryz\PhpSdk\Requests\Stories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getStories
 */
class GetStories extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/api/v1/stories';
    }

    public function __construct() {}
}
