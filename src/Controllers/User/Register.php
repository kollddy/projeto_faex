<?php

namespace Regivaldo\Videos\Controllers\User;

use Regivaldo\VideosHelpers\Template\Loader;

class Register
{
    private Loader $template;

    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {
        $this->template->render('user/register', false);
    }
}