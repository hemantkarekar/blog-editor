<?php

require_once("router.php");

get('/', 'pages/index.php');
get('/az-admin', 'admin/index.php');
get('/az-admin/editor', 'admin/editor.php');
post('/az-admin/editor', 'admin/editor.php');

any('/404','templates/404.php');