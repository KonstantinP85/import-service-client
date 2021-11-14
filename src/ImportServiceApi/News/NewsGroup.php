<?php

declare(strict_types=1);

namespace kp\MicroserviceApi\ImportServiceApi\News;

use kp\MicroserviceApi\Group\AbstractGroup;
use kp\MicroserviceApi\ImportServiceApi\News\Request\GetRequest;
use kp\MicroserviceApi\ImportServiceApi\News\Request\UploadRequest;
use kp\MicroserviceApi\ImportServiceApi\News\Response\GetResponse;
use kp\MicroserviceApi\Response\SuccessfulResponse;

class NewsGroup extends AbstractGroup
{
    /**
     * @param UploadRequest $request
     * @return SuccessfulResponse
     * @throws \Exception
     */
    public function upload(UploadRequest $request): SuccessfulResponse
    {
        return $this->request($request);
    }

    /**
     * @param GetRequest $request
     * @return GetResponse
     * @throws \Exception
     */
    public function get(GetRequest $request): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($request);

        return $response;
    }
}