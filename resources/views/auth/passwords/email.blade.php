{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}



 {{-- extend  --}}
@extends('layouts.app')
@extends('includes.header')
@extends('includes.footer')
{{-- page titles --}}
@section('title', 'Sign In')
@section('page_berdcrum_title', 'Sign In')
@section('header')
@parent
@endsection
{{-- page content --}} 
@section('content')
<section class="elementor-element elementor-element-c478cf8 elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="c478cf8" data-element_type="section" style="background-image: url({{ asset('assets/images/overallbackground.jpg') }});
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;">
   <div class="elementor-background-overlay"></div>
   <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
         <div class="elementor-element elementor-element-02debfc elementor-column elementor-col-50 elementor-top-column" data-id="02debfc" data-element_type="column">
            <div class="elementor-column-wrap  elementor-element-populated">
               <div class="elementor-widget-wrap">
                  <div class="elementor-element elementor-element-920a816 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="920a816" data-element_type="widget" data-widget_type="form.default">
                     <div class="elementor-widget-container">
                        <form class="" action="{{ route('password.email') }}"  method="POST" name="New Form">
                           @csrf
                           <div class="elementor-form-fields-wrapper elementor-labels-above">
                             @if (session('status'))
                              <div class="alert alert-success" role="alert">
                               {{ session('status') }}
                              </div>
                               @endif
                              <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required">
                                 <label for="form-field-message" class="elementor-field-label">EMAIL</label><input size="1" type="email" id="email"  name="email" value="{{ old('email') }}"  autofocus class="elementor-field elementor-size-sm  elementor-field-textual {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter Email" required="required" aria-required="true">
                                 @if ($errors->has('email'))
                                 <p style="color: #EE1D23;"><strong>{{ $errors->first('email') }}</strong></p>
                                 @endif    
                              </div>
                              <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100">
                                 <button type="submit" class="elementor-button elementor-size-sm border-0">
                                 <span>
                                 <span class=" elementor-button-icon">
                                 </span>
                                 <span class="elementor-button-text">Send Password Reset Link</span>
                                 </span>
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-270ed8f elementor-column elementor-col-50 elementor-top-column" data-id="270ed8f" data-element_type="column">
            <div class="elementor-column-wrap  elementor-element-populated">
               <div class="elementor-widget-wrap">
                  <div class="elementor-element elementor-element-237f5cf elementor-widget elementor-widget-heading" data-id="237f5cf" data-element_type="widget" data-widget_type="heading.default">
                     <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Don't Have an Account ?</h2>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-30ee5f3 elementor-align-center elementor-widget elementor-widget-button" data-id="30ee5f3" data-element_type="widget" data-widget_type="button.default">
                     <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                           <a href="{{ route('register') }}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                           <span class="elementor-button-content-wrapper">
                           <span class="elementor-button-text">Sign Up Here</span>
                           </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /page content -->
@endsection
{{-- end content --}}
@section('footer')
@parent
@endsection