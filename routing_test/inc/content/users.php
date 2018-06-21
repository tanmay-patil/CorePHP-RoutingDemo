<?php

    // Created by : Tanmay Patil

    if ($subpageName === '')
    {
        echo '<h1>Welcome to Users Home Page.</h1>' . '<br />';
    }
    else
    {
        $userId = $subpageName;
        echo 'Displaying user #' . $userId . '.<br />';
    }

?>

<a href="<?php echo BASE_PATH . '/' . DEFAULT_PAGE_NAME; ?>">Go Home</a>