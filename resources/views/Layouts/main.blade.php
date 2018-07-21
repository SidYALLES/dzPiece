<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>main</title>
</head>
    <body>
       @include('inc.navBar')
        <div class="container" style="padding : 2rem;">
          @if(Request::is('/'))
           @include('inc.showcase')
           @endif
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    @include('inc.msg')
                    @yield('contenu')
                </div>
                <div class="col-md-4 col-lg-4">
                    @if(!Request::is('login'))
                    @include('inc.sidebare')
                    @endif
                </div>
            </div>
        </div>
    </body>
    <footer id="footer">
        <h3 style="text-align:center;" id="t">all rights reserved</h3>
    </footer>
</html>