<?php //>

use OpenApi\Analysers\TokenAnalyser;
use OpenApi\Generator;

return new class() extends matrix\web\Controller {

    protected function process($form) {
        $paths = [
            APP_HOME . 'class',
            APP_HOME . 'controller',
        ];

        $options = [
            'analyser' => new TokenAnalyser(),
        ];

        $result = json_decode(Generator::scan($paths, $options)->toJson(), true);
        $result['success'] = true;

        return $result;
    }

};
