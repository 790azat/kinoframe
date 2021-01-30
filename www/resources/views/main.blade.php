<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/app.css">
    <title>Kinoframe</title>
    <meta name="title" content="Kinoframe.ml">
    <meta name="description"
          content="Каждый день мы обновляем наш ресурс, чтобы просмотр кинофильмов становился все более комфортным для посетителей.">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript"> (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        ym(71551804, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            trackHash: true
        }); </script> <!-- /Yandex.Metrika counter -->

    @yield('meta')

</head>
<body class="d-flex flex-column">
<header class="bg-dark">
    <div class="container bg-dark d-flex py-2 flex-wrap">
        <div class="col-1 d-flex align-items-center">
            <a href="/" class="d-flex justify-content-end col-auto">
                <img src="{{asset('movie.png')}}" alt="Movie" class="mw-100">
            </a>
        </div>
        <div class="d-flex align-items-center navbar-brand">
            <a href="/" class="text-decoration-none">
                <p class="text-light m-0">Kinoframe
                    <svg class="ml-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-badge-hd-fill" viewBox="0 0 16 16">
                        <path
                            d="M10.53 5.968h-.843v4.06h.843c1.117 0 1.622-.667 1.622-2.02 0-1.354-.51-2.04-1.622-2.04z"/>
                        <path
                            d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm5.396 3.001V11H6.209V8.43H3.687V11H2.5V5.001h1.187v2.44h2.522V5h1.187zM8.5 11V5.001h2.188c1.824 0 2.685 1.09 2.685 2.984C13.373 9.893 12.5 11 10.69 11H8.5z"/>
                    </svg>
                </p>
            </a>
        </div>
        <menu class="d-flex justify-content-center align-items-center m-0 p-0">
            <nav class="navbar m-0 p-0">
                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item">
                        <a href="/" class="text-light text-decoration-none @yield('active1')">
                            Home
                        </a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="/categories" class="text-light text-decoration-none @yield('active2')">
                            Categories
                        </a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="/new" class="text-light text-decoration-none @yield('active3')">
                            New
                        </a>
                    </li>
                </ul>
            </nav>
        </menu>
        <div class="d-flex ml-auto">
            <form class="d-flex mr-5" action="/search" method="get">
                <input name="search" id="search" class="form-control h-75 my-auto" type="search" placeholder="Search"
                       aria-label="Search" autocomplete="off">
                <div id="name_list" class="position-absolute mt-5 col-auto p-0" style="z-index: 10">

                </div>
                <button class="btn btn-success h-75 my-auto pb-3 ml-2" type="submit">Search</button>
            </form>

            @csrf

            <script>
                $(document).ready(function () {

                    $('#search').keyup(function () {
                        var query = $(this).val();
                        if (query != '') {
                            var _token = $('input[name="_token"]').val();
                            $.ajax({
                                url: "{{ route('autocomplete.fetch') }}",
                                method: "POST",
                                data: {query: query, _token: _token},
                                success: function (data) {
                                    $('#name_list').fadeIn();
                                    $('#name_list').html(data);
                                }
                            });
                        }
                    });

                    $(document).on('click', 'li', function () {
                        $('#search').val($(this).text());
                        $('#name_list').fadeOut();
                    });

                });
            </script>

            @auth()
                <a href="/home" class="d-flex align-items-center mr-5 btn btn-outline-secondary">
                    <div class="m-0 p-0 text-decoration-none d-flex">
                        <img src="{{asset('user.png')}}" alt="user" width="30" height="30">
                        <p class="text-light text-decoration-none my-auto mx-3">{{Auth::user()->name}}</p>
                    </div>
                </a>
            @elseguest()
                <div class="d-flex align-items-center">
                    <a href="/login" class="text-light text-decoration-none">Login</a>
                </div>
                <div class="ml-3 d-flex align-items-center mr-5">
                    <a href="/register" class="text-light text-decoration-none">Register</a>
                </div>
            @endauth

        </div>

    </div>
</header>

@yield('content')

<footer class="bg-dark col-12 py-3 mt-5">
    <div class="container text-center">
        <a href="/" class="text-decoration-none text-light">
            Kinoframe ©
        </a>
    </div>
</footer>
</body>
</html>
