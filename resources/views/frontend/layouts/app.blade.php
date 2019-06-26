<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include("frontend.header/header")

        <main>
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <aside>
                        <div class="sidebar">
                            <h3>Navigation</h3>
                            <nav>
                                <ul>
                                    <li><a href="{{ route ('dashboard')}}">Dashboard</a></li>
                                    <li><a href=" {{ route ('newReceipt')}}">New Receipt</a></li>
                                    <li><a href="">Todays Collection</a></li>
                                    <li><a href="">Database</a></li>
                                    <li><a href="{{ route('setting') }}">Setting</a></li>
                                    <li><a href="">User</a></li>
                                </ul>
                            </nav>
                        </div>
                    </aside>
                </div>
                <div class="col-md-10">
                     @yield('content')
                </div>
            </div>     
            </div>      
        </main>

        @include("frontend.footer/footer")
    </div>



    <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
