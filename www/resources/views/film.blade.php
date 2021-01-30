@extends('main')

@section('meta')
    <meta property="og:url"                content="https://kinoframe.ml/film/{{$film->id}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{$film->name}}" />
    <meta property="og:description"        content="{{strip_tags($film->text)}}" />
    <meta property="og:image"              content="{{$film->image}}" />
@endsection

@section('content')
    <main class="container col-10 mx-auto mt-3 d-flex justify-content-center align-items-center p-1 flex-wrap">
        <div class="box p-1 m-1 col-auto d-flex justify-content-center flex-wrap">
            <div class="col-lg-8 col-sm-12 d-flex justify-content-start border p-0 rounded shadow flex-wrap flex-sm-nowrap">
                <div class="p-3 border-right flex-column justify-content-center col-md-auto">
                    <div class="image d-flex justify-content-center">
                        <img class="rounded" width="210" height="300" src="{{$film->image}}" alt="image">
                    </div>
                    <div class="name mt-3 d-flex justify-content-center">
                        <p class="text-center m-0 mt-1 font-weight-bold" style="line-height: 1.2;">{{$film->name}}</p>
                    </div>
                </div>
                <div class="text-body align-items-center d-flex py-2">
                    <p class="mx-4">{{strip_tags($film->info)}}</p>
                </div>
            </div>
            <div class="py-4 col-lg-8 col-sm-12 d-flex justify-content-center border rounded mt-3 shadow">
                <small class="font-italic mx-3">{{strip_tags($film->text)}}</small>
            </div>
            <div class="p-3 col-lg-8 col-sm-12 d-flex justify-content-center align-items-center border rounded my-3 shadow">
                <div id="yohoho" data-title="{{$film->name}}" class="mw-100 col-12 rounded"></div>
                <script src="//yohoho.cc/yo.js"></script>
            </div>
        </div>
    </main>
@endsection



