@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Product</h5>
    <div class="card-body">
      <form method="post" action="{{route('product.store')}}">
        {{csrf_field()}}
        <div class="form-row">
        <div class="col-12 col-md-8 form-group">
          <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{old('title')}}" class="form-control">
          @error('title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="col-12 col-md-1 form-group">
          <label for="is_featured" class="col-form-label">Is Featured</label><br>
          <input type="checkbox" class="mt-md-2" name='is_featured' id='is_featured' value='1' checked> Yes                        
        </div>

        <div class="col-12 col-md-3 form-group">
          <label for="inputColor" class="col-form-label">Color<span class="text-danger">*</span></label>
          <input id="inputColor" type="text" name="color" placeholder="Enter color"  value="{{old('color')}}" class="form-control">
          @error('color')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="col-12 col-md-6 form-group">
          <label for="summary" class="col-form-label">Summary <span class="text-danger">*</span></label>
          <textarea class="form-control" rows="6" id="summary" name="summary">{{old('summary')}}</textarea>
          @error('summary')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="col-12 col-md-6 form-group">
          <label for="description" class="col-form-label">Description</label>
          <textarea class="form-control" rows="6" id="description" name="description">{{old('description')}}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

              {{-- {{$categories}} --}}

        <div class="col-12 col-md-6 form-group">
          <label for="cat_id" class="col-form-label">Category <span class="text-danger">*</span></label>
          <select name="cat_id" id="cat_id" class="form-control">
              <option value="">--Select any category--</option>
              @foreach($categories as $key=>$cat_data)
                  <option value='{{$cat_data->id}}'>{{$cat_data->title}}</option>
              @endforeach
          </select>
        </div>

        <div class="col-12 col-md-6 form-group d-none" id="child_cat_div">
          <label for="child_cat_id" class="col-form-label">Sub Category</label>
          <select name="child_cat_id" id="child_cat_id" class="form-control">
              <option value="">--Select any category--</option>
              {{-- @foreach($parent_cats as $key=>$parent_cat)
                  <option value='{{$parent_cat->id}}'>{{$parent_cat->title}}</option>
              @endforeach --}}
          </select>
        </div>
        
        <div class="col-12 col-md-6 form-group">
          <label for="brand_id" class="col-form-label">Brand</label>
          {{-- {{$brands}} --}}

          <select name="brand_id" class="form-control">
              <option value="">--Select Brand--</option>
             @foreach($brands as $brand)
              <option value="{{$brand->id}}">{{$brand->title}}</option>
             @endforeach
          </select>
        </div>


        <div class="col-12 col-md-6 form-group">
          <label for="price" class="col-form-label">Price(Rs) <span class="text-danger">*</span></label>
          <input id="price" type="number" name="price" placeholder="Enter price"  value="{{old('price')}}" class="form-control">
          @error('price')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="col-12 col-md-6 form-group">
          <label for="discount" class="col-form-label">Discount(%)</label>
          <input id="discount" type="number" name="discount" min="0" max="100" placeholder="Enter discount"  value="{{old('discount')}}" class="form-control">
          @error('discount')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-12 col-md-6 form-group">
          <label for="amount" class="col-form-label">Effective Price(Rs.)</label>
          <input id="amount" type="number" name="amount" placeholder="Effective Price"  value="{{old('amount')}}" class="form-control">
          @error('amount')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-12 col-md-6 form-group">
          <label for="size" class="col-form-label">Storage</label>
          <select name="size[]" class="form-control selectpicker"  data-live-search="true">
              <option value="">--Select any size--</option>
              <option value="4">4 GB</option>
              <option value="8">8 GB</option>
              <option value="16">16 GB</option>
              <option value="32">32 GB</option>
              <option value="64">64 GB</option>
              <option value="128">128 GB</option>
              <option value="256">256 GB</option>
              <option value="512">512 GB</option>
          </select>
        </div>
        <div class="col-12 col-md-6 form-group">
          <label for="size" class="col-form-label">RAM</label>
          <select name="ram[]" class="form-control selectpicker"   data-live-search="true">
              <option value="">--Select any size--</option>
              <option value="1">1 GB</option>
              <option value="2">2 GB</option>
              <option value="4">4 GB</option>
              <option value="6">6 GB</option>
              <option value="8">8 GB</option>
              <option value="12">12 GB</option>
              <option value="16">16 GB</option>
              <option value="32">32 GB</option>
          </select>
        </div>


        <div class="col-12 col-md-6 form-group">
          <label for="condition" class="col-form-label">Condition</label>
          <select name="condition" class="form-control">
              <option value="">--Select Condition--</option>
              <option value="superb">Superb</option>
              <option value="better">Better</option>
              <option value="good">Good</option>
          </select>
        </div>

        <div class="col-12 col-md-6 form-group">
          <label for="stock" class="col-form-label">Quantity <span class="text-danger">*</span></label>
          <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity"  value="{{old('stock')}}" class="form-control">
          @error('stock')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-12 col-md-6 form-group">
          <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
          <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        
        <div class="col-12 col-md-6 form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-12 form-group mb-3 text-center">
          <button type="reset" class="btn btn-warning mx-3">Reset</button>
          <button class="btn btn-success mx-3" type="submit">Submit</button>
        </div>
      </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
      $('#summary').summernote({
        placeholder: "Write short description.....",
          tabsize: 2,
          height: 100
      });
    });

      $('#description').summernote({
        placeholder: "Write detail description.....",
          tabsize: 2,
          height: 150
      });

      $('#price').on('input', function(){
        var price = $(this).val()
        var discount = $('#discount').val()
        var amount = (price-(price*discount)/100).toFixed()
        $('#amount').val(amount)
      })

      $('#discount').on('input', function(){
        var discount = $(this).val()
        var price = $('#price').val()
        let amount = (price-(price*discount)/100).toFixed()
        $('#amount').val(amount)
      })
    // $('select').selectpicker();

</script>

<script>
  $('#cat_id').change(function(){
    var cat_id=$(this).val();
    // alert(cat_id);
    if(cat_id !=null){
      // Ajax call
      $.ajax({
        url:"/admin/category/"+cat_id+"/child",
        data:{
          _token:"{{csrf_token()}}",
          id:cat_id
        },
        type:"POST",
        success:function(response){
          if(typeof(response) !='object'){
            response=$.parseJSON(response)
          }
          // console.log(response);
          var html_option="<option value=''>----Select sub category----</option>"
          if(response.status){
            var data=response.data;
            // alert(data);
            if(response.data){
              $('#child_cat_div').removeClass('d-none');
              $.each(data,function(id,title){
                html_option +="<option value='"+id+"'>"+title+"</option>"
              });
            }
            else{
            }
          }
          else{
            $('#child_cat_div').addClass('d-none');
          }
          $('#child_cat_id').html(html_option);
        }
      });
    }
    else{
    }
  })
</script>
@endpush