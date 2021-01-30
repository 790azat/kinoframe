@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-light">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(Auth::user())
                            <div class="col-auto d-flex justify-content-start">

                                <img class="mr-5 p-2 bg-secondary rounded-circle" src="{{asset('user.png')}}" alt="user"
                                     width="80" height="80">

                                <table class="table col-5 table-borderless">
                                    <tbody>
                                    <tr class="d-flex align-items-center font-weight-bold">
                                        <th scope="row" class="badge-secondary badge col-4 mr-2"><h6
                                                class="m-0 font-weight-bold">Name</h6></th>
                                        <td>{{Auth::user()->name}}</td>
                                    </tr>
                                    <tr class="d-flex align-items-center font-weight-bold">
                                        <th scope="row" class="badge-secondary badge col-4 mr-2"><h6
                                                class="m-0 font-weight-bold">Email</h6></th>
                                        <td>{{Auth::user()->email}}</td>
                                    </tr>
                                    <tr class="d-flex align-items-center font-weight-bold">
                                        <th scope="row" class="badge-secondary badge col-4 mr-2"><h6
                                                class="m-0 font-weight-bold">Verified</h6></th>
                                        <td>@if(Auth::user()->email_verified_at == null)
                                                <div class="btn btn-danger rounded-circle"></div> @endif</td>
                                    </tr>
                                    <tr class="d-flex align-items-center font-weight-bold">
                                        <th scope="row" class="badge-secondary badge col-4 mr-2"><h6
                                                class="m-0 font-weight-bold">Created</h6></th>
                                        <td>{{explode(' ', Auth::user()->created_at)[0]}}</td>
                                    </tr>
                                    @if(Auth::user()->id == 1)
                                        <tr class="d-flex align-items-center font-weight-bold">
                                            <th scope="row" class="badge-secondary badge col-4 mr-2"><h6
                                                    class="m-0 font-weight-bold">Films</h6></th>
                                            <td>{{count($films)}}</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
