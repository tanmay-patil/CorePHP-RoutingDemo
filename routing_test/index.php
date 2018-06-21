<?php

    // Created by : Tanmay Patil

    // Defining the base path as a constant here
    define('BASE_PATH', '/routing_test');

    // Included the routing file which contains the logic of handling URIs and parameters
    require_once 'inc/functions/routing.php';

?>
<html>
    <head>
        <title>Routing Test</title>
    </head>
    <body>
        <div>

            <?php

                $pageName = getPageName(0);
                $subpageName = getPageName(1);

                if (file_exists($file = 'inc/content/' . $pageName . '.php'))
                {
                    include $file;
                }
                else
                {
                    echo 'not found';
                }

            ?>

        </div>
    </body>
</html>