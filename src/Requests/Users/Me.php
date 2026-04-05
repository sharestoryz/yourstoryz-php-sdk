<?php

namespace YourStoryz\PhpSdk\Requests\Users;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class Me extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/api/v1/users/me';
    }
}
