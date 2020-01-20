<?php

namespace Modules\Logs\Services;

use Monolog\Logger;
use Modules\Logs\Handlers\MySqlLogHandler;
use Modules\Logs\Services\MySqlLogProcessor;

class MySqlLogMonolog
{
    /**
    * Create a custom Monolog instance.
    *
    * @param  array $config
    * @return \Monolog\Logger
    */

    public function __invoke(array $config)
    {
        $logger = new Logger('monolog');
        $logger->pushHandler(new MySqlLogHandler());
    }
}
