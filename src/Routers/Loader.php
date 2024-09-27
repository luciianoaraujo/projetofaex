<?php

namespace Luciano\Gestao\Routers;

use CoffeeCode\Router\Router;
use Luciano\Gestao\Routers\User\UserRouters;
use Luciano\Gestao\Routers\Panel\Gestao\GestaoRouters;

class Loader
{
    private Router $router;

    private UserRouters $userRouter;

    private GestaoRouters $gestaoRouter;

    public function __construct() {
        $this->router = new Router("http://localhost");
        $this->userRouter = new UserRouters($this->router);
        $this->gestaoRouter = new GestaoRouters($this->router);
    }

    public function execute() 
    {
        $this->userRouter->execute();
        $this->gestaoRouter->execute();
        $this->router->dispatch();
        
        if ($this->router->error()) {
            echo "404";
        }
    }
}