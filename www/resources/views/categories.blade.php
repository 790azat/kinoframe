@extends('main')

@section('meta')
    <meta property="og:url"                content="https://kinoframe.ml/categories" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Categories" />
    <meta property="og:description"        content="Все категории HD фильмов" />
    <meta property="og:image"              content="https://scontent.fevn1-4.fna.fbcdn.net/v/t1.0-9/s960x960/143009694_246654216834563_505903058985512783_o.jpg?_nc_cat=109&ccb=2&_nc_sid=e3f864&_nc_ohc=yzhKJkmGLSAAX_t6LCa&_nc_ht=scontent.fevn1-4.fna&tp=7&oh=8a32f67a5297aa46dfc190e93b05d86e&oe=603686FF" />
@endsection

@section('active2')
    active font-weight-bold
@endsection

@section('content')
    <main class="container mx-auto mt-3 d-flex justify-content-start align-items-center p-1 flex-wrap">
        <a href="/categories/aниме" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Аниме</a>
        <a href="/categories/биография" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Биографии</a>
        <a href="/categories/боевик" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Боевики</a>
        <a href="/categories/вестерн" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Вестерны</a>
        <a href="/categories/военный" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Военные</a>
        <a href="/categories/детектив" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Детективы</a>
        <a href="/categories/документальный" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Документальные</a>
        <a href="/categories/драма" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Драмы</a>
        <a href="/categories/исторический" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Исторические</a>
        <a href="/categories/комедия" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Комедии</a>
        <a href="/categories/криминал" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 ">Криминал</a>
        <a href="/categories/мелодрама" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Мелодрамы</a>
        <a href="/categories/мультфильм" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Мультфильмы</a>
        <a href="/categories/мюзикл" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Мюзиклы</a>
        <a href="/categories/приключение" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Приключения</a>
        <a href="/categories/семейный" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Семейные</a>
        <a href="/categories/триллер" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Триллеры</a>
        <a href="/categories/ужас" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Ужасы</a>
        <a href="/categories/фантастика" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Фантастика</a>
        <a href="/categories/фэнтези" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Фэнтези</a>
        <a href="/categories/детский" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Детские</a>
        <a href="/categories/американский" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Американские</a>
        <a href="/categories/английский" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Английские</a>
        <a href="/categories/русский" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Русские</a>
        <a href="/categories/индийский" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Индийские</a>
        <a href="/categories/немецкий" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Немецкие</a>
        <a href="/categories/французский" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Французские</a>
        <a href="/categories/сериал" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Сериалы</a>
        <a href="/categories/зарубежный" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Зарубежные</a>
        <a href="/categories/турецкий" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Турецкие</a>
        <a href="/categories/сериал" class="flex-grow-1 text-center bg-success text-light font-weight-bold py-2 px-3 border">Сериалы</a>

        <div class="col-12 mt-3 d-flex flex-wrap justify-content-center">

            @if(isset($category) and isset($films))
                <p class="col-12 text-center">
                    Результаты по категориям: <span class="font-weight-bold font-italic">{{$category}}</span> дали: {{count($films)}} результатов
                </p>
            @endif

            @if(isset($films))

                @foreach($films as $film)
                    <a href="/film/{{$film->id}}" class="text-decoration-none">
                        <div class="border pt-3 p-1 m-1 rounded shadow col-auto">
                            <img class="mw-100 rounded mx-3" width="210" height="300" src="{{$film->image}}" alt="{{$film->name}}">
                            <p style="width: 12rem;margin: 0 auto;overflow:hidden " class="text-center text-nowrap my-2 text-dark pt-0 font-weight-bold">{{$film->name}}</p>
                        </div>
                    </a>
                @endforeach

                <div class="mt-5 col-12 d-flex justify-content-center">{{ $films->links('pagination::bootstrap-4') }}</div>

                @endif

        </div>


    </main>
@endsection


