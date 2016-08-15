<?php 
require_once('template.php');
$template = new templates('algo');
$template->setParams(array{
	'name'   => 'hola';
});

$template->show();


 ?>

 Options FollowSymLinks

RewriteEngine On
RewruteBase /

RewriteCond all requests to web
RewriteRule ^blog?$ web.php
RewriteRule ^blog/c/([0-9]+) web.php?id=$1
RewriteRule ^blog/post/([0-9]+) blog-post.php?id=$1