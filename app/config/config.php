

<?php
session_start();
  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'register');
  define('admin_name', 'san@gmail.com');
  define('admin_password', '123');

  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://localhost/mvc/');
  // Site Name
  define('SITENAME', 'Employee details');