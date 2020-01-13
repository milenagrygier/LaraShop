<?php

namespace Modules\Logs\Services;

use Monolog\Formatter\NormalizerFormatter;
use Carbon\Carbon;

class FormatMySqlLogs extends NormalizerFormatter
{
    public function format(array $data)
    {
        $record = parent::format($data);
        return $this->formatLogArray($data);
    }

    private function formatLogArray(array $data)
    {
        $data['ip'] = request()->server('REMOTE_ADDR');
        $data['user_agent'] = request()->server('HTTP_USER_AGENT');
        $data['instance'] = request()->server('LOGONSERVER');
        $data['created_at'] = Carbon::parse($data['datetime'])->format('Y-m-d H:i:s');
        $data['updated_at'] = Carbon::parse($data['datetime'])->format('Y-m-d H:i:s');
        if(isset($data['context']['exception']))
        {
            $data['exception_class'] = get_class($data['context']['exception']);
            $data['file'] = $data['context']['exception']->getFile();
            $data['line'] = $data['context']['exception']->getLine();
            $data['context'] = $data['context']['exception']->getTraceAsString();
        }
        else{
            $data['context'] = json_encode($data['context']);
        }

        return $data;
    }
}