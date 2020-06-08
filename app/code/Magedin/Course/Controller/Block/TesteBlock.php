<?php
namespace Magedin\Course\Controller\Block;

class TesteBlock extends \Magento\Framework\View\Element\Template
{
    //métodos públicos estarão disponíveis na variável $block 
    public function getText()
    {
        return "teste";
    }
    // dentro do arquivo phtml(view/frontend/templates)
}