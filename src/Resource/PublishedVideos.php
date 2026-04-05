<?php

namespace YourStoryz\PhpSdk\Resource;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use YourStoryz\PhpSdk\Requests\PublishedVideos\GetPublishedVideo;

class PublishedVideos extends BaseResource
{
    /**
     * @param  int  $id  The ID of the published video.
     */
    public function get(int $id): Response
    {
        return $this->connector->send(new GetPublishedVideo($id));
    }
}
