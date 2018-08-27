@extends('master')
@section('pages')
    <section class="clean-block clean-catalog dark">
        <div class="container" style="background-color:#ffffff;">
            <div class="block-heading">
					@if (session()->has('success_message'))
					<div class="alert alert-success">
						{{session()->get('success_message')}}
					</div>
					@endif
				
					@if (count($errors)>0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
					@endif
				<h2 class="text-info" style="font-size:35px;">Search Results</h2>
				
				
				<p class="search-results-count">{{$products->count()}} result(s) for "{{request()->input("query")}}"</p>
				

				<table class="table table-hover">
						<thead>
				
							<tr>
								<th>Item</th>
								<th>Details</th>
								<th>Description</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody>
				
							@foreach ($products as $product)
							<tr>
								<th><a href="{{route('shop.show',$product->slug)}}">{{ $product->name }}</a></th>
								<td>{{ $product->details }}</td>
								<td>{{ str_limit($product->description,80) }}</td>
								<td>{{ $product->presentPrice()}}</td>					
							</tr>	
							@endforeach
							
						</tbody>
				
				
						</table>
                
            </div>
            
	</section>
	
	

@endsection()