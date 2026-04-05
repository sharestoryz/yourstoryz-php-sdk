<?php

namespace YourStoryz\PhpSdk\Requests\Departments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getDepartment
 */
class GetDepartment extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1/departments/{$this->id}";
    }

    /**
     * @param  int  $id  The ID of the department.
     */
    public function __construct(
        protected int $id,
    ) {}
}
