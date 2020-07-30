<?php

require "vendor/autoload.php";

require "core/bootstrap.php";

use App\core\{Router,Request};


require Router::load("app/routes/routes.php")
        ->direct(Request::uri(),Request::method());

