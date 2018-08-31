@extends('master')
@section('pages')

<!--Product Slider-->
<section class="clean-block clean-catalog dark">
        <div class="container" style="background-color:#ffffff;">
            <div class="block-heading">
                <h2 class="text-info" style="font-size:35px;">SHOP CATEGORY</h2>
                <p></p>
            </div>
            <section id="filtr-gallery" style="background-color:rgb(255,255,255);">
                <div class="container">
					<h1 class="text-center"></h1>
					<!--Category Start-->
					<div class="filtr-controls">
						<span class="active" data-filter="all">all</span>
						@foreach ($categories as $category)
					<span style="font-size:15px" data-filter="{{$category->id}}" class="medium">{{$category->name}}</span>						
						@endforeach
	
    
</div>
<!--Category ENd-->


  
    
    
    {{-- <select id="price1">
            
        <option value="Low">
			<a href="/">
				Low to High
			</a>
		</option>
         <option value="High">
			<a href="/">
				High to Low
			</a>
		 </option>
		</select> --}}
		<div class="filter">
			{{-- <form>
				<label for="price1">Price</label>
				<div class="btn-group">
					<a class="medium" href="{{route('shop.index',['category'=>request()->category,'sort'=>'lowhigh'])}}">Low to High</a><|>
					<a class="medium" href="{{route('shop.index',['category'=>request()->category,'sort'=>'highlow'])}}">High to Low</a>
				</div>
   				 <div style="margin-top:20px;">
       				<label for="price1">$100</label>
    				<input type="range" style="width:20%;height:20px;" min="1" max="100" value="50"  id="myRange">
          			<label for="price1">$200</label>
      
      			<label >Featured</label>
   				<label  id="togglebutton" class="switch">
    				.<input class="switch" type="checkbox">
  					<span class="slider round"></span>
				</label>
				</div>
				
			</form> --}}

</div>
<!--Product Row Start-->
<div class="row filtr-container">
   <!--Product Start-->   
   @forelse ($products as $product)
	@if ($users->where('id',$product->owner_id)->first() == null)
		@continue
	@endif
   
<div class="col-12 col-sm-10 col-md-3 col-lg-3 col-xl-4 offset-sm-0 col-md-12 card filtr-item"  data-category="{{$product->category_id}}">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-xl-12 offset-sm-0 col-md-5">
		<div style="background-color:#ffffff;width:200px;"></div><img src="{{$product->images}}" style="height:242px;" /></div>
        <div class="col-sm-10 col-md-12 col-lg-12 col-xl-12 offset-sm-9 offset-lg-0 offset-xl-0 offset-md-1 col-md-6" style="margin-left:0px;padding-left:21px;">
			<h2 class="product-text-color">{{$product->name}}</h2><small style="font-style:oblique;">
				<a href="">
					{{$users->where('id',$product->owner_id)->first()->username}}
				</a>
			</small>
            
            <div class="start-icon"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                <span style="color:#000;">{{$product->presentPrice()}}<small>USD</small></span>
            </div><small class="product-review">3 - 272 reviews</small>
            <div>
                <h3 class="product-description">{{str_limit($product->description,40)}}</h3>
				{{-- {{ route('shop.show',$product->slug)}} --}}
			{{-- <a href="" class="btn btn-primary pull-right"> --}}
				<form method="GET" action="{{ route('shop.show',$product->slug)}}">
				<button type="submit" class="btn btn-primary pull-right">
					 <i class="fa fa-shopping-cart" style="color:#fff;">
						Get Now
					</i>
				</button>
				</form>

				{{-- &nbsp;Get Now</a> --}}
			</div>
        </div>
    </div>
</div>
@empty
	   <div class="large">No Items</div>
@endforelse<!--Product End-->
<!--DATA CATEGORY IS FOR THE PRODUCT CATEGORY A TAG-->
	
</div></div>
			</section>
			<!--Product Section End-->
            <div class="content"></div>
        </div>
	</section>
	

	<!--Pagination -->
    {{-- <div style="background-color:#ffffff;">
        <div class="container">
            <nav class="align-content-end">
                <ul class="pagination center-block">
                    <li class="page-item"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link">4</a></li>
                    <li class="page-item"><a class="page-link">5</a></li>
                    <li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                </ul>
            </nav>
		</div> --}}
		
			{{$products->links()}}



        <div class="container">
            <div class="row">
                <div class="col"><div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Trending <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						@foreach ($trendings as $trending)
						<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="{{$trending->images}}" class="img-responsive img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>{{$trending->name}}</h4>
									<p class="item-price"><strike>{{$trending->presentPrice()}}</strike> <span>{{discountPrice($trending->price,10)}}</span></p>
										
										<a href="#" class="btn btn-primary">Add to Cart</a>
									</div>						
								</div>
							</div>
						@endforeach
						
					</div>
				</div>
				{{-- <div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tutorialrepublic.com/examples/images/products/play-station.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Sony Play Station</h4>
									<p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
								
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tutorialrepublic.com/examples/images/products/macbook-pro.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Macbook Pro</h4>
									<p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
									
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tutorialrepublic.com/examples/images/products/speaker.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Bose Speaker</h4>
									<p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
								
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tutorialrepublic.com/examples/images/products/galaxy.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Samsung Galaxy S8</h4>
									<p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
									
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>						
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tutorialrepublic.com/examples/images/products/iphone.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Apple iPhone</h4>
									<p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
									
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tutorialrepublic.com/examples/images/products/canon.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Canon DSLR</h4>
									<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
									
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tutorialrepublic.com/examples/images/products/pixel.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Google Pixel</h4>
									<p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
									
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>	
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tutorialrepublic.com/examples/images/products/watch.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Apple Watch</h4>
									<p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
									
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div> --}}
			</div>
              
              
			<!-- Carousel controls -->
			<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div></div>
            </div>
        </div>
    </div>

@endsection()
