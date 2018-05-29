@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><strong>Welcome : {{Auth::user()->name}}</strong></div>

                    <div class="card-body">
                       <img src="{{asset('/images/profile_pics/')}}/{{Auth::user()->photo}}" height="100" width="100"><br><br>
                        <a href="{{url('/')}}/changePhoto"><button class="btn btn-primary">Change Pic</button></a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
