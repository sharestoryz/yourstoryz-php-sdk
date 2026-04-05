<?php

namespace YourStoryz\PhpSdk\Requests\Departments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getDepartments
 */
class GetDepartments extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/api/v1/departments';
    }

    public function __construct() {}
}
