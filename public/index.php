<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    echo "<div style='text-align:center;'>";
    echo "<h3>Welcome to my web</h3>";
    echo "<img src='images/under-construction.gif'/>";    
    echo phpinfo();
    echo "</div>";
    //return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
