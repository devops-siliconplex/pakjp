
	@include('layouts.head')
	<body class="home page-template-default page page-id-7 group-blog
		global-layout-right-sidebar">

		<div id="page" class="site">
			@include('layouts.header')
			<div id="content" class="site-content">
				@yield('main-content')
			</div><!-- #content -->
			@include('layouts.footer')
		</div><!-- #page -->

		<a href="https://www.pakjp.pk/#page" class="scrollup" id="btn-scrollup"><i
				class="fa fa-angle-up"></i></a>
	</body>
</html>