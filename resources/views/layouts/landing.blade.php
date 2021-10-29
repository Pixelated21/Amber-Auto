<!doctype html>
<html lang="en">
<head>

    {{--    Styles--}}
    <link rel="stylesheet" href="{{mix("css/app.css")}}">

    {{--    CDN--}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    {{--    Fonts--}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lora:ital,wght@1,700&family=Playfair+Display:wght@700&display=swap');
    </style>
    {{--    Scrollbar--}}

    <style>

        html {
            overflow: scroll;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            background-clip: padding-box;
            width: 3px;
            background: #121212;
        }

        ::-webkit-scrollbar-thumb {

            background: #ffffff;


        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
</head>
<body style="background: #121212">

<x-Header.landing_header/>


@yield('content')


<x-alert :type="session('alert-type')" :message="session('alert-message')"/>

</body>
</html>
