@extends('master')

@section('pages')



  <div class="Push-20"></div>
    <div class="Push-20"></div><div class="container" style=" border-color:#373737;background-color:#ffffff;">
    <div class="row">
        <div class="col-8 col-sm-8 col-xs-12 col-md-6">
            <div class="row"> <div class="col-12 col-xs-12 col-sm-12 "><img src="{{'/storage/'.$product->image}}" class="img-fluid   mx-auto d-block" alt="Responsive image"></div></div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6"></div>
                <div class="col-6 col-sm-6 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6"></div>
                <div class="col-6 col-sm-6 col-md-6"></div>
            </div>
        </div>
        <div class="col-md-5">
            <h1 style="color:#373737;font-size:37px;">{{$product->name}}</h1>
            <p style="font-size:18px;">{!!$product->description!!}</p>
            <h2 class="text-center text" style="  color:#4d5fff;
"><strong>$ 1000</strong></h2><button class=" btn-sm button" type="button" data-hover="SURE!"><span>Buy It?</span></button>
        <button class=" btn-sm button" type="button" data-hover="SURE!"><span>Buy It?</span></button></div>
    </div>
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
		
		</div>
		</div>
	</div>
</div>
        </div>
    </div>

@endsection()