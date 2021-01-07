<div class="modal fade" id="openStreetViewModal" >
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">{{ __('map.gotostreetview') }}  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post" action="{{ route('streetViewof_loc') }}" >
          @csrf
          <input type="hidden" name="streetViewof_loc" id="streetViewof_loc">
       
        <!-- Modal body -->
        <div class="modal-body">
          <img src="{{ asset('assets/images/streetview.jpg') }}" class="img-fluid" alt="Responsive image">
        
        <!-- Modal footer -->
        <div class="modal-footer">
             <button type="button" class="btn btn-success findstreetView " >{{ __('map.Yes') }}</button>
       
           <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            </form>
        </div>
        
      </div>
    </div>
  </div>