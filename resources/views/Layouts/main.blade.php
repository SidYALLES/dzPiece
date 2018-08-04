<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/bootstrap.css" crossorigin="anonymous">
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>main</title>
</head>
    <body>
       @include('inc.navBar')
            <div>
                @include('inc.msg')
                @yield('contenu')
            </div>
    </body>
    <footer class="page-footer font-small blue">
         <div class="footer-copyright text-center py-3">© 2018 Copyright:
             <a href="/"> YSLF.com</a>
         </div>
    </footer>
</html>