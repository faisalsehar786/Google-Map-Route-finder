<style>
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
  background-color: #fff;
  border: none;
  border-radius: 3px;
  padding: 8px 12px;
  height: 39px!important;
  width:calc(100% - 26px);
}

.upload-btn-wrapper .btnr {
    border: none;
    color: #ffff;
    background-color: #1175A4;
  padding: 5px 10px;
  border-radius: 4px;
  font-size: 14px;
  font-weight: bold;
  position: relative;
}
.upload-btn-wrapper .btnr + span {
  padding: 5px;
  font-weight: normal;
  }

.upload-btn-wrapper input[type=file] {
    font-size: 42px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
}
</style>
<!-- The Modal -->
  <div class="modal" id="importLocation">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">{{ __('map.import_location') }}</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <ul class="nav nav-pills nav-justified" role="tablist">
    <li class="nav-item">
      <a class="nav-link active bg-light" data-toggle="pill" id="importtextarea" href="#">{{ __('map.add_multi_address') }}</a>
    </li>
    <li class="nav-item">
      <a class="nav-link bg-light" data-toggle="pill" id="filereadimport" href="#">{{ __('map.excelfile') }}</a>
    </li>
   
  </ul>

           <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ route('addMultipleMarkerbluck') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                @csrf
 
 
               <div id="appendimportFormdata"> 
        
               </div>
 
               
              <div class="modal-footer">
          <button type="submit" class="btn-lg btn-success btn-block shadow-sm border-0 rounded-0 clickImportlaoding">{{ __('map.import') }}</button>
     
         
        </div>

            </form>
      </div>
    </div>
  </div>