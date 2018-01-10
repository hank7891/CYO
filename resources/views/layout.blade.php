<html>
    <head>
        @include('partials/header')
        @include('partials/nav')
    </head>
    <body>
        <div class="container-fluid text-center">
            <div class="row content" id="container">

                <!-- LEFT -->
                <div class="col-sm-2 sidenav">
                    @include('partials/left')
                </div>

                <!-- COUNT -->
                <div class="col-sm-8 text-left">
                    @yield('content')
                </div>

                <!-- RIGHT -->
                <div class="col-sm-2 sidenav">
                    @include('partials/right')
                </div>

            </div>
        </div>
    </body>
    <footer class="container-fluid text-center">
        @include('partials/footer')
    </footer>
</html>
