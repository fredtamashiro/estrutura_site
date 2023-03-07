<?php
namespace Estrutura_site\Mvc\Controllers;

use Estrutura_site\Mvc\Helper\FlashMessageTrait;
use Estrutura_site\Mvc\Helper\HtmlRendererTrait;

class homeController implements Controller{

    use FlashMessageTrait;
    use HtmlRendererTrait;

    public function processar():void
    {
        $this->addSuccessMessage('Bem Vindo!');
        echo $this->renderTemplate('home\index',['titulo'=>'Home','content'=>'Hum....']);
    }
}