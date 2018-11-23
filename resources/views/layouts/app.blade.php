{{-- Dit is een layout pagina, waar je naar toe moet verwijzen met je andere pagina's --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- Als je via xampp werkt  moet je href /folder/public ervoor zetten anders werkt css en bootstrap niet --}}
    <link rel="stylesheet" href="/piet/public/css/app.css">
    <link rel="stylesheet"  href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lijstjes</title>
</head>
<body>
    @include('inc.navbar')
    
    <div class="container" style="margin-top: 10px;" >
{{-- Deze if statement zorgt ervoor dat de showcase alleen op de home pagina te zien is --}}
            @if(Request::is('/'))
            @include('inc.showcase')
            @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">
             {{-- met Yield haal je content van een andere pagina --}}
             
             @include('lijst')
             @yield('content')
            </div>    
            <div class="col-md-4 col-lg-4">
                    @if(Request::is('/', 'about'))   
             @include('inc.sidebar')
             @endif
            </div>
        </div>
    </div>
   
    <footer id="footer" class="text-center">
            <p>Copyright 2018 &copy; Marten</p>
        </footer>

 <!-- Scripts zorgt voor dat de logout functie werkt-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    </body>
</html>