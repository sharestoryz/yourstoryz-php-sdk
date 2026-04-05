<?php

namespace YourStoryz\PhpSdk\Requests\Companies;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCompanies
 */
class GetCompanies extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/api/v1/companies';
    }

    public function __construct() {}
}
