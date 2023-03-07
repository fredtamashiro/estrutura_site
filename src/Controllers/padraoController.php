<?php
namespace Estrutura_site\Mvc\Controllers;

use Estrutura_site\Mvc\Helper\HtmlRendererTrait;

class padraoController implements Controller{

    use HtmlRendererTrait;

    public function processar():void
    {
        echo $this->renderTemplate('padrao/index',['titulo'=>'Features','content'=>'=P']);
    }
}
