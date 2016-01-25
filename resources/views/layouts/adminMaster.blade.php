<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Affiliete::Admin</title>

  @yield('style')

  @include('partials.admin-styles')


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  {!! Html::script('js/html5shiv.js') !!}
  {!! Html::script('js/respond.min.js') !!}
  <![endif]-->
  

</head>

<body class="">

<section>
    @include('partials.left-side')
    @include('partials.header')
    

        <!-- page heading start-->
        <div class="page-heading">
            @yield('page-heading')
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">

            @yield('body-content')

        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2016 &copy; Apache Tech
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

@include('partials.admin-scripts')
@yield('script')

</body>
</html>
