<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}" />
    {{-- <link rel="stylesheet" href="css/mdb.min.css" /> --}}
    {{-- <link rel="stylesheet" href="css/style.css" /> --}}

</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

    <style>
        .carousel-img{
            height: 300px !important;
        }
        .carousel-caption{
            background-color: #4c4c4ce8;
        }
        .detail-img{
            height: 300px;
        }
    </style>

    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-git.min')}}"></script>
    {{-- <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script> --}}
</body>
</html>