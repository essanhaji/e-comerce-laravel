@extends('layouts.master')

@section('content')

<div class="page-content">
    <!-- Start breadcume area -->
    <div class="breadcume-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="index.html" class="home"><i class="fa fa-home"></i></a>
                        <span class="navigation-pipe">&gt;</span>
                        Update account
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<div class="reg-area">
    <div >
          <form method="POST" action="{{ route('user.updateAccount',auth()->user()->id) }}">
          @csrf
          @method('PATCH')

              <div class="new-customers">
                  <h3>Update your account</h3>
                  <div class="row">
                      <div class="col-sm-12">
                            <input id="name" type="text" value="{{auth()->user()->name}}" class="custom-form @error('name') is-invalid @enderror" name="name" placeholder="Your full name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                      </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                        <select class="custom-select custom-form" name="city">
                            <option >City</option>
                            <option {{ auth()->user()->city == 'Agadir' ? 'selected' : '' }}>Agadir</option>
                            <option {{ auth()->user()->city == 'Casablanca' ? 'selected' : '' }}>Casablanca</option>
                            <option {{ auth()->user()->city == 'Fes' ? 'selected' : '' }}>Fes</option>
                            <option {{ auth()->user()->city == 'Marrakech' ? 'selected' : '' }}>Marrakech</option>
                            <option {{ auth()->user()->city == 'Rabat' ? 'selected' : '' }}>Rabat</option>
                        </select>
                    </div>
                    <div class="col-sm-6" class="country">
                        <select class="custom-select custom-form" name="country">
                            <option>Morocco</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                      <div class="col-sm-12">
                          <input type="text" value="{{auth()->user()->address}}"  class="custom-form" name="address" placeholder="Address" />
                      </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <input type="text" value="{{auth()->user()->tele}}" class="custom-form" placeholder="Phone Number" name="phone" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <input id="email" type="email" value="{{auth()->user()->email}}" class="custom-form @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <input id="password" type="password" class="custom-form" name="password" placeholder="Password" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <input id="password-confirm" type="password" class="custom-form" name="password_confirmation" placeholder="Confirm Password" >
                    </div>
                </div>
                
            
                  <div class="row">
                      <div class="col-sm-6">
                          <!-- <input type="submit" class="custom-form custom-submit no-margin" value="register" /> -->
                          <button class="btn btnContact" type="submit">Update</button>
                      </div>
                      <div class="col-sm-6">
                         <!--  <input type="submit" class="custom-form custom-submit no-margin" value="clear" /> -->
                           <button class="btn btnContact" type="submit">clear</button>
                      </div>
                  </div>
              </div>
          </form>
    </div>
  </div>
</div>

@endsection