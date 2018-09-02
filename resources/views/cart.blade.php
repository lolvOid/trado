@extends('master')
@section('pages')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 col-md-8 center-block">
                <main class="page payment-page">
                    <section class="clean-block payment-form dark">
                        <div class="container" style="  background-color:#ffffff;">
                            <div class="block-heading">
                                <h2 class="text-info" style="  font-size:44px;">Shopping Cart</h2>
                                <p>Here is the checkout for your product.Enjoy Trading with our website</p>
                            </div>
                        </div>
                        @if(session()->has('success_message'))
                        <div style="width:100%;"class=" alert alert-success">
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
                        
                        <div class="container">
                            <!--Product Row-->
                           
                                
                            
                            <div class="row">
                                <!--Product Column-->
                                @foreach (Cart::content() as $item)
                                <div class="col-12 col-md-12 d-block  center-block" style="  align:center; width:1215px;">
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="{{$item->model->images}}"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a href="#" class="product-name">{{$item->model->name}}</a>
                                            <div class="product-specs">
                                                {!! strip_tags(str_limit($item->model->description,100)) !!}
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><span>{{$item->model->presentPrice()}}</span></div>
                                        <form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                            <div class="col-6 col-md-2 price"><button class="btn btn-primary" type="submit" style="background-color:#ff3b3b;"><i class="fa fa-trash"></i></button></div>
                                        </form>
                                    </div>
                                </div>                                
                            </div>
                            @endforeach                        
                        </div>






<!--CHECKOUT COLUMN EVERYONE-->
                                <div class="col-12 col-md-12 d-block  center-block" style="  align:center; width:1215px;">
                                    <form style="  padding:0px;
                                                                    margin:0px;
                                                                    background-color:#ffffff;
                                                                    border-top:4px solid rgba(72,123,255,0.1);
                                                                    margin-top:10px;
                                                                    padding-top:19px;
                                                                    font-weight:600;
                                                                    line-height:1;undefined:undefined;  ">
                                        <div class="products">
                                            <div class="total" style="  background-color:#ffffff;"><span style="  font-size:22px;">Total</span>
<span class="float-right price" style="  font-size:22px;">{{presentPrice(Cart::total())}}</span></div>
                                        </div>
                                        <div class="card-details">
                                            <h3 class="title">Credit Card Details</h3>
                                            <div class="form-row">
                                                <div class="col-sm-12">
                                                    <div class="form-row">
                                                        <div class="col"><a href="{{route('checkout.index')}}" class="btn btn-primary btn-block" type="button" style="  width:180px;"><i class="fa fa-dollar" style="  color:rgb(255,255,255);"></i>Pay With Cash</a>
                                                            <i class="fa fa-dollar" style="  color:rgb(255,255,255);"></i>
                                                        </div>
                                                        <div class="col">
                                                            <a href="{{route('wallet.index')}}" class="btn btn-primary btn-block" type="button" style="  float:right;width:180px;"><i class="fa fa-bitcoin " style="  color:rgb(255,255,255);"></i>Pay With Bitcoin</button></div>
                                                    </div>
                                                   <!--for SPACING --> <div class="form-group"></div>
                                                   <!--for SPACING --> <div class="form-group"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                     
                    </section>
                </main>
            </div>
        </div>
    </div>

  @endsection()
