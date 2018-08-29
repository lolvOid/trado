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
	<span data-filter="1">category 1</span>
	<span data-filter="2">category 2</span>
    <span data-filter="3">category 3</span>
    <span data-filter="4">category 4</span>
<span data-filter="5">category 5</span>
    <span data-filter="6">category 6</span>
<span data-filter="7">category 7</span>
    <span data-filter="8">category 8</span>
    <span data-filter="9">category 9</span>
    <span data-filter="10">category 10</span>
    
</div>
<!--Category ENd-->

<div class="filter">
    <form>
        <input placeholder="Brand Name,Specification,etc "><br>
       
    <label for="type">Product Type</label>
    <select id="type">
             <option value="Laptop">Laptop</option>
             
        </select>
  
    <label for="price1">Price</label>
    
    <select id="price1">
            
        <option value="High">High</option>
         <option value="Low">Low</option>
        </select>
    
    
    <div style="margin-top:20px;">
        <label >Featured</label>
   <label  id="togglebutton" class="switch">
    .<input class="switch" type="checkbox">
  <span class="slider round"></span>
</label>
    </div>
    
    </form>

</div>
<!--Product Row Start-->
<div class="row filtr-container">
   <!--Product Start-->
<div class="col-12 col-sm-10 col-md-3 col-lg-3 col-xl-4 offset-sm-0 col-md-12 card filtr-item"  data-category="3" >
    <div class="row">
        <div class="col-sm-12 col-md-12 col-xl-12 offset-sm-0 col-md-5">
            <div style="background-color:#ffffff;width:200px;"></div><img src="img/iPhoneX.png" style="height:242px;" /></div>
        <div class="col-sm-10 col-md-12 col-lg-12 col-xl-12 offset-sm-9 offset-lg-0 offset-xl-0 offset-md-1 col-md-6" style="margin-left:0px;padding-left:21px;">
            <h1 class="product-text-color">CitriWist</h1><small style="font-style:oblique;">Citrus Reamer</small>
            <h5>In Stock</h5>
            <div class="start-icon"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                <h6 class="product-price">$ 9.99<small>USD</small></h6>
            </div><small class="product-review">3 - 272 reviews</small>
            <div>
                <h3 class="product-description">CitriTwist is no ordinary reamer. It extracts every last drop of citrus juice without making a big ol&#39; mess. How, you ask? Its spiraled form allows the juice to drip down the inside walls, not your hands. Genius!</h3>
        
            <button class="btn btn-primary pull-right" type="button"><i class="fa fa-shopping-cart" style="color:#fff;"></i>&nbsp;Buy Now</button></div>
        </div>
    </div>
</div><!--Product End-->
<!--DATA CATEGORY IS FOR THE PRODUCT CATEGORY A TAG-->
	
</div></div>
			</section>
			<!--Product Section End-->
            <div class="content"></div>
        </div>
	</section>
	

	<!--Pagination -->
    <div style="background-color:#ffffff;">
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
		</div>
		



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
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tutorialrepublic.com/examples/images/products/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Apple iPad</h4>
									<p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
									
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tutorialrepublic.com/examples/images/products/headphone.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Sony Headphone</h4>
									<p class="item-price"><strike>$25.00</strike> <span>$23.99</span></p>
									
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tutorialrepublic.com/examples/images/products/macbook-air.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Macbook Air</h4>
									<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
									
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tutorialrepublic.com/examples/images/products/nikon.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Nikon DSLR</h4>
									<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
									
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
</div></div>
            </div>
        </div>
    </div>

@endsection()