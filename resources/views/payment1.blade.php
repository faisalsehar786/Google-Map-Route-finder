{{-- extend  --}}
@extends('layouts.app')
@extends('includes.header')
@extends('includes.footer')
{{-- page titles --}}
@section('title', 'Subscription')
@section('page_berdcrum_title', 'Piano')
@section('header')
@parent
@endsection
{{-- page content --}}
@section('content')
<?php 
App::setLocale('it');

?>
<style type="text/css" media="screen">
    .loader{
        z-index: 119 !important;
    }
</style>
<div class="container text-center mt-5">
    <div class="row">
        <div class="col-lg-12 p-lg-5">
            <div class="card p-5 ">
                <div class="row">
                    <div class="col-12">
                        <h3>{{ CH::checklogedinSubscription() }}</h3>
                        <!--<img src="//{{ asset('assets/images/subscription.png') }}" alt="" class="mx-auto d-block img-thumbnail" width="200">-->
                    </div>
                </div>
                 <h2 class="text-success text-center">scegli il metodo di pagamento</h2>
                
                @if (isset($strip_error))
                <div class="alert alert-warning alert-dismissible fade show bg-danger text-white" role="alert">
                    {{ $strip_error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if (isset($strip_success))
                <div class="alert alert-success alert-dismissible fade show bg-success text-white" role="alert">
                    {{ $strip_success }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                
                
                @if ($errors->any())
                
                
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endforeach
                
                
                @endif
                 <div class="row">

                 

                  <div class="col-sm-6" id="paypalpayment">
                   <img src="{{ asset('assets/images/Paypal.png') }}" alt="" class=" shadow-sm border p-4 mb-5 bg-white rounded mx-auto d-block img-thumbnail" width="200">
                  </div>
                  <div class="col-sm-6" id="stripepayment">
                      <img src="{{ asset('assets/images/strip.png') }}" alt="" class=" shadow-sm border p-3 mb-5 bg-white rounded mx-auto d-block img-thumbnail" width="200">
                </div>
                </div>

                <div class="stripep" style="display: none;">
                    
               
                @if (isset($update_subscription))
                <form action="{{ route('updatesubscribtion') }}" method="post" id="payment-form">
                    @csrf
                    <input type="hidden" name="price" id="plainPrice" value="20">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">{{__('map.slectplain')}}</label>
                        <select class="form-control" id="selectPlain" name="plain" required="">
                            <option value="" selected="">{{__('map.slectplain')}}</option>}
                            option
                            @if (isset($packages))
                            @foreach ($packages as $package)
                            <option value="{{ $package->id }}">{{ $package->name }}-Price &nbsp; € {{ $package->price }} - Import Limit Per Request &nbsp;({{ $package->limit }})</option>
                            @endforeach
                            @endif
                            
                            
                        </select>
                    </div>
                    <div class="form-row">
                        
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <button class="btn btn-success btn-block mt-2"> {{__('map.upgradesubs')}}</button>
                </form>
                @else
                <form action="{{ route('subscribe') }}" method="post" class="payment_form_custom" id="payment-form">
                    @csrf
                    <input type="hidden" name="price" id="plainPrice" value="20">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"> {{__('map.slectplain')}}</label>
                        <select class="form-control" id="selectPlain" name="plain" required="" >
                            <option value="" selected="">{{__('map.slectplain')}}</option>}
                            option
                            @if (isset($packages))
                            @foreach ($packages as $package)
                            <option value="{{ $package->id }}">{{ $package->name }}-Price &nbsp; ${{ $package->price }} - Import Limit Per Request &nbsp;({{ $package->limit }})</option>
                            @endforeach
                            @endif
                            
                            
                        </select>
                    </div>
                    <div class="form-row">
                        
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <button class="btn btn-success btn-block mt-2 clicksubscribe"  ><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>{{__('map.subscription')}}</button>
                </form>
                @endif
                
               <!--  @if (session()->get('receipt_url')!=null)
                <a  class="pt-5" href="{{ session()->get('receipt_url') }}">Receipt Url</a>
                @endif -->

                 </div>

                          <div class="paypalp" style="display: none;">
                          <div class=" shownotshow alert alert-info  bg-info text-white" role="alert">
                        
                       il tuo stato attuale...
                      
                       
                         </div>
                            <select class="form-control" id="selectPlainforPaypal" name="plain" required="">
                            <option value="" selected="">{{__('map.slectplain')}}</option>
                          
                            @if (isset($packages))
                            @foreach ($packages as $package)
                            <option value="{{ $package->id }}">{{ $package->name }}-Price &nbsp; € {{ $package->price }} - Import Limit Per Request &nbsp;({{ $package->limit }})</option>
                            @endforeach
                            @endif
                           </select>
                          
                          <center class="mt-3"><div class="rmIdClasspaypal" id="paypal-button"></div></center>
                   </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection
{{-- end content --}}
@section('footer')
@parent

<script src="{{ asset('assets/js/custom.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){

    




 $('#stripepayment').click(function(){

 $('.paypalp').fadeOut();
 $('.stripep').fadeIn();
 })

 $('#paypalpayment').click(function(){

 $('.paypalp').fadeIn();
 $('.stripep').fadeOut();
 })

// $(".clicksubscribe").click(function(){


//  swal({
//   title: "Are you sure Want to Subscribe?",
//   text: "",
//   icon: "warning",
//   buttons: true,
 
// })
// .then((willDelete) => {
//   if (willDelete) {

//      $('.payment_form_custom').submit();
      
 
//   } else {
    
//   }
// });
//    });  

$("#selectPlain").change(function(){
    var plainId=$(this).val();

$.ajax({
url:"{{ url('getPlainPrice') }}",
type:"POST",
dataType:"json",
data:{plain_id:plainId,_token:"{{ csrf_token() }}"},
success:function(res)
{
$("#plainPrice").val(res.packagedetail.price);
}
});
});
});
</script>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>

    $('#selectPlainforPaypal').change(function() {


var plainId=$(this).val();

if (plainId=='') {

    $('.paypal-button').html('');
  alert('Please Select Plain you choose Empty value..!');  
}else{
$('.loader').show();

$.ajax({
url:"{{ url('subscribebyPaypalcheck') }}",
type:"POST",
dataType:"json",
data:{plain_id:plainId,_token:"{{ csrf_token() }}"},
success:function(res)
{


$('.paypal-button').html('');


 $('.loader').hide();

 $('.shownotshow').text(res.status);

var $total=res.price;



  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AaoG2wGGpDQncblec8pNXbL7JyOyOG9NlV9Nu0ywcadB8SP3z3tKIWaV9EgDubb_5Eteg2yv8DVSQq7r',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total:$total,
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function(payment) {
        // Show a confirmation message to the buyer
         var tidacc = payment.id;
      
        window.location="{{ url('Paypalpaymentdone') }}/"+tidacc;
      });
    }
  }, '#paypal-button');
}
});

}
});

   
</script>
@endsection