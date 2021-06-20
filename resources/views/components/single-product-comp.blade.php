
            <!-- Start Single Tab -->
            @if($product_lists)
            @foreach($product_lists as $key=>$product)
            @if ($type == 'isotope')
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product->cat_id}}">
            @endif
            
              {{-- <x-single-product-comp /> --}}
              <div class="single-product">
                <div class="product-img">
                    {{-- @dd($product) --}}
                  <a href="{{route('product-detail',$product->slug)}}" class="filter-anchor">
                    @php
                    $photo=explode(',',$product->photo);
                    // dd($photo);
                    @endphp
                    <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                    <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                    @if($product->stock<=0) <span class="out-of-stock">Sold out</span>
                      @elseif($product->condition=='superb')
                      <span class="hot">Superb</span> 
                      @elseif($product->condition=='better')
                      <span class="new">Good as new</span>
                      @else
                      <span class="price-dec">{{$product->discount}}% Off</span>
                      @endif
            
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    </div>
                    <div class="product-action-2">
                      <a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h3><a class="text-" href="{{route('product-detail',$product->slug)}}">{{$product->title}} | {{$product->ram}}GB | {{$product->size}}GB</a></h3>
                  <div class="product-price">
                    @php
                    $after_discount=($product->price-($product->price*$product->discount)/100);
                    @endphp
                    <span style="color: #ea2953">Rs. {{number_format($after_discount)}}</span>
                    <small style="padding-left:4%; text-decoration: line-through;">Rs. {{number_format($product->price)}}</small>
                  </div>
                </div>
                <div class="button-head-mobile d-none">
                  <div class="product-action">
                    {{-- <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a> --}}
                    <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}"><i class=" ti-heart "></i><span></span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}">Add to cart</a>
                  </div>
                </div>
              </div>
            @if ($type == 'isotope')
            </div>
            @endif

            @endforeach

            <!--/ End Single Tab -->
            @endif

            <!--/ End Single Tab -->

          