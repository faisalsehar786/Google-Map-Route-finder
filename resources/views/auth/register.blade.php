@extends('layouts.app')
@extends('includes.header')
@extends('includes.footer')
{{-- page titles --}}
@section('title', 'Sign In')
@section('page_berdcrum_title', 'Registrati')
@section('header')
@parent
@endsection
{{-- page content --}} 
@section('content')
<?php 
App::setLocale('it');

?>

<section class="elementor-element elementor-element-c478cf8 elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="c478cf8" data-element_type="section" style="background-image: url({{ asset('assets/images/overallbackground.jpg') }});
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;" >
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-02debfc elementor-column elementor-col-50 elementor-top-column" data-id="02debfc" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-920a816 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="920a816" data-element_type="widget" data-widget_type="form.default">
                            <div class="elementor-widget-container">
                                <form class="" method="POST" action="{{ route('register') }}" name="New Form">
                                    @csrf
                                    <div class="elementor-form-fields-wrapper elementor-labels-above">
                                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required">
                                            <label for="form-field-message" class="elementor-field-label">
                                            Nome</label><input size="1" type="text" name="name" value="{{ old('name') }}" required autofocus class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Inserisci il nome" aria-required="true">
                                            @if ($errors->has('name'))
                                            <p style="color: #EE1D23;"><strong>{{ $errors->first('email') }}</strong></p>
                                            @endif    
                                        </div>
                                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required">
                                            <label for="form-field-message" class="elementor-field-label">
                                         Nome utente</label><input size="1" type="text" name="username" value="{{ old('username') }}" required autofocus class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Inserire username" aria-required="true">
                                        </div>
                                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required">
                                            <label for="form-field-message" class="elementor-field-label">{{__('map.enter_email')}}</label><input size="1" type="email" name="email" value="{{ old('email') }}" required autofocus class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="{{__('map.enter_email')}}" aria-required="true">
                                            @if ($errors->has('email'))
                                            <p style="color: #EE1D23;"><strong>{{ $errors->first('email') }}</strong></p>
                                            @endif    
                                        </div>
                                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required">
                                            <label for="form-field-message" class="elementor-field-label">Azienda </label><input size="1" type="text" name="company" value="{{ old('company') }}"  autofocus class="elementor-field elementor-size-sm  elementor-field-textual" placeholder=" Azienda" aria-required="true">
                                        </div>
                                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required">
                                            <label for="form-field-message" class="elementor-field-label">{{__('map.enter_password')}}</label><input size="1" type="password" name="password" value="{{ old('password') }}" required autofocus class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="{{__('map.enter_password')}}" aria-required="true">
                                            @if ($errors->has('password'))
                                            <p style="color: #EE1D23;"><strong>{{ $errors->first('password') }}</strong></p>
                                            @endif    
                                        </div>
                                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required">
                                            <label for="form-field-message" class="elementor-field-label">Password</label><input id="password-confirm" size="1" type="password" name="password_confirmation"  required autofocus class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Immettere Conferma password" aria-required="true">
                                        </div>
                                        <div class="elementor-field-type-checkbox elementor-field-group elementor-column elementor-field-group-field_4 elementor-col-100">
                                            <div class="elementor-field-subgroup  "><span class="elementor-field-option"><input type="checkbox" value="yes" id="form-field-field_4-0" name="term_con" required=""> <label for="form-field-field_4-0">{{__('map.agreewithterms')}}</label></span></div>
                                        </div>
                                        <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100">
                                            <button type="submit" class="elementor-button elementor-size-sm border-0">
                                            <span>
                                            <span class=" elementor-button-icon">
                                            </span>
                                            <span class="elementor-button-text">{{__('map.register')}}</span>
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
                                <h2 class="elementor-heading-title elementor-size-default">{{__('map.alreadyhaveaccount')}} </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-30ee5f3 elementor-align-center elementor-widget elementor-widget-button" data-id="30ee5f3" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a href="{{ route('login') }}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                    <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">{{__('map.loginhere')}}</span>
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