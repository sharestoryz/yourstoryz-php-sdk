<?php

namespace YourStoryz\PhpSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use YourStoryz\PhpSdk\Requests\Users\GetPublishedVideos;
use YourStoryz\PhpSdk\Requests\Users\GetStories;
use YourStoryz\PhpSdk\Requests\Users\Me;

class Users extends BaseResource
{
    public function me(): Response
    {
        return $this->connector->send(new Me);
    }

    /**
     * @param  int  $userId  The ID of the user.
     */
    public function publishedVideos(int $userId): Response
    {
        return $this->connector->send(new GetPublishedVideos($userId));
    }

    /**
     * @param  int  $userId  The ID of the user.
     */
    public function stories(int $userId): Response
    {
        return $this->connector->send(new GetStories($userId));
    }
}
