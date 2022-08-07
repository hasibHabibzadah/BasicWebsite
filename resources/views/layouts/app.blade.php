<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include("inc.navbar")
    <div class="container">
        @if (Request::is("/"))
        @include("inc.showcase")
        @endif
       
        <div class="row mt-5">
            <div class="col-md-8 col-lg-8">
               
                @yield("content")
            </div>
            <div class="col-md-4">
                @include("inc.sidebar")
            </div>
        </div>
    </div>
   
    <footer class="text-center bg-dark text-white p-2" id="footer">
        <p>copyright 2022 &copy; ACME</p>
    </footer>

   
</body>
</html>