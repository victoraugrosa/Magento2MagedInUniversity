<?php

namespace Magedin\Course\Plugin;

use Magedin\Course\Controller\Teste\Index;

class PluginTwo
{
    public function beforeExecute(Index $subject)
    {
        echo '<br>Plugin TWO before.'
 ;   }
    public function aroundExecute(Index $subject, \Closure $proceed)
    {
        echo '<br>Plugin TWO around';/*se não retornar o proceed  de QUALQUER around, não executa o método original*/
        return $proceed();
    }
    public function afterExecute(Index $subject, $value)
    {
        echo $value;
        echo 'Plugin TWO after.';
        // return $value;
    }
}