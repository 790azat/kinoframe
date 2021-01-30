@extends('main')

@section('content')
    <main class="container mx-auto mt-3 d-flex justify-content-center align-items-center p-1 flex-wrap">

        <p class="col-12 text-center">Результаты по пийску: <span class="font-weight-bold font-italic">{{$search}}</span> дали: {{count($films)}} результатов</p>

        @foreach($films as $film)
            <a href="/film/{{$film->id}}" class="text-decoration-none">
                <div class="border pt-3 p-1 m-1 rounded shadow col-auto">
                    <img class="mw-100 rounded mx-3" src="{{$film->image}}" alt="{{$film->name}}">
                    <p style="width: 12rem;margin: 0 auto;overflow:hidden " class="text-center text-nowrap my-2 text-dark pt-0 font-weight-bold">{{$film->name}}</p>
                </div>
            </a>
        @endforeach

    </main>
@endsection



