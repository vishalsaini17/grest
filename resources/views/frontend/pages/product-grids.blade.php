@extends('frontend.layouts.master')

@section('title',' PRODUCT PAGE')

@section('main-content')
	<!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.html">All Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Product Style -->
    <form action="{{route('shop.filter')}}" method="POST">
        @csrf
        <section class="product-area mx-3 shop-sidebar shop section">
            <div class="container-xxl mx-auto">
                <div class="row">
                    <div class="col-lg-3 col-md-4 collapse" id="filters-sidebar">
                        <div class="shop-sidebar">
                                <!-- Single Widget -->
                                <div class="single-widget category">
                                    <h3 class="title">Categories</h3>
                                    <ul class="categor-list">
										@php
											// $category = new Category();
											$menu=App\Models\Category::getAllParentWithChild();
                                            $_GET['ram'] = (isset($_GET['ram']))? $_GET['ram'] : '';
                                            $_GET['storage'] = (isset($_GET['storage']))? $_GET['storage'] : '';
                                            $_GET['condition'] = (isset($_GET['condition']))? $_GET['condition'] : '';
                                            $ramFilter = explode(',', $_GET['ram']);
                                            $storageFilter = explode(',', $_GET['storage']);
                                            $conditionFilter = explode(',', $_GET['condition']);
                                            // dd($conditionFilter);
                                            $brands=DB::table('brands')->orderBy('title','ASC')->where('status','active')->get();
										@endphp
										@if($menu)
										<li>
											@foreach($menu as $cat_info)
													@if($cat_info->child_cat->count()>0)
														<li><a href="{{route('product-cat',$cat_info->slug)}}">{{$cat_info->title}}</a>
															<ul>
																@foreach($cat_info->child_cat as $sub_menu)
																	<li><a href="{{route('product-sub-cat',[$cat_info->slug,$sub_menu->slug])}}">{{$sub_menu->title}}</a></li>
																@endforeach
															</ul>
														</li>
													@else
														<li><a href="{{route('product-cat',$cat_info->slug)}}">{{$cat_info->title}}</a></li>
													@endif
											@endforeach
										</li>
										@endif
                                        {{-- @foreach(Helper::productCategoryList('products') as $cat)
                                            @if($cat->is_parent==1)
												<li><a href="{{route('product-cat',$cat->slug)}}">{{$cat->title}}</a></li>
											@endif
                                        @endforeach --}}
                                    </ul>
                                </div>
                                <!--/ End Single Widget -->
                                <!-- Shop By Price -->
                                    <div class="single-widget filter-section">
                                        <div class="widget-container">
                                            <div class="range">
                                                <h3 class="title">Filter by Price</h3>
                                                {{-- <a class="title" data-toggle="collapse" href="#ram-filter-collapse" role="button">Filter by Price</a> --}}
                                                <div class="price-filter">
                                                    <div class="price-filter-inner">
                                                        @php
                                                            $max             = DB::table('products')->max('price');
                                                            $product_0_5k    = DB::table('products')->whereBetween('amount', [0, 5000])->get();
                                                            $product_5k_10k  = DB::table('products')->whereBetween('amount', [5000, 10000])->get();
                                                            $product_10k_20k = DB::table('products')->whereBetween('amount', [10000, 20000])->get();
                                                            $product_20k     = DB::table('products')->whereBetween('amount', [20000, $max])->get();
                                                            // dd($product_20k);
                                                        @endphp
                                                        <div id="slider-range" data-min="0" data-max="{{$max}}"></div>
                                                        <div class="product_filter d-flex">
                                                            {{-- <button type="submit" class="m-3 btn btn-info">Filter Results</button> --}}
                                                            <div class="label-input d-flex justify-content-between">
                                                                <span>Range:</span>
                                                                <input class="w-100 text-right" type="text" id="amount" readonly/>
                                                                <input type="hidden" name="price_range" id="price_range" value="{{$_GET['price'] ?? ''}}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-container">
                                            <div class="cosmetic-condition">
                                                <h3 class="title">FIlter by Condition</h3>
                                                {{-- <a class="title" data-toggle="collapse" href="#storage-filter-collapse" role="button">Filter by storage <i class="fa fa-angle-down ml-auto"></i></a> --}}
                                                <div class="condition-filter pt-1 d-flex justify-content-between">
                                                    <label for="superb"class="btn btn-sm btn-hollow-grest {{(in_array('superb', $conditionFilter))? 'checked': ''}}">
                                                        <input type="checkbox" hidden name="condition[]" value="superb" {{(in_array('superb', $conditionFilter))? 'checked': ''}} id="superb">
                                                        <span>Superb</span>
                                                    </label>
                                                    <label for="better"class="btn btn-sm btn-hollow-grest {{(in_array('better', $conditionFilter))? 'checked': ''}}">
                                                        <input type="checkbox" hidden name="condition[]" value="better" {{(in_array('better', $conditionFilter))? 'checked': ''}} id="better">
                                                        <span>Better</span>
                                                    </label>
                                                    <label for="good"class="btn btn-sm btn-hollow-grest"> {{(in_array('good', $conditionFilter))? 'checked': ''}}
                                                        <input type="checkbox" hidden name="condition[]" value="good" {{(in_array('good', $conditionFilter))? 'checked': ''}} id="good">
                                                        <span>Good</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-container">
                                            <div class="ram">
                                                {{-- <h3 class="title">Filter by Ram</h3> --}}
                                                <a class="title" data-toggle="collapse" href="#ram-filter-collapse" role="button">Filter by RAM <i class="fa fa-angle-down ml-auto"></i></a>
                                                <ul class="ram-filter collapse pt-1 d-flex flex-wrap" id="ram-filter-collapse">
                                                    <li class="form-group mb-0">
                                                        <input type="checkbox" name="ram[]" {{(in_array(1, $ramFilter))? 'checked': ''}} value="1" id="ram-1">
                                                        <label for="ram-1">1GB</label>
                                                    </li>
                                                    <li class="form-group mb-0">
                                                        <input type="checkbox" name="ram[]" {{(in_array(2, $ramFilter))? 'checked': ''}} value="2" id="ram-2">
                                                        <label for="ram-2">2GB</label>
                                                    </li>
                                                    <li class="form-group mb-0">
                                                        <input type="checkbox" name="ram[]" {{(in_array(3, $ramFilter))? 'checked': ''}} value="3" id="ram-3">
                                                        <label for="ram-3">3GB</label>
                                                    </li>
                                                    <li class="form-group mb-0">
                                                        <input type="checkbox" name="ram[]" {{(in_array(4, $ramFilter))? 'checked': ''}} value="4" id="ram-4">
                                                        <label for="ram-4">4GB</label>
                                                    </li>
                                                    <li class="form-group mb-0">
                                                        <input type="checkbox" name="ram[]" {{(in_array(6, $ramFilter))? 'checked': ''}} value="6" id="ram-6">
                                                        <label for="ram-6">6GB</label>
                                                    </li>
                                                    <li class="form-group mb-0">
                                                        <input type="checkbox" name="ram[]" {{(in_array(8, $ramFilter))? 'checked': ''}} value="8" id="ram-8">
                                                        <label for="ram-8">8GB</label>
                                                    </li>
                                                    <li class="form-group mb-0">
                                                        <input type="checkbox" name="ram[]" {{(in_array(12, $ramFilter))? 'checked': ''}} value="12" id="ram-12">
                                                        <label for="ram-12">12GB</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="widget-container">
                                            {{-- @dd($data) --}}
                                            <div class="storage">
                                                {{-- <h3 class="title">Filter by storage</h3> --}}
                                                <a class="title" data-toggle="collapse" href="#storage-filter-collapse" role="button">Filter by storage <i class="fa fa-angle-down ml-auto"></i></a>
                                                <ul class="storage-filter collapse pt-1" id="storage-filter-collapse">
                                                    <li class="form-group mb-0">
                                                        <input type="checkbox" name="storage[]" {{($_GET['storage'] == 4)? 'checked': ''}} value="4" id="storage-4">
                                                        <label for="storage-4">4GB</label>
                                                    </li>
                                                    <li class="form-group mb-0">
                                                        <input type="checkbox" name="storage[]" {{($_GET['storage'] == 8)? 'checked': ''}} value="8" id="storage-8">
                                                        <label for="storage-8">8GB</label>
                                                    </li>
                                                    <li class="form-group mb-0">
                                                        <input type="checkbox" name="storage[]" {{($_GET['storage'] == 16)? 'checked': ''}} value="16" id="storage-16">
                                                        <label for="storage-16">16GB</label>
                                                    </li>
                                                    <li class="form-group mb-0">
                                                        <input type="checkbox" name="storage[]" {{($_GET['storage'] == 32)? 'checked': ''}} value="32" id="storage-32">
                                                        <label for="storage-32">32GB</label>
                                                    </li>
                                                    <li class="form-group mb-0">
                                                        <input type="checkbox" name="storage[]" {{($_GET['storage'] == 64)? 'checked': ''}} value="64" id="storage-64">
                                                        <label for="storage-64">64GB</label>
                                                    </li>
                                                    <li class="form-group mb-0">
                                                        <input type="checkbox" name="storage[]" {{($_GET['storage'] == 128)? 'checked': ''}} value="128" id="storage-128">
                                                        <label for="storage-128">128GB</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        {{-- @dd($brands) --}}
                                        <div class="widget-container">
                                            <div class="brand-list-mobile d-block d-md-none">
                                                <h3 class="title">filter by Brands</h3>
                                                <ul class="d-flex flex-wrap brands-filter-mobile" style="gap: 0 1rem">
                                                    @foreach($brands as $brand)
                                                        <li>
                                                            <input type="checkbox" name="brand" id="brand{{$brand->slug}}">
                                                            <label for="brand{{$brand->slug}}">{{$brand->title}}</label>
                                                            {{-- <a href="{{route('product-brand',$brand->slug)}}">{{$brand->title}}</a> --}}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="filter-buttons d-flex justify-content-between">
                                            {{-- <button type="button" onclick="{{route('product-grids')}}" class="my-3 btn btn-warning filter-btn">Clear Filters</button> --}}
                                            <a  href="{{route('product-grids')}}" class="my-3 text-white btn btn-warning filter-btn">Clear Filters</a>
                                            <button type="submit" class="my-3 btn btn-info filter-btn">Filter Results</button>
                                        </div>

                                        {{-- <ul class="check-box-list">
                                            <li>
                                                <label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">Up to Rs.5000<span class="count">({{count($product_0_5k)}})</span></label>
                                            </li>
                                            <li>
                                                <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Rs.5000 - Rs.10000<span class="count">({{count($product_5k_10k)}})</span></label>
                                            </li>
                                            <li>
                                                <label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">Rs.10000 - Rs. 20000<span class="count">({{count($product_10k_20k)}})</span></label>
                                            </li>
                                            <li>
                                                <label class="checkbox-inline" for="4"><input name="news" id="4" type="checkbox">Rs.20000 and above<span class="count">({{count($product_20k)}})</span></label>
                                            </li>
                                        </ul> --}}
                                    </div>
                                    <!--/ End Shop By Price -->
                                     <!-- Single category Widget -->
                                <div class="single-widget category">
                                    <h3 class="title">Brands</h3>
                                    <ul class="categor-list d-none d-md-block">
                                        @foreach($brands as $brand)
                                            <li><a href="{{route('product-brand',$brand->slug)}}">{{$brand->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!--/ End Single category Widget -->
                                <!-- Single Widget -->
                                <div class="single-widget recent-post">
                                    <h3 class="title">Recent post</h3>
                                    {{-- {{dd($recent_products)}} --}}
                                    @foreach($recent_products as $product)
                                        <!-- Single Post -->
                                        @php
                                            $photo=explode(',',$product->photo);
                                        @endphp
                                        <div class="single-post first">
                                            <div class="image">
                                                <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                            </div>
                                            <div class="content">
                                                {{-- <h5><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h5> --}}
                                                <h5 class="">
                                                    <a href="{{route('product-detail',$product->slug)}}"><?= $product->title.' ('.$product->ram.'GB+'.$product->size.'GB)' ?></a>
                                                    <span class="{{($product->condition == 'superb') ? 'condition-pill-S' : (($product->condition == 'better') ? 'condition-pill-B' : 'condition-pill')}}">{{$product->condition}}</span>
                                                </h5>
                                                <p class="price"> Rs. {{number_format($product->amount)}} <small><del class="text-muted">Rs. {{number_format($product->price)}}</del></small></p>

                                            </div>
                                        </div>
                                        <!-- End Single Post -->
                                    @endforeach
                                </div>
                                <!--/ End Single Widget -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="row">
                            <div class="col-12">
                                <!-- Shop Top -->
                                <div class="shop-top d-flex justify-content-between px-3 py-3">
                                    <div class="shop-shorter">
                                       {{--  <div class="single-shorter">
                                            
                                            <label>Show :</label>
                                            <select class="show" name="show" onchange="this.form.submit();">
                                                <option value="">Default</option>
                                                <option value="9" @if(!empty($_GET['show']) && $_GET['show']=='9') selected @endif>09</option>
                                                <option value="15" @if(!empty($_GET['show']) && $_GET['show']=='15') selected @endif>15</option>
                                                <option value="21" @if(!empty($_GET['show']) && $_GET['show']=='21') selected @endif>21</option>
                                                <option value="30" @if(!empty($_GET['show']) && $_GET['show']=='30') selected @endif>30</option>
                                            </select> 
                                        </div>--}}
                                        <div class="single-shorter d-flex align-items-center">
                                            <div class="mobile-filter d-block d-md-none">
                                                <a data-toggle="collapse" href="#filters-sidebar" role="button" class="btn btn-sm px-3 mr-3 btn-primary">Filters</a>
                                            </div>
                                            <label class="text-nowrap m-0">Sort By &nbsp</label>
                                            <select class='sortBy' name='sortBy' onchange="this.form.submit();">
                                                <option value="">Default</option>
                                                <option value="title" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='title') selected @endif>Name</option>
                                                <option value="price" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='price') selected @endif>Price</option>
                                                <option value="category" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='category') selected @endif>Category</option>
                                                <option value="brand" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='brand') selected @endif>Brand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <ul class="view-mode-new d-flex align-items-center">
                                        <li class="active bg-grest"><a href="javascript:void(0)"><i class="fa fa-th-large"></i></a></li>
                                        {{-- <li><a href="{{route('product-lists')}}"><i class="fa fa-th-list"></i></a></li> --}}
                                    </ul>
                                </div>
                                <!--/ End Shop Top -->
                            </div>
                        </div>
                        <div class="row">
                            {{-- {{$products}} --}}
                            @if(count($products)>0)
                                @foreach($products as $product)
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="{{route('product-detail',$product->slug)}}">
                                                    @php
                                                        $photo=explode(',',$product->photo);
                                                    @endphp
                                                    <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                                    <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                                    @if($product->discount)
                                                                <span class="price-dec">{{$product->discount}} % Off</span>
                                                    @endif
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                        <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}" class="wishlist" data-id="{{$product->id}}"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    </div>
                                                    <div class="product-action-2">
                                                        <a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content mt-sm-0">
                                                <h3 class="title d-inline-block"><a href="{{route('product-detail',$product->slug)}}"><?= $product->title.' ('.$product->ram.'GB Ram, '.$product->size.'GB Storage)' ?></a>
                                                <span class="{{($product->condition == 'superb') ? 'condition-pill-S' : (($product->condition == 'better') ? 'condition-pill-B' : 'condition-pill')}}">{{$product->condition}}</span><br></h3>
                                                @php
                                                    $after_discount=($product->price-($product->price*$product->discount)/100);
                                                @endphp
                                                <span class="red-link font-weight-bold">Rs. {{number_format($after_discount)}}</span>
                                                <small><del style="padding-left:4%;">Rs. {{number_format($product->price)}}</del></small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                    <h4 class="text-warning" style="margin:100px auto;">There are no products.</h4>
                            @endif



                        </div>
                        <div class="row">
                            <div class="col-md-12 justify-content-center d-flex">
                                {{-- @dd($products) --}}
                                {{-- {{$products[0]->appends($_GET)->links()}} --}}
                            </div>
                          </div>

                    </div>
                </div>
            </div>
        </section>
    </form>

    <!--/ End Product Style 1  -->



    <!-- Modal -->
    @if($products)
        @foreach($products as $key=>$product)
            <div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                            </div>
                            <div class="modal-body">
                                <div class="row no-gutters">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <!-- Product Slider -->
                                            <div class="product-gallery">
                                                <div class="quickview-slider-active">
                                                    @php
                                                        $photo=explode(',',$product->photo);
                                                    // dd($photo);
                                                    @endphp
                                                    @foreach($photo as $data)
                                                        <div class="single-slider">
                                                            <img src="{{$data}}" alt="{{$data}}">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        <!-- End Product slider -->
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="quickview-content">
                                            <h2>{{$product->title}}</h2>
                                            <div class="quickview-ratting-review">
                                                <div class="quickview-ratting-wrap">
                                                    <div class="quickview-ratting">
                                                        {{-- <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="fa fa-star"></i> --}}
                                                        @php
                                                            $rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
                                                            $rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
                                                        @endphp
                                                        @for($i=1; $i<=5; $i++)
                                                            @if($rate>=$i)
                                                                <i class="yellow fa fa-star"></i>
                                                            @else
                                                            <i class="fa fa-star"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <a href="#"> ({{$rate_count}} customer review)</a>
                                                </div>
                                                <div class="quickview-stock">
                                                    @if($product->stock >0)
                                                    <span><i class="fa fa-check-circle-o"></i> {{$product->stock}} in stock</span>
                                                    @else
                                                    <span><i class="fa fa-times-circle-o text-danger"></i> {{$product->stock}} out stock</span>
                                                    @endif
                                                </div>
                                            </div>
                                            @php
                                                $after_discount=($product->price-($product->price*$product->discount)/100);
                                            @endphp
                                            <h3><small><del class="text-muted">Rs. {{number_format($product->price)}}</del></small>    Rs. {{number_format($after_discount)}}  </h3>
                                            <div class="quickview-peragraph">
                                                <p>{!! html_entity_decode($product->summary) !!}</p>
                                            </div>
                                            @if($product->size)
                                                <div class="size">
                                                    <h4>Size</h4>
                                                    <ul>
                                                        @php
                                                            $sizes=explode(',',$product->size);
                                                            // dd($sizes);
                                                        @endphp
                                                        @foreach($sizes as $size)
                                                        <li><a href="#" class="one">{{$size}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="size">
                                                <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                        <h5 class="title">Size</h5>
                                                        <select>
                                                            @php
                                                            $sizes=explode(',',$product->size);
                                                            // dd($sizes);
                                                            @endphp
                                                            @foreach($sizes as $size)
                                                                <option>{{$size}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- <div class="col-lg-6 col-12">
                                                        <h5 class="title">Color</h5>
                                                        <select>
                                                            <option selected="selected">orange</option>
                                                            <option>purple</option>
                                                            <option>black</option>
                                                            <option>pink</option>
                                                        </select>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            <form action="{{route('single-add-to-cart')}}" method="POST">
                                                @csrf
                                                <div class="quantity">
                                                    <!-- Input Order -->
                                                    <div class="input-group">
                                                        <div class="button minus">
                                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                                <i class="ti-minus"></i>
                                                            </button>
                                                        </div>
                                                        <input type="hidden" name="slug" value="{{$product->slug}}">
                                                        <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                                        <div class="button plus">
                                                            <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                                <i class="ti-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!--/ End Input Order -->
                                                </div>
                                                <div class="add-to-cart">
                                                    <button type="submit" class="btn btn-primary">Add to cart</button>
                                                    <a href="{{route('add-to-wishlist',$product->slug)}}" class="btn min"><i class="ti-heart"></i></a>
                                                </div>
                                            </form>
                                            <div class="default-social">
                                            <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        @endforeach
    @endif
    <!-- Modal end -->

@endsection
@push('styles')
<style>
    .pagination{
        display:inline-flex;
    }
    .filter_button{
        /* height:20px; */
        text-align: center;
        background:#F7941D;
        padding:8px 16px;
        margin-top:10px;
        color: white;
    }
</style>
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    {{-- <script>
        $('.cart').click(function(){
            var quantity=1;
            var pro_id=$(this).data('id');
            $.ajax({
                url:"{{route('add-to-cart')}}",
                type:"POST",
                data:{
                    _token:"{{csrf_token()}}",
                    quantity:quantity,
                    pro_id:pro_id
                },
                success:function(response){
                    console.log(response);
					if(typeof(response)!='object'){
						response=$.parseJSON(response);
					}
					if(response.status){
						swal('success',response.msg,'success').then(function(){
							document.location.href=document.location.href;
						});
					}
                    else{
                        swal('error',response.msg,'error').then(function(){
							// document.location.href=document.location.href;
						});
                    }
                }
            })
        });
    </script> --}}
    <script>
        $(document).ready(function(){
        /*----------------------------------------------------*/
        /*  Jquery Ui slider js
        /*----------------------------------------------------*/
        if ($("#slider-range").length > 0) {
            const max_value = parseInt( $("#slider-range").data('max') ) || 500;
            const min_value = parseInt($("#slider-range").data('min')) || 0;
            const currency = $("#slider-range").data('currency') || '';
            let price_range = min_value+'-'+max_value;
            if($("#price_range").length > 0 && $("#price_range").val()){
                price_range = $("#price_range").val().trim();
            }

            let price = price_range.split('-');
            $("#slider-range").slider({
                range: true,
                min: min_value,
                max: max_value,
                values: price,
                slide: function (event, ui) {
                    $("#amount").val(currency + ui.values[0] + " -  "+currency+ ui.values[1]);
                    $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
                }
            });
            }
        if ($("#amount").length > 0) {
            const m_currency = $("#slider-range").data('currency') || '';
            $("#amount").val(m_currency + $("#slider-range").slider("values", 0) +
                "  -  "+m_currency + $("#slider-range").slider("values", 1));
            }
        })
        function getURL(name) {
            return decodeURI(
                (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]);
        }
        var ram = [] = getURL('ram').split(',');
        var storage = [] = getURL('storage').split(',');
        var condition = [] = getURL('condition').split(',');

        ram.forEach(ram => {
            $(`#ram-${ram}`).prop('checked',true)
        })
        storage.forEach(storage => {
            $(`#storage-${storage}`).prop('checked',true)
        })

    </script>
@endpush