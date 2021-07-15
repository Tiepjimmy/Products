<!DOCTYPE html>
<html lang="en">
	<head>
		@include('partials.admin.styles')
		@stack('styles')
	</head>
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<div class="d-flex flex-column flex-root">
				<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				@section('sidebar')
					 @include('partials.admin.sidebar')
				@show
				<!--begin::Aside-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

					@include('partials.admin.header')
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

						@yield('content')
					</div>

					@include('partials.admin.footer')

				</div>

				@include('partials.admin.scripts')
				@stack('scripts')
			</div>
		</div>
		</body>
</html>