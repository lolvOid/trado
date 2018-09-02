@extends('master')

@section('pages')

@inject('User', 'App\User')

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
      <img src="{{$user->avatar}}">
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
        <img src="{{getCommentedUserAvatar($comment)}}">
      </div>

      <!-- Comment Box -->
      <div class="comment-box">
        <div class="comment-text">{{$comment->comment}}</div>
        <div class="comment-footer">
          <div class="comment-info">
            <span class="comment-author">
            <a href="/profile/{{$comment->cmt_user_id}}">{{getCommentedUserName($comment)}}</a>
            </span>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
</div>
</div>
        </div>
    </div>

@endsection()
