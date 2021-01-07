<!DOCTYPE html>
<?php 
App::setLocale('it');

?>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        {{-- include all css files and meta tags --}}
        {{--  <script src="{{ asset('js/app.js') }}" defer></script> --}}
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <!-- Styles -->
        @yield('header')
    </head>
    <body class="home page-template page-template-elementor_header_footer page page-id-8 wp-custom-logo wb-bp-front-page elementor-default elementor-template-full-width elementor-kit-10 elementor-page elementor-page-8" data-elementor-device-mode="desktop">
         <div class="loader">
    <div class="overlay__inner">
        <div class="overlay__content"><span class="spinner"></span></div>
    </div>
</div>
        <div data-elementor-type="header" data-elementor-id="29" class="elementor elementor-29 elementor-location-header" data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section class="elementor-element elementor-element-5f90dc9 elementor-section-content-middle elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="5f90dc9" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-633bcfc elementor-column elementor-col-25 elementor-top-column" data-id="633bcfc" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-c0e45a2 elementor-widget elementor-widget-image" data-id="c0e45a2" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <a href="{{ env('APP_URL') }}">
                                                        <img width="800" height="108" src="{{ asset('assets/images/logo-mas-orizzontale-GOGO-1536x206.png') }}" class="attachment-large size-large" alt="" srcset="{{ asset('assets/images/logo-mas-orizzontale-GOGO-1536x206.png') }}" sizes="(max-width: 800px) 100vw, 800px">                               </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-9bae5e7 elementor-column elementor-col-25 elementor-top-column" data-id="9bae5e7" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-a380299 elementor-widget elementor-widget-heading" data-id="a380299" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-small">{{__('map.heading_text_here')}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-dc2bd51 elementor-column elementor-col-25 elementor-top-column" data-id="dc2bd51" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-583116b elementor-widget elementor-widget-image" data-id="583116b" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <!--<a href="#">-->
                                                        <!--<img width="4680" height="629" src="//{{ asset('assets/images/logo-mas-orizzontale-GOGO-1536x206.png') }}" class="attachment-full size-full" alt="" srcset="{{ asset('assets/images/logo-mas-orizzontale-GOGO-1536x206.png') }}" sizes="(max-width: 4680px) 100vw, 4680px">                               </a>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-b6fd44e elementor-column elementor-col-25 elementor-top-column" data-id="b6fd44e" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-df40134 elementor-widget elementor-widget-html" data-id="df40134" data-element_type="widget" data-widget_type="html.default">
                                                <div class="elementor-widget-container">
                                                    <center>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-th-large" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu">

                                                                @if (!Auth::guest())
                                                                  <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>{{__('map.logout')}}</a>
                                                               
                                                                  <a class="dropdown-item" href="{{ route('profile') }}">
                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                  {{__('map.profile')}}
                                                                  </a>
                                                                   <a class="dropdown-item" href="{{ route('payment') }}">
                                                                 <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                                                 {{__('map.subscription')}}
                                                                    
                                                                  </a>
                              
                                                                     <form id="logout-form" class="d-none" action="{{ route('logout') }}" method="POST">
                                                                        @csrf
                                                                      </form>
                                                                @else
                                                                  <a class="dropdown-item" href="{{ route('register') }}">
                                                                <i class="fa fa-sign-in" aria-hidden="true"></i>
                                                                  Register
                                                                  </a>
                                                                     <a class="dropdown-item" href="{{ route('login') }}">
                                                                 <i class="fa fa-sign-in" aria-hidden="true"></i>
                                                                    Login
                                                                  </a>
                                                                   
                                                                 @endif
                                                              
                                                                
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div data-elementor-type="wp-post" data-elementor-id="8" class="elementor elementor-8 elementor-144 " data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section class="elementor-element elementor-element-78c518cd elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="78c518cd" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-16ca0a42 elementor-column elementor-col-100 elementor-top-column" data-id="16ca0a42" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-6bb6b4fa elementor-widget elementor-widget-theme-page-title elementor-page-title elementor-widget-heading" data-id="6bb6b4fa" data-element_type="widget" data-widget_type="theme-page-title.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">@yield('page_berdcrum_title')</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @yield('content')
                </div>
            </div>
        </div>
        {{-- include all js files --}}
        @yield('footer')
    </body>
</html>