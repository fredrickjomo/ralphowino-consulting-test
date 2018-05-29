@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><strong>Welcome : {{Auth::user()->name}}</strong></div>

                    <div class="card-body">
                        <img src="{{asset('/images/profile_pics/')}}/{{Auth::user()->photo}}" height="100" width="100"><br>
                        <hr>

                        <form action="{{route('profile.update',Auth::user()->id)}}" method="post" enctype="multipart/form-data ">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="put">

                            <input type="file" name="photo" class="form-control">

                            <br>

                            <input type="submit" class="btn btn-primary">

                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
