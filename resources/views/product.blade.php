@extends('master')

@section('pages')

<!--Product Details-->
<div class="container " style="background-color:#ffffff;">
	   

<div class="row ">
	<!--Product Image-->
            <div class="col-md-6 border border-light ">
			
                <div class="row ">
				<div  class="col-md-12 col-12  col-sm-12 mx-auto center">
				<img style="width:500px;height:500px;"src="{{'/storage/'.$product->image}}" class="img-responsive img-fluid" />
				</div>

				</div>
			   <!--Product Image end-->
				
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6"></div>
                    <div class="col-6 col-sm-6 col-md-6"></div>
                </div>
			</div>
			<!--Product Description-->
            <div class="col-md-6 border border-light ">
				<h1 style="color:#373737;font-size:37px;">{{$product->name}}</h1>
			<br>
			<br>
			<br>
                <p style="font-size:16px;">	{!!$product->description!!}</p><h2 class="text-center text" style="color:#4d5fff;"><strong>{{$product->presentPrice()}}</strong></h2><button class="button" type="button" data-hover="SURE!"><span>Add to Card</span></button></div>
        </div><!--Product Description End-->
	</div>
	


	<!--Related Products-->
    <div class="container" style="background-color:#ffffff;">
        <div class="row">
            <div class="col">
				<div class="row">
					<div class="col-md-12 border border-light ">
			<h2>Related <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						
						<!--Product Item-->@foreach ($related as $item)	
						<div class="col-sm-3">
							
							<div class="thumb-wrapper">
									
								<div class="img-box">
									<img src="{{'/storage/'.$item->image}}" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>{{$item->name}}</h4>
									<p class="item-price"><strike>{{$item->presentPrice()}}</strike> <span>{{discountPrice($item->price,10)}}</span></p>
									
									<a href="" class="btn btn-primary"><i class="fa fa-cart-plus" style="font-size:20px"></i></a>
								</div>					
								
							</div>
							@endforeach	
						
						</div>
						
						<!--Product Item end-->
						
					</div>
				</div>
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
</div>
        </div>
    </div>

@endsection()