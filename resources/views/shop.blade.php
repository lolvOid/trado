@extends('master')
@section('pages')
    <section class="clean-block clean-catalog dark">
        <div class="container " style="background-color:#ffffff;">
            <div class="block-heading">
                <h2 class="text-info" style="font-size:35px;">SHOP CATEGORY</h2>
                <p></p>
            </div>
            <div class="content">

				<div class="row " style="background-color:#ffffff;">
				<div class="col-md-3 navbar-expand-md border border-light " style="background-color:#ffffff;">
				<div class=" col-md-3">
     <div class="d-none    d-md-block">
        <div class=" filters">
            <h4>Category</h4>
            <ul class="nav navbar-nav"><li class="nav-item" role="presentation"><a class="nav-link " href="shop">All</a></li>
				@foreach ($categories as $category)

				
					<li class="nav-item " role="presentation"><a class="nav-link " href="{{route('shop.index',['category'=>$category->slug	])}}">{{$category->name}}</a></li>
				@endforeach
                {{-- <li class="nav-item" role="presentation"><a class="nav-link " href="index.html">Phone</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="shop.html">Laptop</a></li>
				<li class="nav-item" role="presentation"><a class="nav-link" href="signup.html">Desktop</a></li> --}}
				
            </ul>
        </div>
    </div>
    <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="filters" role="button" href="#filters">Categories<i class="icon-arrow-down filter-caret"></i></a>
        <div class="collapse" id="filters">
            <ul class="nav navbar-nav">
				@foreach ($categories as $category)
					<li class="nav-item" role="presentation"><a class="nav-link " href="{{route('shop.index',['category'=>$category->slug	])}}">{{$category->name}}</a></li>
				@endforeach
                {{-- <li class="nav-item" role="presentation"><a class="nav-link " href="index.html">Phone</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="shop.html">Laptop</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="signup.html">Desktop</a></li> --}}
            </ul>
        </div>
    </div>
</div>
</div>

					<div class="col border border-light" style="background-color:#ffffff;">
					
					

					<div class="container">
						<!--Product Row-->

		
        <div class="row">
			<!--Product Column-->
			@forelse ($products as $product)
       		<div class="col-sm-4">
                <div  class="card">
                    <img  style="width:100%;height:170px;"class="card-img-top img-fluid	" src="{{'storage/'.$product->image}}">
                    	<div class="card-block">
                        <h4 class="card-title">{{$product->name}}</h4>
                        <div class="meta">
                            <a href="#">Seller-</a>
                        </div>	
                        <div class="card-text">
                           <p>{{$product->presentPrice()}}</p>
                        </div>
                    </div>
                    <div class="card-footer">
					<a href="{{route('shop.show',$product->slug)}}"><button style="background-color:#5CABFF; border-color:#93c7ff;"class="btn btn-secondary float-right btn-sm">show</button>
					</a>
                    </div>
                </div>
			</div><!--PRoduct COlumn end-->
			@empty
			<div style="font-size:2em;padding-left:23.5%">No items found</div>
		
        </div><!--Product Row end-->
		@endforelse	
               
                        <nav class="align-content-end">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item"><a class="page-link">1</a></li>
                                <li class="page-item"><a class="page-link">2</a></li>
                                <li class="page-item"><a class="page-link">3</a></li>
                                <li class="page-item"><a class="page-link">4</a></li>
                                <li class="page-item"><a class="page-link">5</a></li>
                                <li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div style="background-color:#ffffff;">
        <div class="container">
            <div class="row">
                <div class="col">
					<div class="container">

				
					<div class="row ">
						<div class="col-md-12 border border-light ">
							<h2>Trending <b>Products</b></h2>
							<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
							<!-- Carousel indicators -->
						<!--	<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								
							</ol> -->  
							<!-- Wrapper for carousel items -->
							<div class="carousel-inner">
									<div class="item carousel-item active">
										<div class="row">
											
												
										@foreach ($products as $item)
											<!--Product Item-->
											<div class="col-md-4">
												<div class="thumb-wrapper">
													<div class="img-box">
														<img src="{{'/storage/'.$item->image}}" class="img-responsive img-fluid" alt="">
													</div>
													<div class="thumb-content">
														<h4>{{$item->name}}</h4>
														<p class="item-price"><strike>{{$item->presentPrice()}}</strike> <span>{{discountPrice($item->price,10)}}</span></p>
														
														<a href="{{route('shop.show',$product->slug)}}" class="btn btn-primary"><i class="fa fa-cart-plus" style="font-size:20px"></i></a>
													</div>						
													</div>
											</div>
										
											<!--Product Item end-->
											@endforeach
										</div>	
									</div>
								</div>
							
							
							<!-- Carousel controls -->
									<!--<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
										<i class="fa fa-angle-left"></i>
									</a>
									<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
										<i class="fa fa-angle-right"></i>
								</a>-->
							</div>
						</div>
	</div>
</div></div>
            </div>
        </div>
    </div>

@endsection()