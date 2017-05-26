<?php

// define constants containing folder paths
define('SYSTEM_DIR', __DIR__ . '/..'); // the root of the application
define('APP_DIR',    SYSTEM_DIR . '/app'); // the code for our application
define('PUBLIC_DIR', SYSTEM_DIR . '/public'); // the publicly accessible folder
define('RESOURCES_DIR', SYSTEM_DIR . '/resources'); // contains resources (mainly views)
define('ROUTES_DIR', SYSTEM_DIR . '/routes'); // contains lists of routes
define('VENDOR_DIR', SYSTEM_DIR . '/vendor'); // the folder for vendor modules

// require all necessary libraries
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/app.php'; // the app class
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/request.php'; // the request class
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/response.php'; // the response class
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/view.php'; // the view class