@extends('master')

@section('pages')



  <div class="Push-20"></div>
  <form action="{{route('cart.store',$product)}}" method="POST">
		{{ csrf_field() }}
		<input type="hidden" value="{{$product->id}}" name="id" id="id">
		<input type="hidden" value="{{$product->name}}" name="name" id="name">
		<input type="hidden" value="{{$product->price}}" name="price" id="price">
  <div class="Push-20"></div><div class="container" style=" border-color:#373737;background-color:#ffffff;">
	
	<div class="row">
        <div class="col-8 col-sm-8 col-xs-12 col-md-6">
            <div class="row"> <div class="col-12 col-xs-12 col-sm-12 "><img src="{{$product->images}}" class="img-fluid   mx-auto d-block" alt="Responsive image"></div></div>
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
			<h2 class="text-center text" style="  color:#4d5fff;">
				<button class=" btn-sm button" type="submit" data-hover="SURE!"><span>Buy It?</span></button>
				<strong>{!!$product->presentPrice()!!}</strong>
			</h2>
		
	</div>
</form>
{{-- @foreach ($comments as $comment)
<p>{{User::where('id',$comment->user_id)->first()->name}}</p><br/>
<p>{{$comment->comment}}</p><br>
@endforeach




<form method="POST" action="{{route('comment.store')}}" >
	@foreach ($comments as $comment)
	{{-- <p>{{User::where('id',$comment->user_id)->first()->name}}</p><br/>
	<p>{{$comment->comment}}</p><br>
	@endforeach
	{{ csrf_field() }}
	<div class="form-group">
		<label for="comment">Comment:</label>
		<input type="hidden" name="product_id" value="{{$product->id}}">
		<input type="hidden" name="owner_id" value="{{$owner->id}}">
		<input type="text" class="form-control" rows="5" name="comment" id="comment">
	</div>
</form> --}}
</div>
</div>


<!--Comment Section-->


<div class="col-md-12  col-sm-12">
<div class="comments-app">
  <h1>comments</h1>
  
  <!-- From -->
  <div class="comment-form">
    <!-- Comment Avatar -->
    <div class="comment-avatar">
      <img src="http://lorempixel.com/200/200/people">
    </div>

    <form  method="POST" action="{{route('comment.store')}}" class="form" name="form" >
      <div class="form-row">
          {{ csrf_field() }}
          <input type="hidden" name="product_id" value="{{$product->id}}">
          <input type="hidden" name="owner_id" value="{{$owner->id}}">
        <input  type="text" class="input" name="comment" placeholder="Add comment..." required>
      </div>

      
      <div class="form-row">
        <input type="submit" value="Add Comment">
      </div>
    </form>
  </div>

  <!-- Comments List -->
  <div class="comments">
    <!-- Comment -->
    
    @foreach ($comments as $comment)
    <!-- Comment - Dummy -->
    <div class="comment">
      <!-- Comment Avatar -->
      <div class="comment-avatar">
        <img src="http://gravatar.com/avatar/412c0b0ec99008245d902e6ed0b264ee?s=80">
      </div>

      <!-- Comment Box -->
      <div class="comment-box">
        <div class="comment-text">{{$comment->comment}}</div>
        <div class="comment-footer">
          <div class="comment-info">
            <span class="comment-author">
              <a href="">Sexar</a>
            </span>

          </div>

          <div class="comment-actions">
            <a href="#">Reply</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
       {{-- <div class="comment">
      <!-- Comment Avatar -->
      <div class="comment-avatar">
        <img src="http://gravatar.com/avatar/412c0b0ec99008245d902e6ed0b264ee?s=80">
      </div>

      <!-- Comment Box -->
      <div class="comment-box">
        <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum.</div>
        <div class="comment-footer">
          <div class="comment-info">
            <span class="comment-author">
              <a href="">Sexar</a>
            </span>

          </div>

          <div class="comment-actions">
            <a href="#">Reply</a>
          </div>
        </div>
      </div>
    </div>
      
      
    <!-- Comment - Dummy -->
    <div class="comment">
      <!-- Comment Avatar -->
      <div class="comment-avatar">
        <img src="http://lorempixel.com/200/200/people">
      </div>

      <!-- Comment Box -->
      <div class="comment-box">
        <div class="comment-text">Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam reprehenderit quasi sapiente modi tempora at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?</div>
        <div class="comment-footer">
          <div class="comment-info">
            <span class="comment-author">
              <a href="mailto:ximme13@somedomain.io">Ximme</a>
            </span>
         
          </div>

          <div class="comment-actions">
            <a href="#">Reply</a>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
</div>
</div>
<!--Comment Section End-->

	<!--Related Products-->
    {{-- <div class="container" style="background-color:#ffffff;">
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
									<img src="{{$item->images}}" class="img-responsive img-fluid" alt="">
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
	</div> --}}
</div>
        </div>
    </div>

@endsection()
