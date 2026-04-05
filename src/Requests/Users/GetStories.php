<?php

namespace YourStoryz\PhpSdk\Requests\Users;

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
        return "/api/v1/users/{$this->userId}/stories";
    }

    /**
     * @param  int  $userId  The ID of the user.
     */
    public function __construct(
        protected int $userId,
    ) {}
}
