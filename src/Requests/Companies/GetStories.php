<?php

namespace YourStoryz\PhpSdk\Requests\Companies;

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
        return "/api/v1/companies/{$this->companyId}/stories";
    }

    /**
     * @param  int  $companyId  The ID of the company.
     */
    public function __construct(
        protected int $companyId,
    ) {}
}
