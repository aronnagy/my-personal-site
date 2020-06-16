<?php

require 'core/db/Connection.php';
require 'core/Router.php';

$router = new Router(require 'routes.php');