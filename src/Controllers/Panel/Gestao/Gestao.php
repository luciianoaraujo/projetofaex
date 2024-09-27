<?php

namespace Luciano\Gestao\Controllers\Panel\Gestao;

use Luciano\Gestao\Helpers\Template\Loader;

Class Gestao{
    public function __construct(){
        $this->template = new Loader();
    }

    public function execute()
    {
        echo 'gestao?';
    }

}