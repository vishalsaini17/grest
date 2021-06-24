@extends('backend.layouts.master')

@section('main-content')



<div class="card">
    <h5 class="card-header">Edit Product</h5>
    <div class="card-body">
      <form method="post" action="{{route('product.update',$product->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-row">
          <div class="col-md-8 col-10 form-group">
            <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{$product->title}}" class="form-control">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          
          <div class="col-1 form-group">
            <label for="is_featured" class="col-form-label">Is Featured</label><br>
            <input type="checkbox" class="mt-3 mx-auto" name='is_featured' id='is_featured' value='{{$product->is_featured}}' {{(($product->is_featured) ? 'checked' : '')}}> Yes                        
          </div>

          <div class="col-12 col-md-3 form-group">
            <label for="inputColor" class="col-form-label">Color <span class="text-danger">*</span></label>
            <input id="inputColor" type="text" name="color" placeholder="Enter color"  value="{{$product->color}}" class="form-control">
            @error('color')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

          <div class="col-12 col-md-6 form-group">
            <label for="summary" class="col-form-label">Summary <span class="text-danger">*</span></label>
            <textarea class="form-control" id="summary" name="summary">{{$product->summary}}</textarea>
            @error('summary')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

          <div class="col-12 col-md-6 form-group">
            <label for="description" class="col-form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{$product->description}}</textarea>
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>


                {{-- {{$categories}} --}}

          <div class="col-6 col-md-4  col-lg-3 form-group">
            <label for="cat_id">Category <span class="text-danger">*</span></label>
            <select name="cat_id" id="cat_id" class="form-control">
                <option value="">--Select any category--</option>
                @foreach($categories as $key=>$cat_data)
                    <option value='{{$cat_data->id}}' {{(($product->cat_id==$cat_data->id)? 'selected' : '')}}>{{$cat_data->title}}</option>
                @endforeach
            </select>
          </div>
          @php 
            $sub_cat_info=DB::table('categories')->select('title')->where('id',$product->child_cat_id)->get();
          // dd($sub_cat_info);

          @endphp
          {{-- {{$product->child_cat_id}} --}}
          <div class="col-6 col-md-4  col-lg-3 form-group {{(($product->child_cat_id)? '' : 'd-none')}}" id="child_cat_div">
            <label for="child_cat_id">Sub Category</label>
            <select name="child_cat_id" id="child_cat_id" class="form-control">
                <option value="">--Select any sub category--</option>
                
            </select>
          </div>

          <div class="col-6 col-md-4  col-lg-3 form-group">
            <label for="price" class="col-form-label">Price(Rs.) <span class="text-danger">*</span></label>
            <input id="price" type="number" name="price" placeholder="Enter price"  value="{{$product->price}}" class="form-control">
            @error('price')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

          <div class="col-6 col-md-4  col-lg-3 form-group">
            <label for="discount" class="col-form-label">Discount(%)</label>
            <input id="discount" type="number" name="discount" min="0" max="100" placeholder="Enter discount"  value="{{$product->discount}}" class="form-control">
            @error('discount')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-6 col-md-4  col-lg-3 form-group">
            <label for="amount" class="col-form-label">Effective Price(Rs.)</label>
            <input id="amount" type="number" name="amount" placeholder="Effective Price"  value="{{$product->amount}}" class="form-control">
            @error('amount')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          {{-- <div class="col-6 col-md-4  col-lg-3 form-group">
            <label for="size">Size</label>
            <select name="size[]" class="form-control selectpicker"  multiple data-live-search="true">
                <option value="">--Select any size--</option>
                @foreach($items as $item)              
                  @php 
                  $data=explode(',',$item->size);
                  // dd($data);
                  @endphp
                <option value="S"  @if( in_array( "S",$data ) ) selected @endif>Small</option>
                <option value="M"  @if( in_array( "M",$data ) ) selected @endif>Medium</option>
                <option value="L"  @if( in_array( "L",$data ) ) selected @endif>Large</option>
                <option value="XL"  @if( in_array( "XL",$data ) ) selected @endif>Extra Large</option>
                @endforeach
            </select>
          </div> --}}

          <div class="col-6 col-md-4  col-lg-3 form-group">
            <label for="size" class="col-form-label">Storage</label>
            <select name="size[]" class="form-control selectpicker" data-live-search="true">
                <option value="">--Select any size--</option>
                <option value="4" @if($product->size == '4') selected @endif>4 GB</option>
                <option value="8" @if($product->size == '8') selected @endif>8 GB</option>
                <option value="16" @if($product->size == '16') selected @endif>16 GB</option>
                <option value="32" @if($product->size == '32') selected @endif>32 GB</option>
                <option value="64" @if($product->size == '64') selected @endif>64 GB</option>
                <option value="128" @if($product->size == '128') selected @endif>128 GB</option>
                <option value="256" @if($product->size == '256') selected @endif>256 GB</option>
                <option value="512" @if($product->size == '512') selected @endif>512 GB</option>
            </select>
          </div>
          <div class="col-6 col-md-4  col-lg-3 form-group">
            <label for="ram" class="col-form-label">RAM</label>
            <select name="ram[]" class="form-control selectpicker"  data-live-search="true">
                <option value="">--Select any size--</option>
                <option value="1" @if($product->ram == '1') selected @endif>1 GB</option>
                <option value="2" @if($product->ram == '2') selected @endif>2 GB</option>
                <option value="4" @if($product->ram == '4') selected @endif>4 GB</option>
                <option value="6" @if($product->ram == '6') selected @endif>6 GB</option>
                <option value="8" @if($product->ram == '8') selected @endif>8 GB</option>
                <option value="12" @if($product->ram == '12') selected @endif>12 GB</option>
                <option value="16" @if($product->ram == '16') selected @endif>16 GB</option>
                <option value="32" @if($product->ram == '32') selected @endif>32 GB</option>
            </select>
          </div>
      

          <div class="col-6 col-md-4  col-lg-3 form-group">
            <label for="brand_id" class="col-form-label">Brand</label>
            <select name="brand_id" class="form-control">
                <option value="">--Select Brand--</option>
              @foreach($brands as $brand)
                <option value="{{$brand->id}}" {{(($product->brand_id==$brand->id)? 'selected':'')}}>{{$brand->title}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-6 col-md-4  col-lg-3 form-group">
            <label for="condition" class="col-form-label">Condition</label>
            <select name="condition" class="form-control">
                <option value="">--Select Condition--</option>
                <option value="superb" {{(($product->condition=='superb')? 'selected':'')}}>Superb</option>
                <option value="better" {{(($product->condition=='better')? 'selected':'')}}>Better</option>
                <option value="good" {{(($product->condition=='good')? 'selected':'')}}>Good</option>
            </select>
          </div>

          <div class="col-6 col-md-4  col-lg-3 form-group">
            <label for="stock" class="col-form-label">Quantity <span class="text-danger">*</span></label>
            <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity"  value="{{$product->stock}}" class="form-control">
            @error('stock')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-6 col-md-6 col-lg-6 form-group">
            <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                    <i class="fas fa-image"></i> Choose
                    </a>
                </span>
            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$product->photo}}">
          </div>
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
            @error('photo')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          
          <div class="col-6 col-md-4 col-lg-3 form-group">
            <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
            <select name="status" class="form-control">
              <option value="active" {{(($product->status=='active')? 'selected' : '')}}>Active</option>
              <option value="inactive" {{(($product->status=='inactive')? 'selected' : '')}}>Inactive</option>
          </select>
            @error('status')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 text-center form-group mb-3">
            <button class="btn btn-success btn-lg" type="submit">Update</button>
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
          height: 150
      });

      $('#description').summernote({
        placeholder: "Write detail Description.....",
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
        var amount = (price-(price*discount)/100).toFixed()
        $('#amount').val(amount)
      })
      function setAmount(){
        var price = $('#price').val()
        var discount = $('#discount').val()
        var amount = (price-(price*discount)/100).toFixed()
        $('#amount').val(amount)
      }
      setAmount()
    });
</script>

<script>
  var  child_cat_id='{{$product->child_cat_id}}';
        // alert(child_cat_id);
        $('#cat_id').change(function(){
            var cat_id=$(this).val();

            if(cat_id !=null){
                // ajax call
                $.ajax({
                    url:"/admin/category/"+cat_id+"/child",
                    type:"POST",
                    data:{
                        _token:"{{csrf_token()}}"
                    },
                    success:function(response){
                        if(typeof(response)!='object'){
                            response=$.parseJSON(response);
                        }
                        var html_option="<option value=''>--Select any one--</option>";
                        if(response.status){
                            var data=response.data;
                            if(response.data){
                                $('#child_cat_div').removeClass('d-none');
                                $.each(data,function(id,title){
                                    html_option += "<option value='"+id+"' "+(child_cat_id==id ? 'selected ' : '')+">"+title+"</option>";
                                });
                            }
                            else{
                                console.log('no response data');
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

        });
        if(child_cat_id!=null){
            $('#cat_id').change();
        }
</script>
@endpush