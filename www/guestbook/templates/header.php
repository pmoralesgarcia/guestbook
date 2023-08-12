<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="webmention" href="https://webmention.io/lifeofpablo.com/webmention" />
	<title>Pablo's Guestbook</title>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css"> -->

	<link rel="stylesheet" href="/media/themes/pablo.css">

	<link rel="stylesheet" href="css/style.css">
<script src="https://kit.fontawesome.com/2ad0b8bc3e.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="header" role="banner">
<div class="sitename">
<h1><a href="/"><i class="sitename-logo"></i>Pablo Morales</a></h1>
</div>
<div class="sitename-banner"></div>
<div class="navigation" role="navigation" aria-label="Main">
<ul>
<li><a class="active" aria-current="page" href="/">Home</a></li>
<li><a href="/blog/">Blog</a></li>
<li><a href="/photography/">Photography</a></li>
<li><a href="/projects/">Projects</a></li>
<li><a href="https://lifeofpablo.com/feed/page:feed.xml"><i class="fa-solid fa-rss"></i></a></li>
</ul>
</div>
<div class="navigation-banner"></div>
</div>
	<h1>Guestbook</h1>
<?php
if($_SERVER['REMOTE_USER'])
echo 'Hey , ' . $_SERVER['REMOTE_USER'] . ' ! <a href="https://auth.lifeofpablo.com/login?url=https://lifeofpablo.com/guestbook">Not you?</a>';
    else
    echo 'Please <a href="https://auth.lifeofpablo.com/login?url=https://lifeofpablo.com/guestbook">Sign in</a>';
			                            ?>

<?php 
function display_url($url) {
  # remove scheme and www.
  $url = preg_replace('/^https?:\/\/(www\.)?/', '', $url);
  # if the remaining string has no path components but has a trailing slash, remove the trailing slash
  $url = preg_replace('/^([^\/]+)\/$/', '$1', $url);
  return $url;
}
?>
