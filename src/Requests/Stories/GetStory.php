<?php

namespace YourStoryz\PhpSdk\Requests\Stories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getStory
 */
class GetStory extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/api/v1/stories/{$this->id}";
    }

    /**
     * @param  int  $id  The ID of the story.
     */
    public function __construct(
        protected int $id,
    ) {}
}
