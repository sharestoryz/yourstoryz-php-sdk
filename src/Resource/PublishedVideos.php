<?php

namespace YourStoryz\PhpSdk\Resource;

use Saloon\Http\Response;
use YourStoryz\PhpSdk\Requests\PublishedVideos\GetPublishedVideo;
use YourStoryz\PhpSdk\Resource;

class PublishedVideos extends Resource
{
    /**
     * @param  int  $id  The ID of the published video.
     */
    public function get(int $id): Response
    {
        return $this->connector->send(new GetPublishedVideo($id));
    }
}
