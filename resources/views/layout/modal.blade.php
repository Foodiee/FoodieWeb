@section('modal')
  <div class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="col-md-6 left-upload-modal">
            <div class="wf-box" style="margin-top:100px;">
              <img src="vendors/img/5.jpg">
              <div class="content">
                <textarea placeholder='Viết chú thích'></textarea>
              </div>
            </div>
          </div>
          <div class="col-md-6 right-upload-modal">
            <div class="row" style="margin-top:20px;">
              <div class="col-md-10">Chọn một bảng</div>
              <div class="col-md-2">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Search" style="margin-top:30px;">
            <div class="row" style="margin-top:30px;border-radius:6px;">
              <img src="vendors/img/5.jpg" width="50" height="50">
              <span style='margin-left:10px;'>Album 1</span>
            </div>
            <div class="row" style="margin-top:30px;border-radius:6px;">
              <img src="vendors/img/5.jpg" width="50" height="50">
              <span style='margin-left:10px;'>Album 1</span>
            </div>
            <div class="row" style="margin-top:30px;border-radius:6px;">
              <img src="vendors/img/red-plus.png" width="50" height="50"> 
              <span style='margin-left:10px;'>Tạo thêm 1 bảng</span>
            </div>
          </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
{{-- @stop  --}}
