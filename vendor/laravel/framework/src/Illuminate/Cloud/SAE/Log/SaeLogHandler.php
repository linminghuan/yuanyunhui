<?php 
namespace Illuminate\Cloud\SAE\Log;

use Monolog\Handler\AbstractProcessingHandler;

class SaeLogHandler extends AbstractProcessingHandler {

    /**
     * {@inheritdoc}
     */
    protected function write(array $record)
    {
    	sae_set_display_errors(false);
        sae_debug((string) $record['formatted']); 
		sae_set_display_errors(true);
    }

}