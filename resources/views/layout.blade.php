<!doctype html>
<html @language_attributes>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	@wp_head
    @yield('head')
    @vite('css/main.css')
</head>
<body @body_class() itemscope="itemscope" itemtype="https://schema.org/WebPage">

@yield('content')

@yield('foot')
@wp_footer
@vite('js/main.js')
</body>
</html>