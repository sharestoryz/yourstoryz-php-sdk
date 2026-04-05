<?php

namespace YourStoryz\PhpSdk\Resource;

use Saloon\Http\Response;
use YourStoryz\PhpSdk\Requests\PublishedVideos\GetPublishedVideo;
use Saloon\Http\BaseResource;

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
