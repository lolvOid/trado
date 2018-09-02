@extends('master')
@section('pages')

<!--Product Slider-->
<script src="js/jquery.min.js"></script>
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
							<a href="{{ route('shop.index') }}">
								<span 
								@if ($category_id == 0)
									class="active"
								@endif  
								data-filter="all">all
							</span></a>
						@foreach ($categories as $category)
						<a href="{{ '/shop/category/'.$category->id }}"><span style="font-size:15px" data-filter="{{$category->id}}" 
							@if ($category_id == $category->id)
							class="active"
							@endif
							 >{{$category->name}}</span></a>						
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
			<h2 class="product-text-color">{{$product->name}}</h2>
			@if ($product->old)
			<span style="color:#fff;background-color:#ff4e44">
				old!!
			</span>
				
			@else
			<span style="color:#fff;background-color:#3fc8ff">
					<i>new!!</i>
				</span>
				
			@endif 
			
			
			{{-- @endif --}}
			
			<small style="font-style:oblique;">
				<a href="/profile/{{$product->owner_id}}">
					{{$users->where('id',$product->owner_id)->first()->username}}
				</a>
			</small>
            
            <div class="start-icon"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                <span style="color:#000;">{{$product->presentPrice()}}<small>USD</small></span>
            </div><small class="product-review">3 - 272 reviews</small>
            <div>
				<div class="product-description{{$product->id}}"> {!! strip_tags(str_limit($product->description, 100)) !!}</div>
				
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
<span data-filter=1></span>
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
			@if ($category_id == 0)
				{{$products->links()}}	
			@endif
			
			
       
    </div>

@endsection()
