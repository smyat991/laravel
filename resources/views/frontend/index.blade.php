@extends('frontend_master');
@section('content')
	<!-- Carousel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  	<ol class="carousel-indicators">
	    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  	</ol>
	  		
	  	<div class="carousel-inner">
	    	<div class="carousel-item active">
			    <img src="{{asset('frontend_assets/image/banner/ac.jpg')}}" class="d-block w-100 bannerImg" alt="...">
			</div>
			<div class="carousel-item">
			    <img src="{{asset('frontend_assets/image/banner/giordano.jpg')}}" class="d-block w-100 bannerImg" alt="...">
			</div>
			<div class="carousel-item">
			    <img src="{{asset('frontend_assets/image/banner/garnier.jpg')}}" class="d-block w-100 bannerImg" alt="...">
			</div>
	    </div>
	</div>


	<!-- Content -->
	<div class="container mt-5 px-5">
		<!-- Category -->
		<div class="row">
			@foreach ($categories as $category)
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
				<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				  	<img src="{{$category->photo}}" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<p class="card-text font-weight-bold text-truncate">{{$category->name}}</p>
				  	</div>
				</div>
			</div>
			@endforeach
		</div>

		<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
		
		<!-- Discount Item -->
		<div class="row mt-5">
			<h1> Discount Item </h1>
		</div>

	    <!-- Disocunt Item -->
		<div class="row">
			<div class="col-12">
				<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
		            <div class="MultiCarousel-inner">
		            	@foreach($items as $item)
		            	@if($item->discount!='')
		                <div class="item">
		                    <div class="pad15">
		                    	<a href="{{route('itemdetailpage',$item->id)}}">
		                    		<img src="{{$item->photo}}" class="img-fluid">
		                    	</a>
		                    	
		                        <p class="text-truncate">{{$item->name}}</p>
		                        <p class="item-price">
		                        	<strike>{{$item->price}}</strike> 
		                        	<span class="d-block">{{$item->discount}}</span>
		                        </p>
		                

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<!-- <a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a> -->
								<button class="btn-outline-danger mybtn" data-id="{{$item->id}}" data-name="{{$item->name}}" data-price="{{$item->price}}" data-photo="{{$item->photo}}" data-discount="{{$item->discount}}">Add to Cart</button>

		                    </div>
		                </div>
		                @endif
		                @endforeach
		            </div>
		            <button class="btn btnMain leftLst"><</button>
		            <button class="btn btnMain rightLst">></button>
		        </div>
		    </div>
		</div>

		<!-- Flash Sale Item -->
		<div class="row mt-5">
			<h1> Flash Sale </h1>
		</div>

	    <!-- Flash Sale Item -->
		<div class="row">
			<div class="col-12">
				<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
		            <div class="MultiCarousel-inner">
		            	@foreach($items as $item)
		            		<div class="item">
		                    <div class="pad15">
		                    	<a href="{{route('itemdetailpage',$item->id)}}">
		                    		<img src="{{$item->photo}}" class="img-fluid">
		                    	</a>
		                        <p class="text-truncate">{{$item->name}}</p>
		                        <p class="item-price">
		                        	@if($item->discount!='')
		                        	<strike>{{$item->price}}</strike> 
		                        	<span class="d-block">{{$item->discount}}</span>
		                        	@else
		                        	<span class="d-block">{{$item->price}}</span>
		                        	@endif
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<button class="btn-outline-danger mybtn" data-id="{{$item->id}}" data-name="{{$item->name}}" data-price="{{$item->price}}" data-photo="{{$item->photo}}" data-discount="{{$item->discount}}">Add to Cart</button>

		                    </div>
		                	</div>
		            	@endforeach
		            </div>
		            <button class="btn btnMain leftLst"><</button>
		            <button class="btn btnMain rightLst">></button>
		        </div>
		    </div>
		</div>

		<!-- Random Catgory ~ Item -->
		<div class="row mt-5">
			<h1> Fresh Picks </h1>
		</div>

	    <!-- Random Item -->
		<div class="row">
			<div class="col-12">
				<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
		            <div class="MultiCarousel-inner">
		            	@foreach($flash_items as $flash_item)
		            	@if($flash_item->subcategory_id==13)
		                <div class="item">
		                    <div class="pad15">
		                    	<a href="{{route('itemdetailpage',$item->id)}}">
		                    		<img src="{{$flash_item->photo}}" class="img-fluid">
		                    	</a>
		                        <p class="text-truncate">{{$flash_item->name}}</p>

		                        <p class="item-price">
		                        	@if($flash_item->discount!='')
		                        	<strike>{{$flash_item->price}}</strike> 
		                        	<span class="d-block">{{$flash_item->discount}}</span>
		                        	@else
		                        	<span class="d-block">{{$flash_item->price}}</span>
		                        	@endif
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>
								
								

		                    </div>
		                </div>
		               @endif
		              @endforeach
		           
		                
		            </div>
		            <button class="btn btnMain leftLst">></button>
		            <button class="btn btnMain rightLst">></button>
		        </div>
		    </div>
		</div>

		
		<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

	    <!-- Brand Store -->
	    <div class="row mt-5">
			<h1> Top Brand Stores </h1>
	    </div>

	    <!-- Brand Store Item -->
	   <section class="customer-logos slider mt-5">
	      	@foreach($brands  as $brand)
            <div class="slide">
                <a><img src="{{$brand->photo}}"></a>  
            </div>
            @endforeach
            
	   	</section>

	  <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
	</div>
@endsection
