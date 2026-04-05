<?php

namespace YourStoryz\PhpSdk\Requests\Stories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteStory
 */
class DeleteStory extends Request
{
    protected Method $method = Method::DELETE;

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
