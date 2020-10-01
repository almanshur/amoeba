<?php
$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';

//configuration path for website
define('PATH', '');
define('SITE_URL', PATH . 'index.php');
define('POSITION_URL', PATH . '?page='. $page);


?>