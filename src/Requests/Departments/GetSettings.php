<?php

namespace YourStoryz\PhpSdk\Requests\Departments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSettings
 */
class GetSettings extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1/departments/{$this->departmentId}/settings";
    }

    /**
     * @param  int  $departmentId  The ID of the department.
     */
    public function __construct(
        protected int $departmentId,
    ) {}
}
