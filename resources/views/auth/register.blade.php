@extends('layouts.master')

@section('content')

<div class="reg-area">
        <div class="container">
          <div class="col-md-6">
              <form method="POST" action="{{ route('register') }}">
              @csrf
                  <div class="new-customers">
                      <h3>NEW CUSTOMERS</h3>
                      <div class="row">
                          <div class="col-sm-12">
                                <input id="name" type="text" class="custom-form @error('name') is-invalid @enderror" name="name" placeholder="Your full name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          
                      </div>
                      <div class="row">
                          <div class="col-sm-6">
                              <select class="custom-select custom-form" name="city">
                                  <option>City</option>
                                  <option>Casablanca</option>
                                  <option>Fes</option>
                                  <option>Marrakech</option>
                                  <option>Rabat</option>
                                 
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
                                <input type="text" class="custom-form" name="address" placeholder="Address" />
                            </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-12">
                              <input type="text" class="custom-form" placeholder="Phone Number" name="phone" />
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-12">
                              <input id="email" type="email" class="custom-form @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-12">
                              <input id="password" type="password" class="custom-form @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-12">
                              <input id="password-confirm" type="password" class="custom-form" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                          </div>
                      </div>
                      
                      <div class="row">
                          <div class="col-sm-6">
                              <!-- <input type="submit" class="custom-form custom-submit no-margin" value="register" /> -->
                              <button class="btn btnContact" type="submit">register</button>
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
