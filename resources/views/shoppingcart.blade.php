@extends('master')
@section('pages')
<main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Shopping Cart</h2>
                    <p>Here is the cash list of your transaction, Please verify your amount.</p>

                    



                </div>
                <div class="content">
                        @if(session()->has('success_message'))
                        <div class="alert alert-success">
                            {{session()->get('success_message')}}
                        </div>
                        @endif
    
                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $err)
                                    <li>{{$err}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                    <div class="row no-gutters">
                        @if (Cart::count()>0)
                            <h2>{{Cart::count()}} items in Shopping Cart</h2>
                         
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                    
                               

                                @foreach (Cart::content() as $item)
                                    
                               
                                <div class="product">
                                    <div class="row  align-items-center">
                                        <div style="float:none;margin:0 auto;"class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="{{$item->model->images}}"></div>
                                        </div>
                                        <div class="col-md-4 center-block product-info"><a href="{{route('shop.show',$item->model->slug)}}" class="product-name">{{$item->model->name}}</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">{!! strip_tags(str_limit($product->description, 100)) !!}</span></div>
                                                {{-- <div><span>RAM:&nbsp;</span><span class="value">4GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">32GB</span></div> --}}
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><span>{{$item->model->presentPrice()}}</span></div>
                                        <form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
                                                {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                        
                                        <div class="col-6 col-md-2 price"><button class="btn btn-default" type="submit"><i class="fa fa-trash-o"></i></button></div>
                                    </form>
                                    </div> 
                                </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 md-block" style="background-color:#fdfdfe;">
                            <div class="summary">   
                                <h3 class="text-center" style="color:rgb(118,115,115);font-size:35px;">Summary</h3>
                                <h4><span class="d-inline-block text" style="color:#a6a6a6;">Subtotal</span><span class="float-right price" style="color:#a6a6a6;">{{presentPrice(Cart::subtotal())}}</span></h4>
                                <h4><span class="text" style="color:#a6a6a6;">Discount</span><span class="float-right price" style="color:#a6a6a6;"></span></h4>
                                <h4><span class="text" style="color:#a6a6a6;">TAX</span><span class="float-right price" style="color:#a6a6a6;"></span>{{calTax(Cart::subtotal(), Cart::tax())}}</h4>
                                <h4><span class="text" style="color:#a6a6a6;">Total</span><span class="float-right price" style="color:#a6a6a6;">{{presentPrice(Cart::total())}}</span></h4>
                                <div class="row">
                                  
                                <div class="col-md-6 center-block"><a href="{{route('checkout.index')}}" class="btn btn-primary btn-block " type="button" style="width:164px;background-color:#6699ff;color:#fff;border-color:white;">
                                       Checkout  <i class="fa fa-dollar" style="color:rgb(255,255,255);"></i></a></div>
                                
                                </div> 
                                <div class="col-md-6 center-block"><a href="{{route('wallet.index')}}" class="btn btn-primary btn-block " type="button" style="width:164px;background-color:#6699ff;color:#fff;border-color:white;">
                                         Pay with  <i class="fa fa-bitcoin" style="color:rgb(255,255,255);"></i></a></div>
                                
                                </div>
                                <div class="row">
                                    <div class="col"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <h3>No itmes in your cart</h3>
                    @endif                       
                </div>
            </div>
        </section>
    </main>
@endsection()