<?php
namespace Regivaldo\Videos\Controllers\Panel\Videos;

use Regivaldo\Videos\Helpers\Template\Loader;

class Create
{
    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {   
        echo "tela de criação";
    }

}