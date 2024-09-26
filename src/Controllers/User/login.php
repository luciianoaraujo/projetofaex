<?php

namespace Luciano\Gestao\Controllers\User;

use Luciano\Gestao\Helpers\Template\Loader;

class Login
{
    private Loader $template;

    public function __construct()
    {
        $this->template = new Loader();
    }

    public function execute()
    {
        $this->template->render("user/login", false);
    }
}
