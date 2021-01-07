{{-- extend  --}}
@extends('layouts.app')
@extends('includes.header')
@extends('includes.footer')
{{-- page titles --}}
@section('title', 'Profile')
@section('page_berdcrum_title', 'Profilo')
@section('header')
@parent
@endsection
{{-- page content --}}
@section('content')
<?php 
App::setLocale('it');

?>
<div class="container mt-3">

    <div class="card p-3 text-center">
     <h3>{{ CH::checklogedinSubscription() }}</h3>

      <p>{{__('map.forgetprium')}} <a href="{{ route('payment') }}">Here</a></p>    
        </div>
    <div class="row">
        <div class="col-lg-12 p-lg-3">

            @if ($errors->any())
                
                
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-white bg-danger">
                    {{ $error }}
                </div>
                @endforeach
                
                
                @endif
            
            <table class="table table-striped table-bordered table-responsive-sm">
                <thead>
                    <tr>
                        {{--  <th scope="col"></th>
                        <th scope="col"></th> --}}
                        
                    </tr>
                </thead>
                <tbody>

                    <form action="{{ route('updateProfile') }}" method="post">
                        @csrf
                  {{--   ////////// --}}
                    <tr>
                        <td width="50%"><strong>Fullname</strong></td>
                        <td width="50%">
                            <input type="text" name="fullname" placeholder="Fullname" class="form-control" value="{{ $profile->name }}">
                        </td>
                    </tr>
                  {{--   //////////////// --}}
                   {{--   ////////// --}}
                    <tr>
                        <td width="50%"><strong>Username</strong></td>
                        <td width="50%">
                            <input type="text" name="username" placeholder="Username" class="form-control" value="{{ $profile->username }}">
                        </td>
                    </tr>
                  {{--   //////////////// --}}
                   {{--   ////////// --}}
                    <tr>
                        <td width="50%"><strong>Email</strong></td>
                         <td width="50%">
                            <input type="email" name="email" placeholder="Email" class="form-control"  value="{{ $profile->email }}">
                        </td>
                    </tr>
                  {{--   //////////////// --}}
                   {{--   ////////// --}}
                    <tr>
                        <td width="50%"><strong>Company Name</strong></td>
                         <td width="50%">
                            <input type="text" name="companyname" placeholder="Company Name" class="form-control" value="{{ $profile->company }}">
                        </td>
                    </tr>
                  {{--   //////////////// --}}
                   {{--   ////////// --}}
                    <tr>
                        <td width="50%"><strong>Conatct#</strong></td>
                       <td width="50%">
                            <input type="text" name="contact" placeholder="Contact" class="form-control" value="{{ $profile->contact }}" >
                        </td>
                    </tr>
                  {{--   //////////////// --}}
                   {{--   ////////// --}}
                    <tr>
                        <td width="50%"><strong>Contact#(optional)</strong></td>
                       <td width="50%">
                            <input type="text" name="contactopt" placeholder="Contact (optional)" class="form-control" value="{{ $profile->contactotp }}" >
                        </td>
                    </tr>
                  {{--   //////////////// --}}
                   {{--   ////////// --}}
                    <tr>
                        <td width="50%"><strong>City</strong></td>
                        <td width="50%">
                            <input type="text" name="city" placeholder="City" class="form-control" value="{{ $profile->city }}" >
                        </td>
                    </tr>
                  {{--   //////////////// --}}
                   {{--   ////////// --}}
                    <tr>
                        <td width="50%"><strong>Country</strong></td>
                       <td width="50%">
                            <input type="text" name="country" placeholder="Country" class="form-control" value="{{ $profile->country }}" >
                        </td>
                    </tr>
                  {{--   //////////////// --}}
                   {{--   ////////// --}}
                    <tr>
                        <td width="50%"><strong>Address</strong></td>
                        <td width="50%">
                            <input type="text" name="address" placeholder="Address" class="form-control" value="{{ $profile->address }}" >
                        </td>
                    </tr>

                   
                 
                   {{--   ////////// --}}
                    <tr>
                        <td width="50%"></td>
                        <td width="50%" class="text-right"><button type="submit" class="btn btn-danger">Update Profile</button></td>
                    </tr>
                  {{--   //////////////// --}}
                  </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection
{{-- end content --}}
@section('footer')
@parent
@endsection