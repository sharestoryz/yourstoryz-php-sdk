<?php

namespace YourStoryz\PhpSdk\Requests\Companies;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCompany
 */
class GetCompany extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1/companies/{$this->id}";
    }

    /**
     * @param  int  $id  The ID of the company.
     */
    public function __construct(
        protected int $id,
    ) {}
}
