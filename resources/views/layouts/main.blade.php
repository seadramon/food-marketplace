<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- START META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="format-detection" content="telephone=no">

    <meta name="description" content="Jangan simpan barang anda, pinjamkan dan dapatkan keuntungan. Tidak perlu beli, lebih murah pinjam saja.">
    <meta name="keyword" content="jasa, sewa, jual, rental, pinjam, elektronik, otomotif, mobil, motor, gadget">

    <meta name="author" content="Sewwa">
    <meta name="subject" content="Tempat Sewa Barang dan Jasa">
    <meta name="classification" content="Jangan simpan barang anda, pinjamkan dan dapatkan keuntungan. Tidak perlu beli, lebih murah pinjam saja.">

    <meta property="og:title" content="Sewwa - Tempat Sewa Barang dan Jasa" />
    <meta property="og:description" content="Jangan simpan barang anda, pinjamkan dan dapatkan keuntungan. Tidak perlu beli, lebih murah pinjam saja." />

    <meta property="og:image" content="{!! asset('assets/images/logo.png') !!}">

    <meta name="Copyright" content="Sewwa">
    <meta name="distribution" content="Global">
    <meta name="Robots" content="INDEX,FOLLOW">

    <!-- END META -->
    <title>@yield('title')</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    
    <!-- Font Awesome -->
    {!! Html::style('assets/css/font-awesome.min.css') !!}
    
    <!-- Custom CSS -->
    {!! Html::style('assets/css/owl.carousel.css') !!}
    {!! Html::style('assets/css/style.css') !!}
    {!! Html::style('assets/css/responsive.css') !!}

    {!! Html::style('assets/css/marketplace.css') !!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    @yield('top')
    
    @yield('logocart')
    
    @yield('menu')
    
    @yield('slider')
    
    @yield('content')

    @yield('footer')
   
    <!-- Latest jQuery form server -->
    {!! Html::script('assets/js/jquery.min.js') !!}
    
    <!-- Bootstrap JS form CDN -->
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    
    <!-- jQuery sticky menu -->
    {!! Html::script('assets/js/owl.carousel.min.js') !!}
    {!! Html::script('assets/js/jquery.sticky.js') !!}
    
    <!-- jQuery easing -->
    {!! Html::script('assets/js/jquery.easing.1.3.min.js') !!}
    
    <!-- Main Script -->
    {!! Html::script('assets/js/main.js') !!}
    
    <!-- Slider -->
    {!! Html::script('assets/js/bxslider.min.js') !!}
    {!! Html::script('assets/js/script.slider.js') !!}
  </body>
</html>