<?php

namespace Magedin\Course\Plugin;

use Magedin\Course\Controller\Teste\Index;

class PluginOne
{
    public function beforeExecute(Index $subject)
    {
        echo 'Plugin one before.'
 ;   }
    public function aroundExecute(Index $subject, \Closure $proceed)
    {
        echo '<br>Plugin one around';/*se não chamar o proceed não executa o método original*/
        return $proceed();
    }
    public function afterExecute(Index $subject, $value)
    {
        echo 'Plugin one after.';
        return $value;
    }
}