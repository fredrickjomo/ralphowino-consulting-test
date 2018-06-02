@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center"><strong>Edit your profile</strong></div>

                    <div class="card-body">
                       <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                           {{csrf_field()}}

                           <div class="form-group row">
                               <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                               <div class="col-md-6">
                                   <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}"  autofocus>

                                   @if ($errors->has('country'))
                                       <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                   @endif
                               </div>
                           </div>

                           <div class="form-group row">
                               <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                               <div class="col-md-6">
                                   <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}"  autofocus>

                                   @if ($errors->has('city'))
                                       <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                   @endif
                               </div>
                           </div>

                           <div class="form-group row">
                               <label for="about" class="col-md-4 col-form-label text-md-right">{{ __('About Me') }}</label>

                               <div class="col-md-6">
                                   <textarea id="about" type="text" class="form-control{{ $errors->has('about') ? ' is-invalid' : '' }}" name="about" value="{{ old('country') }}"  autofocus>
                                   </textarea>

                                   @if ($errors->has('about'))
                                       <span class="invalid-feedback">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                   @endif
                               </div>
                           </div>

                           <div class="form-group row">
                               <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>

                               <div class="col-md-6">
                                   <input id="avatar" type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" value="{{ old('avatar') }}"  accept="image/*">


                                   @if ($errors->has('avatar'))
                                       <span class="invalid-feedback">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                   @endif
                               </div>
                           </div>

                           <div class="form-group">
                               <p class="text-center">
                                   <input class="btn btn-lg btn-primary" type="submit" value="Save Information"></input>
                               </p>
                           </div>

                       </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
