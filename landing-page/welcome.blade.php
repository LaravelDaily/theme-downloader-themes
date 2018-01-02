<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/landing-page/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/landing-page/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/landing-page/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('vendor/landing-page/css/landing-page.min.css') }}" rel="stylesheet">

  </head>

  <body>

	@include('landing-page.partials.navigation')

	@include('landing-page.partials.masthead')

	@include('landing-page.partials.icons-grid')

	@include('landing-page.partials.image-showcases')

	@include('landing-page.partials.testimonials')

	@include('landing-page.partials.call-to-action')

	@include('landing-page.partials.footer')

	@include('landing-page.partials.scripts')
  </body>

</html>