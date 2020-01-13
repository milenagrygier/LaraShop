<?php

namespace Modules\Logs\Handlers;

use Modules\Logs\Entities\Log as LogModel;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Formatter\FormatterInterface;

class MySqlLogHandler extends AbstractProcessingHandler
{

    public function __construct($level = Logger::DEBUG)
    {
        parent::__construct($level);
    }

    protected function write(array $data) :void
    {
       LogModel::create($data['formatted']); 
    }
}