<?php

namespace YourStoryz\PhpSdk\Requests\PublishedVideos;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPublishedVideo
 */
class GetPublishedVideo extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1/published-videos/{$this->id}";
    }

    /**
     * @param  int  $id  The ID of the published video.
     */
    public function __construct(
        protected int $id,
    ) {}
}
