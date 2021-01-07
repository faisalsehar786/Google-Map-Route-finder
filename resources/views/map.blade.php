<!DOCTYPE html>
<?php 
App::setLocale('it');

?>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/toaster.min.css') }}" />
  </head>
  <body id="pr">
    
    <div class="loader">
      <div class="overlay__inner">
        <div class="overlay__content"><span class="spinner"></span></div>
      </div>
    </div>
    <div class="headerheight">
      <div class="p-1" style="background-color: #F2F3F4;" id="headermap">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-2 col-lg-3 text-center">
              <a href="{{ env('APP_URL') }}">
                <img class="img-fluid d-block" src="{{ asset('assets/images/logo-mas-orizzontale-GOGO-1536x206.png') }}" class="attachment-large size-large" alt="" srcset="{{ asset('assets/images/logo-mas-orizzontale-GOGO-1536x206.png') }}">
              </a>
            </div>
            <div class="col-md-6 col-lg-6 text-center"><img class="img-fluid d-block" src="{{ asset('assets/images/frontbanner1.gif') }}" class="attachment-large size-large" alt="" srcset="{{ asset('assets/images/frontbanner1.gif') }}"></div>
            <!--   <div class="col-md-3 col-lg-2 text-center">
              <ul class="list-group list-group-flush">
                <li class="list-group-item" style="background: #F2F3F4;">
                <i class="fa fa-youtube-play mr-2" aria-hidden="true" style="color: #EC1B24; "></i>{{ __('map.how_it_work') }}</li>
              </ul>
            </div> -->
            <div class="col-md-4 col-lg-3  text-center">
              <ul class="nav">
                <li class="nav-item dropdown btn-block btn-danger " style="background-color:#EC1B24 ">
                  <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs mr-2" aria-hidden="true"></i>{{ __('map.settings') }}</a>
                  <div class="dropdown-menu">
                    @if (!Auth::guest())
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>{{ __('map.logout') }}</a>
                    
                    <a class="dropdown-item" href="{{ route('profile') }}">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      {{ __('map.subscription') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('payment') }}">
                      <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                      {{ __('map.settings') }}
                    </a>
                    
                    <form id="logout-form" class="d-none" action="{{ route('logout') }}" method="POST">
                      @csrf
                    </form>
                    @else
                    <a class="dropdown-item" href="{{ route('register') }}">
                      <i class="fa fa-sign-in" aria-hidden="true"></i>
                      {{ __('map.register') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('login') }}">
                      <i class="fa fa-sign-in" aria-hidden="true"></i>
                      {{ __('map.login') }}
                    </a>
                    
                    @endif
                    <a class="dropdown-item" href="#">
                      <i class="fa fa-youtube-play mr-2" aria-hidden="true" style="color: #EC1B24; "></i>{{ __('map.how_it_work') }}
                    </a>
                    
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2" id="searchmap">
            <div class="container-fluid">
              <div class="row align-items-center py-0">
                <div class="col-md-5 mx-auto text-center">
                  <input type="text" id="myPlaceTextBox" class="form-control pac-target-input" placeholder="{{ __('map.enter_location') }}" autocomplete="off">
                </div>
                <div class="col-md-2 mx-auto text-center">
                  <a class="btn btn-light btn-block shadow-sm border-0 rounded-0 text-white" href="{{ route('resetAll') }}" style="
                    background: #1A98BC;
                  "><i class="fa fa-refresh mr-2"></i>{{ __('map.refresh') }} </a>
                  
                </div>
                <div class="col-md-2 mx-auto text-center ">
                  <a class="btn btn-light btn-block shadow-sm border-0 rounded-0  " href="#" style="
                    background: #EFEFEF;
                  " data-toggle="modal" data-target="#importLocation"><i class="fa fa-upload mr-2"></i>{{__('map.import')}} </a>
                  
                </div>
                <div class="col-md-3 mx-auto text-center">
                  <a class="btn btn-danger btn-block shadow-sm border-0 rounded-0" style="background-color: #EC1B24;" href="#" data-toggle="modal" data-target="#findRouteModal"><i class="fa fa-car text-white mr-2"></i>{{ __('map.find_route') }} </a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <div class="container-fluid " id="printTable">
            <div class="row align-items-center">
              <div class="col-md-12 p-0">
                {!! $map['html'] !!}
              </div>
            </div>
          </div>
        </div>
        <div class="p-2" id="footermap">
          <div class="container-fluid">
            <div class="row align-items-center py-0">
              <div class="col-md-2 mx-auto text-center">
           
            
                 <a class="btn btn-light shadow-sm border-0 rounded-0 getprintmap" href="#" style="
                  background: #EFEFEF;
                " ><i class="fa fa-print mr-2"></i>{{ __('map.print') }}</a>
              
              </div>
              <div class="col-md-2 mx-auto text-center">

                  @if (session('activedownload')!=null)
              <a class="btn btn-light shadow-sm border-0 rounded-0"  style="
                  background: #EFEFEF;
                " href="#" data-toggle="modal" data-target="#downloadFilemodal"><i class="fa fa-arrow-down mr-2"></i>{{ __('map.downlaod') }} </a>

                @else
                  <a class="btn btn-light shadow-sm border-0 rounded-0"  style="
                  background: #EFEFEF;
                " href="#" onclick="downalodNotprePare();"><i class="fa fa-arrow-down mr-2"></i>{{ __('map.downlaod') }} </a>
                 
                 @endif
              
              </div>
              <!-- <div class="col-md-2  mx-auto text-center">
                <a class="btn btn-light shadow-sm border-0 rounded-0" style="
                  background: #EFEFEF;
                " href="{{ route('login') }}"><i class="fa fa-lock mr-2"></i>{{ __('map.login') }} </a>
              </div>
              
              <div class="col-md-2 mx-auto text-center">
                <a class="btn btn-light shadow-sm border-0 rounded-0" style="
                  background: #EFEFEF;
                " href="{{ route('resetAll') }}"><i class="fa fa-trash mr-2"></i>{{ __('map.resetall') }} </a>
              </div> -->
              @if ( session()->get('noresultFoundAddress')!=null)
                  <div class="col-md-2  mx-auto text-center">
                <a class="btn btn-danger shadow-sm border-0 rounded-0 noresultFoundAddress" style="
                  background: #EC1B23;
                " href="#"><i class="fa fa-map-marker  mr-2"></i>{{__('map.invalidlocoations')}}</a>


              </div>
              @endif
          
              <div class="@if(session()->get('noresultFoundAddress')!=null) col-md-4 @else col-md-6 @endif  mx-auto text-center">
                
               <a href='https://www.mas-system.it/gps-per-furgoni-camion-auto-aziendali-mas-system/'> <img class="img-fluid d-block" src="{{ asset('assets/images/downbanner.gif') }}" class="attachment-large size-large" alt="" srcset="{{ asset('assets/images/downbanner.gif') }}"></a>
              </div>
            </div>
          </div>
        </div>
        <div>
          
          @include('includes.streetViewModal')
        </div>
        <div class="container-fluid">
          <div class="row">
            <div>
              @include('includes.add_Markermodal')
            </div>
            <div>
              @include('includes.findRouteModal')
            </div>
          </div>
        </div>
        <div>
          @include('includes.importLocationsModal')
        </div>
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-12 mx-auto text-center">
              
              {{--   <div id="directionsDiv"></div> --}}
              @include('includes.downlaodFile')
            </div>
          </div>
        </div>
           @include('includes.sampleFileModal')
     
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        {!! $map['js'] !!}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script src="{{ asset('assets/js/toaster.min.js') }}"></script>
        
        @if (session()->get('havapackage')=='show')
        
        <script>
        swal({
        title:'{{__("map.attention")}}',
        text: '{{__("map.increeselimit")}}',
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
        
        window.location.href ='{{ url('login') }}';
        } else {
        
        }
        });
        
        </script>
        @endif
        @if (session()->get('upgradesubs')=='show')
        
        <script>
        swal({
        title:'{{__("map.attention")}}',
        text: '{{__("map.subsexpier")}}',
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
        
        window.location.href ='{{ url('login') }}';
        } else {
        
        }
        });
        
        </script>
        @endif
        @if (session()->get('showSubscriptionAlert')=='show')
        
        <script>
        swal({
        title:'{{__("map.attention")}}',
        text: '{{__("map.freeplain")}}',
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
        
        window.location.href ='{{ url('login') }}';
        } else {
        
        }
        });
        
        </script>
        @else
        @endif
        
       @if (session()->get('opensamplefilemodal')=='ok')
       <script>
      $(document).ready(function(){
      $('#samplefilemodal').modal('show');
      });
       </script>
     
       @endif


        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script type="text/javascript">
        var width,height;
        $(window).on('load resize', function() {
        var hh= $('.headerheight').height();
        var h4= $('#footermap').height();
        
        var tottal= hh+h4;
        width = this.innerWidth; // `this` points to the DOM object, not the jQuery object
        height = this.innerHeight;
        var final= height-tottal;
        // document.body.innerHTML = width + 'x' + height; // For demo purposes
        $('#map_canvas').css("height",  final-18);
        });
        $(document).ready(function(){
        $('.findstreetView').on('click',function(){



        
        var locvaL=$('#streetViewof_loc').val();
        
        $.ajax({
        url:"{{ url('streetView') }}",
        type:"POST",
        dataType:"json",
        data:{locvaL:locvaL,_token:"{{ csrf_token() }}"},
        success:function(res)
        {
         
         window.open("{{ url('streetView') }}/"+res);

        }
        });
        });



        $(".yesaddsingleMarker").click(function(){
        $('#addsingleMarkerForm').submit();
        });
        $(".yesfindRoute").click(function(){
        $('#findRouteModalForm').submit();
        });
        
        $(".clickImportlaoding").click(function(){
        var checktextareaval=$('#textimportAddress').val();
        if(checktextareaval!=''){
        $(this).html(' <span class="spinner-border spinner-border-lg mr-2"></span> GOGO sta lavorando per te');
        }
        
        
        });
        $(".yesfindRoute").click(function(){
        
        $(this).html(' <span class="spinner-border spinner-border-lg mr-2"></span>Find Route. . . !');
        
        
        
        });
        
        
        
        
        
        var importModaltemplate1='<div class="row showHidetextArea p-3"><div class="col-lg-12"><p class="text-capitalize">{{ __('map.get_perfect_result') }}</p></div><div class="col-lg-12"><textarea rows="10" class="form-control" name="textimportAddress" id="textimportAddress" required placeholder="Piazza Colonna 370 00187 Roma&#10;Piazza Città di Lombardia, 1, 20124 Milano"></textarea></div></div>';
        
        var importModaltemplate2='<div class="row showHideimportFile p-3"><div class="col-lg-12"> <center> <a href="{{ asset('assets/images/file-di-esempio-importazione-indirizzi-gogo.xlsx') }}">{{__("map.samplefile")}}</a></center><p class="text-center text-capitalize"> {{__("map.excelfile")}}</p><div class="text-center"><div class="upload-btn-wrapper"><button class="btnr" title="Sfoglia">Sfoglia</button><span></span><input type="file" name="importlocFile" id="importlocFile" required="" title="Sfoglia" /></div></div></div</div>';
        
        $('#appendimportFormdata').html(importModaltemplate1);
        $("#importtextarea").click(function(){
        $('#appendimportFormdata').html(importModaltemplate1);
        });
        $("#filereadimport").click(function(){
        $('#appendimportFormdata').html(importModaltemplate2);
        
        });
        });
        function makerOptionsModal(aa){
        $('#streetViewof_loc').val(aa);
        map.setZoom(13);
        
        $('#openStreetViewModal').modal('show');
        
        // toggleBounce()
        
        // $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng=33.720000,73.060000&key=AIzaSyB9mGrfneMjxI3baHaM8uBN2kRwwSml774", function(data, status){
        
        //   console.log( data.results[0]);
        //   });
        // navigator.geolocation.getCurrentPosition(success, error);
        // function success(position) {
        // console.log(position.coords.latitude)
        // console.log(position.coords.longitude)
        // var GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + position.coords.latitude + '%2C' + position.coords.longitude + '&language=en&key=AIzaSyB9mGrfneMjxI3baHaM8uBN2kRwwSml774';
        // $.getJSON(GEOCODING).done(function(location) {
        // console.log(location)
        // })
        // }
        // function error(err) {
        // console.log(err)
        // }
        }
        $(".traveltype").select2({ width: '100%' });
        $(".endpoint").select2({ width: '100%' });
        $(".startpoint").select2({ width: '100%' });
        
        </script>
        <script type="text/javascript">

          function downalodNotprePare(){
             toastr.error('For Download Route Minimumm 2 Address Requried ');

          }
        
        toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "5000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        
        
        $(function () { //ready
        @if (Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
        @endif
        });
        /////////////////
        $(function () { //ready
        @if (Session::has('info'))
        toastr.info('{{ Session::get('info') }}');
        
        @endif
        });
        /////////////////
        $(function () { //ready
        @if (Session::has('error'))
        toastr.error('{{ Session::get('error') }}');
        
        @endif
        });
        function printData()
        {
        $("#footermap").hide();
        $("#headermap").hide();
        $("#searchmap").hide();
        window.print();
        $("#footermap").show();
        $("#headermap").show();
        $("#searchmap").show();
        }
        $('.getprintmap').on('click',function(){
        printData();
        })
        $('.downloadFilemodalyes').on('click',function(){
        
        var typefile1=$('.typefile').val();
        
        $.ajax({
        url:"{{ url('downloadExcel') }}",
        type:"POST",
        dataType:"json",
        data:{typefile:typefile1,_token:"{{ csrf_token() }}"},
        success:function(res)
        {
        console.log(res);
        }
        });
        });
        </script>
        
        @if ( session()->get('noresultFoundAddress')!=null)
        
        <!-- The Modal -->
        <div class="modal" id="locationnotfound">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">{{__('map.locationsinvalid')}} </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <ul class="list-group">
                  @foreach ( array_unique(session()->get('noresultFoundAddress')) as $element)
                  <li class="list-group-item">{{ $element }}</li>
                  @endforeach
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
        <script>
        $(document).ready(function(){
       $(".noresultFoundAddress").click(function(){
   $('#locationnotfound').modal('show');
});
        $('#locationnotfound').modal('show');
        });
        </script>
        @endif
      </body>
    </html>