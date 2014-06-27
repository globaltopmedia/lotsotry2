<?php
	use google\appengine\api\users\User;
	use google\appengine\api\users\UserService;

    # Looks for current Google account session
    $user = UserService::getCurrentUser();
    if ($user) {
    	echo 'Hello, ' . htmlspecialchars($user->getNickname());
    }
    else {
    	header('Location: ' . UserService::createLoginURL($_SERVER['REQUEST_URI']));
    }

?>
<html>
    <head>
    <link type="text/css" rel="stylesheet" href="/stylesheets/main.css" />
    </head>
    <body>
    <h1>hi</h1>
    </body>
    
    </html>