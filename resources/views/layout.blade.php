<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="/default.css" rel="stylesheet" />
<link href="/fonts.css" rel="stylesheet"  />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
@yield('head')
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Laravel Library</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="{{ Request::path() === '/welcome' ? 'current_page_item' : '' }}"><a href="/welcome" accesskey="1" title="">Homepage</a></li>
				<li class="{{ Request::path() === '/books' ? 'current_page_item' : '' }}"><a href="/books" accesskey="2" title="">Books</a></li>
				<li class="{{ Request::path() === '/patrons' ? 'current_page_item' : ''}}"><a href="/patrons" accesskey="3" title="">Patrons</a></li>
				<li class="{{ Request::path() === '/authors' ? 'current_page_item' : ''}}"><a href="/authors" accesskey="4" title="">Authors</a></li>
				<li><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
	
    @yield ('header')
</div>

@yield ('content')
</body>
</html>
