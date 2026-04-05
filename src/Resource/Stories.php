<?php

namespace YourStoryz\PhpSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use YourStoryz\PhpSdk\Requests\Stories\CreateStory;
use YourStoryz\PhpSdk\Requests\Stories\DeleteStory;
use YourStoryz\PhpSdk\Requests\Stories\GetStories;
use YourStoryz\PhpSdk\Requests\Stories\GetStory;
use YourStoryz\PhpSdk\Requests\Stories\UpdateStory;

class Stories extends BaseResource
{
    public function all(): Response
    {
        return $this->connector->send(new GetStories);
    }

    public function create(): Response
    {
        return $this->connector->send(new CreateStory);
    }

    /**
     * @param  int  $id  The ID of the story.
     */
    public function get(int $id): Response
    {
        return $this->connector->send(new GetStory($id));
    }

    /**
     * @param  int  $id  The ID of the story.
     */
    public function update(int $id): Response
    {
        return $this->connector->send(new UpdateStory($id));
    }

    /**
     * @param  int  $id  The ID of the story.
     */
    public function delete(int $id): Response
    {
        return $this->connector->send(new DeleteStory($id));
    }
}
