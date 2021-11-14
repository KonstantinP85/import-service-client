<?php

declare(strict_types=1);

namespace kp\MicroserviceApi\ImportServiceApi\News\Response;

use kp\MicroserviceApi\Response\SuccessfulResponse;

class GetResponse extends SuccessfulResponse
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $category;

    /**
     * @var int
     */
    private int $datetime;

    /**
     * @var string
     */
    private string $headline;

    /**
     * @var int
     */
    private int $sourceId;

    /**
     * @var string
     */
    private string $image;

    /**
     * @var string|null
     */
    private ?string $related;

    /**
     * @var string
     */
    private string $resource;

    /**
     * @var string
     */
    private string $summary;

    /**
     * @var string
     */
    private string $url;

    /**
     * @param $result
     */
    public function __construct($result)
    {
        parent::__construct($result);
        $this->id = $this->getContents()->id;
        $this->category = $this->getContents()->category;
        $this->datetime = $this->getContents()->datetime;
        $this->headline = $this->getContents()->headline;
        $this->sourceId = $this->getContents()->source_id;
        $this->image = $this->getContents()->image;
        $this->related = $this->getContents()->related;
        $this->resource = $this->getContents()->resource;
        $this->summary = $this->getContents()->summary;
        $this->url = $this->getContents()->url;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @return int
     */
    public function getDatetime(): int
    {
        return $this->datetime;
    }

    /**
     * @return string
     */
    public function getHeadline(): string
    {
        return $this->headline;
    }

    /**
     * @return int
     */
    public function getSourceId(): int
    {
        return $this->sourceId;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return string|null
     */
    public function getRelated(): ?string
    {
        return $this->related;
    }

    /**
     * @return string
     */
    public function getResource(): string
    {
        return $this->resource;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}