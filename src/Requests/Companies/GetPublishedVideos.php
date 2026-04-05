<?php

namespace YourStoryz\PhpSdk\Requests\Companies;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPublishedVideos
 */
class GetPublishedVideos extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1/companies/{$this->companyId}/published-videos";
    }

    /**
     * @param  int  $companyId  The ID of the company.
     */
    public function __construct(
        protected int $companyId,
    ) {}
}
