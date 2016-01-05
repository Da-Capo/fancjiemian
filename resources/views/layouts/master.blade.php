<!DOCTYPE HTML>
<html lang=zh-CN>
	<head>
		<meta charset=UTF-8>
		<meta name=viewport content="width=device-width,initial-scale=1,user-scalable=no">
		<meta name=apple-mobile-web-app-capable content=yes>
		<meta name=apple-mobile-web-app-status-bar-style content=black>
		<meta name=format-detection content="telephone=no">
		<meta name=keywords content=rcss>
		<meta name=description content=大腔调>
			<!--<meta http-equiv="refresh" content="10" />-->
		<meta name=author content=1394018128@qq.com>
		<title>@yield('title') - 父爱农场</title>
		<link rel=stylesheet type=text/css href=https://cdn.amazeui.org/amazeui/2.5.0/css/amazeui.min.css>
@yield('style')
	</head>
	<body>
@yield('content')
@yield('footer')
@include('components.erroralert')
		<script src=https://cdn.bootcss.com/jquery/2.1.4/jquery.min.js></script>
		<script src=https://cdn.amazeui.org/amazeui/2.5.0/js/amazeui.min.js type=text/javascript charset=utf-8></script>
@yield('script')
	</body>
</html>
