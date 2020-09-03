<!DOCTYPE html>
<html lang="vi">
    @include('themes.blocks.header')
	<body id="body_home">
		<div id="wrap">
			@include('themes.blocks.navbar')
			@yield('themes-content')
		</div>
        @include('themes.blocks.footer')
	</body>
</html>
