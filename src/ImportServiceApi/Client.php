<?php

declare(strict_types=1);

namespace kp\MicroserviceApi\ImportServiceApi;

use kp\MicroserviceApi\AbstractClient;
use kp\MicroserviceApi\ImportServiceApi\News\NewsGroup;

class Client extends AbstractClient
{
    /**
     * @return NewsGroup
     */
    public function upload(): NewsGroup
    {
        return new NewsGroup($this);
    }

    /**
     * @return NewsGroup
     */
    public function get(): NewsGroup
    {
        return new NewsGroup($this);
    }
}