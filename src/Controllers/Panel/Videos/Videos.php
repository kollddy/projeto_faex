<?php
namespace Regivaldo\Videos\Controllers\Panel\Videos;

use Regivaldo\Videos\Helpers\Template\Loader;

class Videos
{
    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {   
        echo "Listagem de agendamentos";
    }

}