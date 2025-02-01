<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">

    <!-- Page Title -->
    <title>Thavindu Liyanage</title>

    <!-- Meta Tags -->
    <meta name="description" content="Show yourself brightly with Braxton - unique and creative portfolio and resume template!">
    <meta name="keywords" content="mix_design, resume, portfolio, personal page, cv, template, one page, responsive, html5, css3, creative, clean">
    <meta name="author" content="mix_design">

    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- Facebook Metadata Start -->
    <meta property="og:image:height" content="1200">
    <meta property="og:image:width" content="1200">
    <meta property="og:title" content="Braxton - Personal Portfolio & Resume HTML Template">
    <meta property="og:description" content="Show yourself brightly with Braxton - unique and creative portfolio and resume template!">
    <meta property="og:url" content="https://mixdesign.club/themeforest/braxton">
    <meta property="og:image" content="https://mixdesign.club/themeforest/braxton/img/favicon/og-image.jpg">
    <!-- Facebook Metadata End -->


    <!-- Custom Browser Color Start -->
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#dcdce7">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#111111">
    <meta name="msapplication-navbutton-color" content="#111111">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- Custom Browser Color End -->

    @include('libraries.style')
  </head>

  <body>

    @include('components.preloader')
    @include('components.navbar')
    @include('components.sidebar')


    @yield('content')

    @include('components.root')

    @include('libraries.script')
  </body>



</html>
