<?php

declare(strict_types=1);

namespace kp\MicroserviceApi\ImportServiceApi\News\Request;

use kp\MicroserviceApi\Request\AbstractRequest;

class UploadRequest extends AbstractRequest
{
    public const PATH = "/news/upload";

    public const METHOD = "GET";
}