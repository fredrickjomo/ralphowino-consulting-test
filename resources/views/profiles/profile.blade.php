@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header"><strong>welcome : {{Auth::user()->name}}</strong></div>

                    <div class="card-body">
                        <img src="{{Storage::url($user->avatar)}}" width="100px" height="100px" style="border-radius: 50%">





                    </div>
                    @if(Auth::id()!==$user->id)
                    <div class="card-header">
                        <div class="body">
                            <friend :profile_user_id="{{$user->id}}"></friend>

                        </div>
                    </div>
                    @endif
                    <div class="card-header">
                        <strong>More about me</strong>
                    </div>
                    <div class="card-body">
                        <p>About me:&nbsp;{{$user->profile->about}}</p>
                        <p>Country:&nbsp;{{$user->profile->country}}</p>
                        <p>City:&nbsp;{{$user->profile->city}}</p>
                    </div>
                    <p class="text-center">
                        @if(Auth::id()==$user->id)
                            <a href="{{route('profile.edit')}}"><button class="btn btn-lg btn-primary">Edit Profile</button></a>

                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
