<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Forteoil</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">

    @include('layouts.sidebar')

    <div class="main-panel">

        @include('layouts.nav')

        @yield('content')


        @include('layouts.footer')

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="/js/chartist.min.js"></script>


<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="/js/paper-dashboard.js"></script>

</html>
