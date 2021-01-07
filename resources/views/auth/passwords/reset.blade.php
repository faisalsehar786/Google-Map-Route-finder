
{{-- extend  --}}
@extends('layouts.app')
@extends('includes.header')
@extends('includes.footer')
{{-- page titles --}}
@section('title', 'Reset Password')
@section('page_berdcrum_title', 'Reset Password')
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
                        <form method="POST" action="{{ route('password.request') }}">
                        @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
                           <div class="elementor-form-fields-wrapper elementor-labels-above">
                              <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required">
                                 <label for="form-field-message" class="elementor-field-label">Email</label><input size="1" type="email" id="email"  name="email" value="{{ old('email') }}"  autofocus class="elementor-field elementor-size-sm  elementor-field-textual {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter Email" required="required" aria-required="true">
                                 @if ($errors->has('email'))
                                 <p style="color: #EE1D23;"><strong>{{ $errors->first('email') }}</strong></p>
                                 @endif    
                              </div>
                         
                                <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required">
                                 <label for="form-field-message" class="elementor-field-label">Password</label><input size="1" type="password" id="password"  name="password"  autofocus class="elementor-field elementor-size-sm  elementor-field-textual " placeholder="Enter Password" required="required" aria-required="true">
                                 @if ($errors->has('password'))
                                 <p style="color: #EE1D23;"><strong>{{ $errors->first('password') }}</strong></p>
                                 @endif    
                              </div>


                              <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required">
                                 <label for="form-field-message" class="elementor-field-label">Confirm Password</label><input size="1" type="password" id="password-confirm"  name="password_confirmation"  autofocus class="elementor-field elementor-size-sm  elementor-field-textual " placeholder="Confirm Password" required="required" aria-required="true">
                                  
                              </div>
                          
                              <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100">
                                 <button type="submit" class="elementor-button elementor-size-sm border-0">
                                 <span>
                                 <span class=" elementor-button-icon">
                                 </span>
                                 <span class="elementor-button-text">Reset Password</span>
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