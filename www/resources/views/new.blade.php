@extends('main')

@section('meta')
    <meta property="og:url"                content="https://kinoframe.ml/new" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="New flms" />
    <meta property="og:description"        content="Новые HD фильмы" />
    <meta property="og:image"              content="https://scontent.fevn1-4.fna.fbcdn.net/v/t1.0-9/s960x960/143009694_246654216834563_505903058985512783_o.jpg?_nc_cat=109&ccb=2&_nc_sid=e3f864&_nc_ohc=yzhKJkmGLSAAX_t6LCa&_nc_ht=scontent.fevn1-4.fna&tp=7&oh=8a32f67a5297aa46dfc190e93b05d86e&oe=603686FF" />
@endsection

@section('active3')
    active font-weight-bold
@endsection

@section('content')
    <main class="container mx-auto mt-3 d-flex justify-content-center align-items-center p-1 flex-wrap">

        @foreach($films as $film)
            <a href="/film/{{$film->id}}" class="text-decoration-none">
                <div class="border pt-3 p-1 m-1 rounded shadow col-auto">
                    <img class="mw-100 rounded mx-3" width="210" height="300" src="{{$film->image}}" alt="{{$film->name}}">
                    <p style="width: 12rem;margin: 0 auto;overflow:hidden "
                       class="text-center text-nowrap my-2 text-dark pt-0 font-weight-bold">{{$film->name}}</p>
                </div>
            </a>
        @endforeach

        <div class="mt-5 col-12 d-flex justify-content-center">{{ $films->links('pagination::bootstrap-4') }}</div>

    </main>
@endsection



