@extends('master')



@section('pages')


 <div style="text-align:center;">
        <h2 class="divider-style"><span style="font-size:35px;">SEarch LIST</span></h2>
        <p class="search-results-count">{{$products->count()}} result(s) for {{request()->input("query")}}</p>
    </div>
    <div class="container"></div><div class="container">

            

<table id="example" class="table  table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Description</th>
                
                <th>Price</th>
               
            </tr>
        </thead>
        <tbody>
                @foreach ($products as $product)
            <tr>
                <td><a href="{{route('shop.show',$product->slug)}}">
                    <img src="{{$product->images}}"  class="center-block img-fluid">
                    </a>
                </td>
                <td>
                    <a href="{{route('shop.show',$product->slug)}}">
                        {{$product->name}}
                    </a> 
                </td>
                <td class="description">{{$product->description}}</td>
                <td class="center-block">{{$product->presentprice()}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table></div>  
@endsection()