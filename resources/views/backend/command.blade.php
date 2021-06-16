@extends('backend.layouts.master')
@section('title',' DASHBOARD')
@section('main-content')
<section class="container-fluid">
  <div class="row">
    <div class="col-12 mb-4">
      <div class="card">
        <div class="card-header">
          Artisan Command
        </div>
        <div class="card-body">
          <form id="form-run-cmd">
            @csrf
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3"><span class="text-warning mr-2">php</span>artisan</span>
              </div>
              <input type="text" name="cmd" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>
            <div>
              <button type="submit" class="btn btn-success">Run Command</button>
            </div>
          </form>
        </div>
        <div class="card-footer artisan-footer">
          ....
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header">
          Terminal Command
        </div>
        <div class="card-body">
          <form id="form-terminal">
            @csrf
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon2">$</span>
              </div>
              <input type="text" name="terminal" class="form-control" id="terminal-code" aria-describedby="basic-addon2">
            </div>
            <div>
              <button type="submit" class="btn btn-success">Run Command</button>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <pre class="terminal-footer"></pre>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
  
  $('#form-run-cmd').on('submit', function(){
    // var command = encodeURIComponent($('#basic-url').val());

    $.ajax({
      url: `/runCmd`,
      type: "post",
      data: $('#form-run-cmd').serialize(),
      success: function(data){
        $('.artisan-footer').html(data);
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
      }
    });

    return false;
  });

  $('#form-terminal').on('submit', function(){
    // var command = encodeURIComponent($('#basic-url').val());
    var that = this;

    $.ajax({
      url: `/terminal`,
      type: "post",
      data: $(that).serialize(),
      success: function(data){
        $('.terminal-footer').html(data);
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
      }
    });

    return false;
  });
    
</script>
@endpush