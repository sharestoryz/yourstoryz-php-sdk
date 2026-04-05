<?php

namespace YourStoryz\PhpSdk\Resource;

use Saloon\Http\Response;
use YourStoryz\PhpSdk\Requests\Departments\GetDepartment;
use YourStoryz\PhpSdk\Requests\Departments\GetDepartments;
use YourStoryz\PhpSdk\Requests\Departments\GetPublishedVideos;
use YourStoryz\PhpSdk\Requests\Departments\GetSettings;
use YourStoryz\PhpSdk\Requests\Departments\GetStories;
use Saloon\Http\BaseResource;

class Departments extends BaseResource
{
    public function all(): Response
    {
        return $this->connector->send(new GetDepartments);
    }

    /**
     * @param  int  $id  The ID of the department.
     */
    public function get(int $id): Response
    {
        return $this->connector->send(new GetDepartment($id));
    }

    /**
     * @param  int  $departmentId  The ID of the department.
     */
    public function settings(int $departmentId): Response
    {
        return $this->connector->send(new GetSettings($departmentId));
    }

    /**
     * @param  int  $departmentId  The ID of the department.
     */
    public function stories(int $departmentId): Response
    {
        return $this->connector->send(new GetStories($departmentId));
    }

    /**
     * @param  int  $departmentId  The ID of the department.
     */
    public function publishedVideos(int $departmentId): Response
    {
        return $this->connector->send(new GetPublishedVideos($departmentId));
    }
}
