<html>
    <head>
        <title>@yield('title')</title>
        <style>
            .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;
            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
            }
        </style>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    </head>
    <body>
        @yield('body')
    </body>
</html>
