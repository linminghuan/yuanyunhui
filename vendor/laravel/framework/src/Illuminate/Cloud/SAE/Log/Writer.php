<?php 
namespace Illuminate\Cloud\SAE\Log;

use Illuminate\Log\Writer as IlluminateLogWriter;
use Monolog\Formatter\LineFormatter;
use Illuminate\Cloud\SAE\Log\SaeLogHandler;

class Writer extends IlluminateLogWriter {

    protected function useSaeLog($level = 'debug')
    {
        $level = $this->parseLevel($level);
        $this->monolog->pushHandler($handler = new SaeLogHandler($level));
        $handler->setFormatter($this->getDefaultFormatter());
    }

    public function useFiles($path, $level = 'debug')
    {
        if (SAE) {
            return $this->useSaeLog($level);
        }

        parent::useFiles($path, $level);
    }

    public function useDailyFiles($path, $days = 0, $level = 'debug')
    {
        if (SAE) {
            return $this->useSaeLog($level);
        }

        parent::useDailyFiles($path, $days, $level);
    }

}
