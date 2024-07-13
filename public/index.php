<?php

use App\Kernel;

require_once dirname(__DIR__) . "/vendor/autoload_runtime.php";

return function (array $context) {
    header(sprintf(
        "Access-Control-Allow-Origin: %s",
        $context["APP_CLIENT_APP_URL"]
    ));

    return new Kernel($context["APP_ENV"], (bool)$context["APP_DEBUG"]);
};
