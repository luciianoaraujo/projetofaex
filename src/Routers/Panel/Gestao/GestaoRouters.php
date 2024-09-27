<?php

namespace Luciano\Gestao\Routers\Panel\Gestao;


use CoffeeCode\Router\Router;

class GestaoRouters
{
    private Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function execute()
    {
        $this->router->namespace('Luciano\Gestao\Controllers\Panel\Gestao');
        $this->router->get("/panel/gestao", 'Gestao:execute');
        $this->router->get("/panel/gestao/create", 'Create:execute');


    }

}
