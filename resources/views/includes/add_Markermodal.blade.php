<div class="modal fade" id="addMarkerModal" >
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">{{ __('map.addmarkerthislocation') }} </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post" action="{{ route('addSingleMarker') }}" id="addsingleMarkerForm">
          @csrf
          <input type="hidden" name="routsearchLocation" id="routsearchLocation">
        </form>
        <!-- Modal body -->
        <div class="modal-body">
          <img src="{{ asset('assets/images/addmarker.png') }}" class="img-fluid" alt="Responsive image">
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success yesaddsingleMarker" >{{ __('map.Yes') }}</button>
           <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        </div>
        
      </div>
    </div>
  </div>