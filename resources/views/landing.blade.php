@extends('master')



    @section('pages')
     <div style="background-image:url('img/cover.png');height:800px;background-position:center;background-size:cover;background-repeat:no-repeat;">
    <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(30,41,99,0.53);">
        <div class="d-flex align-items-center order-12" style="height:200px;">
            <div class="container">
                	<div class="caption v-middle text-center">
					<h1 class="cd-headline clip">
                       <span  style="color:#e5e5e5;" class="blc">MAKE YOUR DREAM|</span>
                      
			            <span  style="color:#e5e5e5;" class="cd-words-wrapper">
                          <b   style="color:#e5e5e5;"class="is-visible">TRUE</b>
                          <b   style="color:#e5e5e5;">GOALS</b>
			              <b   style="color:#e5e5e5;">WITH TRADO</b>
                        </span>

	          		</h1>
				</div>
            </div>
        </div>
    </div>
</div>
    <div style="text-align:center;">
        <h2 class="divider-style"><span>Trending</span></h2>
    </div>
    <div class="container">
        <div class="row">

            @foreach ($products as $product)
                
            
            <div class="col-md-4">
                <div class="product-inner">
                    <div data-lightbox="photos" class="product-wrap">
                        <img src="{{$product->images}}">
                            <div class="actions">
                                <a href="" class="add-to-cart"></a>
                                <a href="{{route('shop.show',$product->slug)}}" class="quickview"></a>
                                
                            </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="{{route('shop.show',$product->slug)}}">{{$product->name}}</a></h3>
                        <span class="price">{{$product->presentPrice()}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
        
        <div class="Push-20"></div>
        <div class="Push-20"></div>
        <!--Product-row-->
{{--         <div class="row">
            <!--Product-COlumn-->        
                <div class="col-md-4">
                    <div class="product-inner">
                        <div data-lightbox="photos" class="product-wrap">
                            <img src="assets/img/iPhoneX.png">
                            <div class="actions">
                                <a href="" class="add-to-cart"></a>
                                <a href="" class="quickview"></a>
                                <a href="" class="add-to-cart"></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="">iPhoneX</a></h3>
                            <span class="price">$500</span>
                        </div>
                    </div>
                </div><!--Product-COlumn-end-->
            </div>
        </div><!--Product-Row-end--> --}}


    <div class="features-clean" style="background-color:rgb(255,255,255);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">What does our website do?</h2>
                <p class="text-center"></p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-mobile-phone icon"></i>
                    <h3 class="name">Perfect Delivery</h3>
                    <p class="description">Our website can be accessed in all phone.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-users icon"></i>
                    <h3 class="name">P2P Business</h3>
                    <p class="description">Our website is based on peer to peer (P2P) business so users are able to use the website carefu</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-cloud icon"></i>
                    <h3 class="name">Perfect Security</h3>
                    <p class="description">The website cannot be hacked due to decentralized database&nbsp;</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-bitcoin icon"></i>
                    <h3 class="name">CryptoCurrency</h3>
                    <p class="description">the cryptocurrency allows the user to trade safetly.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-truck icon"></i>
                    <h3 class="name">Fast Delivery</h3>
                    <p class="description"></p>
                    <p class="description">The deliverymen are the fast enough to trade our products in minutes.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-external-link icon"></i>
                    <h3 class="name">Easily-Access</h3>
                    <p class="description">Our website can be accessed in all over the world.</p>
                </div>
            </div>
        </div>
    </div> <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Subscribe for a <span>25% Discount</span></h2>
                        <p>Join our newsletter for more info.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    @endsection()
    
