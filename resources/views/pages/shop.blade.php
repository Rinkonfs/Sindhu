@include('inc.head')
<body>
@include('inc.nav')
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{ URL::to('home') }}">Home</a></span> <span>Shop</span></p>
            <h1 class="mb-0 bread">Shop</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-lg-10 order-md-last">
                    <div class="row">

                        @foreach($products as $product)
                            <div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
                                <div class="product d-flex flex-column">
                                    <a  href="{{ route('users.products.show', $product->id)}}"
                                        class="img-prod">
                                            <img    class="img-fluid"
                                                    src="{{url('/images/'.$product->image)}}"
                                                    alt="Sindhu Product Image">
                                            
                                            <div  class="overlay"> </div>
                                    </a>
                                    <div class="text py-3 pb-4 px-3">
                                        <div class="d-flex">
                                            <div class="cat">
                                                <span>{{ $product->category}}</span>
                                            </div>
                                            <div class="rating">
                                                <p class="text-right mb-0">
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                </p>
                                            </div>
                                        </div>
                                        <h3>
                                            <a href="{{ route('users.products.show', $product->id) }}">
                                                {{ $product->productName }}
                                            </a>
                                        </h3>
                                        <div class="pricing">
                                            <p class="price">
                                                <span>
                                                    Tk. {{ $product->productPrice }}
                                                </span>
                                            </p>
                                        </div>
                                        <p class="bottom-area d-flex px-3">
                                            <a  style="margin-bottom:100px;" 
                                                href="{{ route('users.products.add-to-cart', $product->id) }}"
                                                class="add-to-cart text-center py-2 mr-1">
                                                    <span>Add to cart <i class="icon-add"></i></span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
		    		<div class="row mt-5">

                        <div class="col text-center">

                            <div class="block-27">

                                @if ($products->hasPages())
                                    <ul>

                                        @if ($products->onFirstPage())
                                            <li class="disabled"><a>&lt;</a></li>
                                        @else
                                            <li class="disabled"><a href="{{ $products->previousPageUrl() }}" rel="prev">&lt;</a></li>
                                        @endif

                                        @if($products->currentPage() > 3)
                                            <li class="hidden-xs"><a href="{{ $products->url(1) }}">1</a></li>
                                        @endif

                                        @if($products->currentPage() > 4)
                                            <li><span>...</span></li>
                                        @endif



                                            @foreach(range(1, $products->lastPage()) as $i)
                                                @if($i >= $products->currentPage() - 2 && $i <= $products->currentPage() + 2)
                                                    @if ($i == $products->currentPage())
                                                        <li class="active"><span>{{ $i }}</span></li>
                                                    @else
                                                        <li><a href="{{ $products->url($i) }}">{{ $i }}</a></li>
                                                    @endif
                                                @endif
                                            @endforeach


                                            @if($products->currentPage() < $products->lastPage() - 3)
                                                <li><span>...</span></li>
                                            @endif
                                            @if($products->currentPage() < $products->lastPage() - 2)
                                                <li class="hidden-xs"><a href="{{ $products->url($products->lastPage()) }}">{{ $products->lastPage() }}</a></li>
                                            @endif


                                            {{-- Next Page Link --}}
                                            @if ($products->hasMorePages())
                                                <li><a href="{{ $products->nextPageUrl() }}" rel="next">&gt;</a></li>
                                            @else
                                                <li class="disabled"><a>&gt;</a></li>
                                            @endif

                                    </ul>
                                @endif

                            </div>
                        </div>



		        </div>
		    	</div>

		    	<div class="col-md-4 col-lg-2">
                    <div class="sidebar">
                        <div class="sidebar-box-2">
                            <h2 class="heading">Categories</h2>
                            <div class="fancy-collapse-panel">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    @foreach (App\Models\Category\productCategory::with('child')->where('cat_p_id',0)->get() as $cat_item)
                                        @if ($cat_item->child->count()>=0)
                                        <div class="panel-heading" role="tab" id="{{$cat_item->id}}">
                                            <h4 class="panel-title">
                                                <a  data-toggle="collapse"
                                                    data-parent="#accordion"
                                                    href="#{{$cat_item->cat_name}}"
                                                    aria-expanded="true"
                                                    aria-controls="{{$cat_item->cat_name}}">
                                                   {{$cat_item->cat_name}}
                                                </a>
                                            </h4>
                                        </div>
                                        @foreach ($cat_item->child as $submenu)
                                        <div id="{{$cat_item->cat_name}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{$cat_item->id}}">
                                            <div class="panel-body">
                                                <ul><a href="//www.google.com/">{{$submenu->cat_name}}</a></ul>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        {{-- @if ($cat_item->child->count()==0)
                                        <div class="panel-heading" role="tab" id="{{$cat_item->cat_name}}">
                                            <h4 class="panel-title">
                                                <a   href="//www.google.com/">
                                                    {{$cat_item->cat_name}}
                                                </a>
                                            </h4>
                                        </div>
                                        
                                        @endif --}}
                                    @endforeach  
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="sidebar-box-2">
                            <h2 class="heading">Price Range</h2>
                            <form method="post" class="colorlib-form-2">
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="guests">Price from:</label>
                                        <div class="form-field">
                                        <i class="icon icon-arrow-down3"></i>
                                        <select name="people" id="people" class="form-control">
                                            <option value="#">1</option>
                                            <option value="#">200</option>
                                            <option value="#">300</option>
                                            <option value="#">400</option>
                                            <option value="#">1000</option>
                                        </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="guests">Price to:</label>
                                        <div class="form-field">
                                        <i class="icon icon-arrow-down3"></i>
                                        <select name="people" id="people" class="form-control">
                                            <option value="#">2000</option>
                                            <option value="#">4000</option>
                                            <option value="#">6000</option>
                                            <option value="#">8000</option>
                                            <option value="#">10000</option>
                                        </select>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
    			</div>
    		</div>
    	</div>
    </section>
    @include('inc/footer')

  <!-- LOADER -->
    <div  id="ftco-loader"
        class="show fullscreen">
            <svg    class="circular"
                    width="48px"
                    height="48px">
                        <circle class="path-bg"
                                cx="24"
                                cy="24"
                                r="22"
                                fill="none"
                                stroke-width="4"
                                stroke="#eeeeee"/>
                        <circle class="path"
                                cx="24"
                                cy="24"
                                r="22"
                                fill="none"
                                stroke-width="4"
                                stroke-miterlimit="10"
                                stroke="#F96D00"/>
            </svg>
    </div>

  @include('inc/scripts')
  <script>
      function notice(){
        alert("Sorry,there is no product yet in this category");

      }
  </script>

  </body>
</html>
