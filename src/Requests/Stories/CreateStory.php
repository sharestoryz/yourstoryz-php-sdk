<?php

namespace YourStoryz\PhpSdk\Requests\Stories;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createStory
 */
class CreateStory extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/api/v1/stories';
    }

    public function __construct() {}
}
