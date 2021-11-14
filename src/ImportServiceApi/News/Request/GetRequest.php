<?php

declare(strict_types=1);

namespace kp\MicroserviceApi\ImportServiceApi\News\Request;

use kp\MicroserviceApi\ImportServiceApi\News\Response\GetResponse;
use kp\MicroserviceApi\Request\AbstractRequest;

class GetRequest extends AbstractRequest
{
    public const PATH = "/news/";

    public const METHOD = "GET";

    /**
     * @var int
     */
    private int $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return GetRequest
     */
    public function setId(int $id) : GetRequest
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return array
     */
    public function getPathParams(): array
    {
        return ['path' => $this->getId()];
    }

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return GetResponse::class;
    }
}