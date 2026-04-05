<?php

namespace YourStoryz\PhpSdk\Resource;

use Saloon\Http\Response;
use YourStoryz\PhpSdk\Requests\Companies\GetCompanies;
use YourStoryz\PhpSdk\Requests\Companies\GetCompany;
use YourStoryz\PhpSdk\Requests\Companies\GetDepartments;
use YourStoryz\PhpSdk\Requests\Companies\GetPublishedVideos;
use YourStoryz\PhpSdk\Requests\Companies\GetSettings;
use YourStoryz\PhpSdk\Requests\Companies\GetStories;
use YourStoryz\PhpSdk\Resource;

class Companies extends Resource
{
    public function all(): Response
    {
        return $this->connector->send(new GetCompanies);
    }

    /**
     * @param  int  $id  The ID of the company.
     */
    public function get(int $id): Response
    {
        return $this->connector->send(new GetCompany($id));
    }

    /**
     * @param  int  $companyId  The ID of the company.
     */
    public function settings(int $companyId): Response
    {
        return $this->connector->send(new GetSettings($companyId));
    }

    /**
     * @param  int  $companyId  The ID of the company.
     */
    public function departments(int $companyId): Response
    {
        return $this->connector->send(new GetDepartments($companyId));
    }

    /**
     * @param  int  $companyId  The ID of the company.
     */
    public function stories(int $companyId): Response
    {
        return $this->connector->send(new GetStories($companyId));
    }

    /**
     * @param  int  $companyId  The ID of the company.
     */
    public function publishedVideos(int $companyId): Response
    {
        return $this->connector->send(new GetPublishedVideos($companyId));
    }
}
