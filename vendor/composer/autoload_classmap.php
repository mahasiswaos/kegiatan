<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Controllers\\AdminController' => $baseDir . '/app/controllers/AdminController.php',
    'App\\Controllers\\BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'App\\Controllers\\HomeController' => $baseDir . '/app/controllers/HomeController.php',
    'App\\Controllers\\KegiatanController' => $baseDir . '/app/controllers/KegiatanController.php',
    'App\\Controllers\\LoginController' => $baseDir . '/app/controllers/LoginController.php',
    'App\\Controllers\\ProfileController' => $baseDir . '/app/controllers/ProfileController.php',
    'App\\Controllers\\TestController' => $baseDir . '/app/controllers/TestController.php',
    'App\\Controllers\\UserController' => $baseDir . '/app/controllers/UserController.php',
    'App\\Models\\Kegiatan' => $baseDir . '/app/models/Kegiatan.php',
    'App\\Models\\Profile' => $baseDir . '/app/models/Profile.php',
    'App\\Models\\Users' => $baseDir . '/app/models/Users.php',
    'CreateUsersTable' => $baseDir . '/app/database/migrations/2014_06_03_104816_create_users_table.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'Printpre' => $baseDir . '/app/helpers/Printpre.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'Whoops\\Module' => $vendorDir . '/filp/whoops/src/deprecated/Zend/Module.php',
    'Whoops\\Provider\\Zend\\ExceptionStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
    'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
);