<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset='utf-8'>
        <link rel='stylesheet' href='{{asset('general.css')}}'>
    </head>

    <body>
        <header>
            <span class='project_name'><p>Тестовое задание для АНВ</p></span>
        </header>

        <main>
            @yield('main_content')
        </main>

        <footer>
            <span class='author'><p>Сделал Павел Журавлёв</p></span>
        </footer>

    </body>

</html>
