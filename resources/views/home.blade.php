{{-- extend  --}}
@extends('layouts.app')
@extends('includes.header')
@extends('includes.footer')
{{-- page titles --}}
@section('title', 'Wellcome')
@section('page_berdcrum_title', 'Benvenuta')
@section('header')
@parent
@endsection
{{-- page content --}} 
@section('content')
<?php 
App::setLocale('it');

?>
<section class="elementor-element elementor-element-778fc4b elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="778fc4b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-e51e44a elementor-column elementor-col-100 elementor-top-column" data-id="e51e44a" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <section class="elementor-element elementor-element-a4fde7f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="a4fde7f" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-8c508b1 elementor-column elementor-col-50 elementor-inner-column" data-id="8c508b1" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-bc1acf2 elementor-widget elementor-widget-heading" data-id="bc1acf2" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">{{__('map.wellcome')}}!</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-a7cc3f2 elementor-column elementor-col-50 elementor-inner-column" data-id="a7cc3f2" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-e2d677a elementor-widget elementor-widget-heading" data-id="e2d677a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">gogo mas system</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-e11c697 elementor-widget elementor-widget-divider" data-id="e11c697" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-e50cd28 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e50cd28" data-element_type="section" style="background-image: url({{ asset('assets/images/overallbackground.jpg') }});
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;">
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-cbc3e32 elementor-column elementor-col-100 elementor-top-column" data-id="cbc3e32" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <section class="elementor-element elementor-element-9e6c43e elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="9e6c43e" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-f8cc10e elementor-column elementor-col-50 elementor-inner-column" data-id="f8cc10e" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-6871010 elementor-widget elementor-widget-image" data-id="6871010" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="800" height="108" src="{{ asset('assets/images/logo-mas-orizzontale-GOGO-1536x206.png') }}" class="attachment-large size-large" alt="" srcset="{{ asset('assets/images/logo-mas-orizzontale-GOGO-1536x206.png') }}">                                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-16430b7 elementor-column elementor-col-50 elementor-inner-column" data-id="16430b7" data-element_type="column">
                                        <div class="elementor-column-wrap">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-45c4640 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="45c4640" data-element_type="widget" data-widget_type="image-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-image-box-wrapper">
                                    <figure class="elementor-image-box-img"><img width="109" height="101" src="{{ asset('assets/images/icon77-removebg-preview (1).png') }}" class="attachment-full size-full" alt=""></figure>
                                    <div class="elementor-image-box-content">
                                        <h3 class="elementor-image-box-title">{{__('map.providingrouting')}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-fdc8d22 elementor-widget elementor-widget-divider" data-id="fdc8d22" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-784175f elementor-widget elementor-widget-spacer" data-id="784175f" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-f267f9e elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="f267f9e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-94b8b26 elementor-column elementor-col-100 elementor-top-column" data-id="94b8b26" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-956653e elementor-widget elementor-widget-spacer" data-id="956653e" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <section class="elementor-element elementor-element-c71c5fc elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c71c5fc" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-79a867a elementor-column elementor-col-33 elementor-inner-column" data-id="79a867a" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-af1db3b elementor-widget elementor-widget-text-editor" data-id="af1db3b" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <h5><strong style="font-size: 25px; font-family: poppins; color: black; font-weight: bold;">{{__('map.personalprofile')}}</strong> </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-e236de8 elementor-widget elementor-widget-text-editor" data-id="e236de8" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>gogo.mas-system.it/</p>
                                                            <p>abc@gamail.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-def28a6 elementor-align-right elementor-widget elementor-widget-button" data-id="def28a6" data-element_type="widget" data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="{{ route('profile') }}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text"> {{__('map.viewprofile')}}</span>
                                                            </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-e062a72 elementor-column elementor-col-33 elementor-inner-column" data-id="e062a72" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-72daf07 elementor-widget elementor-widget-text-editor" data-id="72daf07" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <h5><strong style="font-size: 25px; font-family: poppins; color: black; font-weight: bold;">{{__('map.acountdetail')}}</strong> </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8a9bb63 elementor-widget elementor-widget-text-editor" data-id="8a9bb63" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>Free Account</p>
                                                            <p>25 Address Limit</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-393b618 elementor-align-right elementor-widget elementor-widget-button" data-id="393b618" data-element_type="widget" data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="{{ route('payment') }}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text"> {{__('map.upgradepackage')}}</span>
                                                            </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-073afd9 elementor-column elementor-col-33 elementor-inner-column" data-id="073afd9" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-ef80265 elementor-widget elementor-widget-text-editor" data-id="ef80265" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <h5><strong style="font-size: 25px; font-family: poppins; color: black; font-weight: bold;">{{__('map.packagedetail')}}</strong> </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-abeba08 elementor-widget elementor-widget-text-editor" data-id="abeba08" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>Free Package </p>
                                                            <p>Expire in 30 Days </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-df4f1f3 elementor-align-right elementor-widget elementor-widget-button" data-id="df4f1f3" data-element_type="widget" data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="{{ route('payment') }}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">{{__('map.changepackage')}}</span>
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
                        <div class="elementor-element elementor-element-75418ee elementor-widget elementor-widget-spacer" data-id="75418ee" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-element elementor-element-9c84575 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="9c84575" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-element elementor-element-de3f13a elementor-column elementor-col-100 elementor-top-column" data-id="de3f13a" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-9d36a3b elementor-widget elementor-widget-spacer" data-id="9d36a3b" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
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