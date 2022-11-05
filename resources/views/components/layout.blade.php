<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="bower_components/aos/dist/aos.css" />

    {{--Fuentes--}}
    
    <title>PP2 UAM-I</title>
</head>
<body Style="background-color:#52515138;">
    <script src="bower_components/aos/dist/aos.js"></script> 
    <script>
        AOS.init();
    </script>
   
    <x-navbar></x-navbar>
    <div class="container-fluid m-0 p-0">
        {{ $slot }}
    </div>

    <x-principal-footer></x-principal-footer>
</body>
</html>