
  @php
 $downloadfileaccordinToSubscription=CH::checklogedinSubscriptionDownlaodfile();
  @endphp
          

<div class="modal fade" id="downloadFilemodal" >
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">{{ __('map.downloadfileroutedata') }} </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

          
        
        <!-- Modal body -->
        <div class="modal-body">
          @if (session()->get('addMarkerModalLocations')!=null)
      <form method="post" action="{{ route('downloadExcel') }}" id="downloadFilemodalForm">
        @csrf
           <div class="row">
          

             @if ($downloadfileaccordinToSubscription['logedin']=='no' && $downloadfileaccordinToSubscription['subscription']==0)
              <div class="col-lg-12">
              <label for="">{{ __('map.filetype') }}</label>
               
            <label for=""> Select File Type</label>
               
                 <select name="typefile" class="form-control typefile" required="">
               
                 <option value="csv">csv</option>
                <option value="xls">xls</option>
               <option value="xlsx">xlsx</option>
              
              
               
              </select>
            </div>
             @endif

             @if ($downloadfileaccordinToSubscription['logedin']=='yes' && $downloadfileaccordinToSubscription['subscription']==0)
              <div class="col-lg-12">
              <label for=""> Select File Type</label>
               
                 <select name="typefile" class="form-control typefile" required="">
               
                 <option value="csv">csv</option>
                <option value="xls">xls</option>
               <option value="xlsx">xlsx</option>
              
              
               
              </select>
            </div>
             @endif

               @if ( $downloadfileaccordinToSubscription['subscription']==1)
             <div class="col-lg-12">
              <label for=""> Select File Type</label>
               
                 <select name="typefile" class="form-control typefile" required="">
               
                 <option value="csv">csv</option>
                <option value="xls">xls</option>
               <option value="xlsx">xlsx</option>
              
               
              </select>
            </div>
          </div>
      
        @endif
        
         
        
        <!-- Modal footer -->
        <div class="col-lg-12 mt-2">
          <button type="buttons" class="btn-lg btn-danger btn-block shadow-sm border-0 rounded-0 downloadFilemodalyes" ><i class="fa fa-download mr-2" aria-hidden="true"></i>{{ __('map.downlaod') }} ...!</button>
         
        </div>
          </form>
        @else
        <h2 class="text-danger text-center">{{ __('map.no_location_found') }}</h2>
        @endif
         
        
      </div>
    </div>
  </div>