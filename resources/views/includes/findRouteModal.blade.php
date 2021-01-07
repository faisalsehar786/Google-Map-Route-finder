<div class="modal fade" id="findRouteModal" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">{{ __('map.find_route') }} </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

          
        
        <!-- Modal body -->
        <div class="modal-body">
          @if (session()->get('addMarkerModalLocations')!=null)
      <form method="post" action="{{ route('directions') }}" id="findRouteModalForm">
        @csrf
           <div class="row">
            
            <div class="col-lg-4">
              <label for="">{{__('map.startpoint') }}</label>
              
              <select name="startingPoint" class="form-control startpoint">
                <option value="startpointdefault">Default</option>
              
                 @foreach (array_unique(session()->get('addMarkerModalLocations')) as $startpoint)
                    <option value="{{ $startpoint }}">{{ $startpoint }}</option>
                 @endforeach
              
               
              </select>
            </div>
            <div class="col-lg-4">
              <label for="">{{__('map.endpointpoint') }}</label>
              <select name="endingPoint" class="form-control endpoint" >
                <option value="endpointdefault">Default</option>
               
                 @foreach (array_unique(session()->get('addMarkerModalLocations')) as $endpoint)
                    <option value="{{ $endpoint }}">{{ $endpoint }}</option>
                 @endforeach
              </select>
            </div>
            <div class="col-lg-2">
              <label for="">{{__('map.travalmode') }}</label>
              <select name="travelMode" class="form-control traveltype">
               
                <option value="DRIVING" selected>Driving</option>
               <option value="WALKING">Walking</option>
               
              </select>
            </div>
            <div class="col-lg-2">
              <label for="zoom">{{__('map.zoom') }}</label>
              <select name="zoom" class="form-control traveltype">
                <option value="zoomdefault" selected>Default</option>
                <option value="1">1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
                <option value="10" >10</option>
                <option value="11" >11</option>
                <option value="12" >12</option>
                <option value="13" >13</option>
                <option value="14" >14</option>
                <option value="15" >15</option>
                <option value="16" >16</option>
                <option value="17" >17</option>
                <option value="18" >18</option>
                <option value="19" >19</option>
                <option value="20" >20</option>
              </select>
            </div>
          </div>
        </form>
        <div class="row pt-3">
          <div class="col-lg-12">
            <img src="{{ asset('assets/images/direction.png') }}" class="img-fluid" alt="Responsive image">
          </div>
        </div>
        
        
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn-lg btn-success btn-block shadow-sm border-0 rounded-0 yesfindRoute" >{{ __('map.find_route') }} ...!</button>
         
        </div>
        @else
        <h2 class="text-danger text-center">{{ __('map.no_location_found') }}</h2>
        @endif
         
        
      </div>
    </div>
  </div>