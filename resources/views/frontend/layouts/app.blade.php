<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to Health Back</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="assets/images/favicon.png">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

    <div id="wrapper" class="wrapper">
        @include('frontend.include.header')
       
        @yield('main')

        @include('frontend.include.footer')

        <script type="text/javascript" data-pagespeed-no-defer>
            pagespeed.lazyLoadImages.overrideAttributeFunctions();
        </script>
        <script src="assets/js/modernizr-3.6.0.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
</body>

</html>
