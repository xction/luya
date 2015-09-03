<?php

namespace tests\cli\commands;

use Yii;

class RunCommandsTest extends \tests\cli\Base
{   
    public function testCustomCommandSuccess()
    {
        Yii::$app->request->setParams([
            'command', 'unitmodule', 'command-output/success',
        ]);
        
        $this->assertEquals(1, Yii::$app->run());
        
    }
    
    public function testCustomCommandError()
    {
    
        Yii::$app->request->setParams([
            'command', 'unitmodule', 'command-output/error',
        ]);
    
        $this->assertEquals(0, Yii::$app->run());
    }
}