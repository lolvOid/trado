@extends('layouts.app')


@section('content')
    


    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4" style="padding-bottom:10px">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item active">Wallet Data</li>
                    <li class="list-group-item">
                        <label for="guid">Wallet ID:</label>
                        <span name="guid">{{$guid}}</span>
                    </li>
                    <li class="list-group-item">
                            <label for="address">BTC Address:</label>
                            <span name="address">{{$addressList[0]['address']}}</span>
                        </li> 
                    <li class="list-group-item">
                            <label for="label">Balance:</label>
                            <span name="label">{{$mybalance}}</span>
                    </li>
                </ul>        
            </div>
        </div> 
        
    
                <div class="row">
                    <div class="col-md-4 offset-4">
                        <form action="{{route('wallet.payment')}}" method="post">

                            {{ csrf_field() }}
                                <div class="form-group">
                                    <h2>Make Payment</h2>
                                </div>
                                <div class="form-group">
                                <input type="text" name="address_a" class="form-control" placeholder="Enter Your Address" required>
                                </div>
                                <div class="form-group">
                                        <input type="text" name="address_b" class="form-control" placeholder="Enter Payment Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="amount" id="" class="form-control" placeholder="Enter Amount" step="0.0001" required>
                                </div>
                                <div class="form-group">
                                        <input type="password" name="password" id="" class="form-control" placeholder="Enter Password" required> 
                                    </div>
                                <div class="form-group">
                                <label class="col-form-label">USD:</label><span>{{presentPrice(Cart::total())}} / {{getUSDToBtc($usd)}}</span><br/>
                                    <label class="col-form-label">Transtion Fee:</label><span>BTC:0.0001</span>
                                
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </form>
                        </div>
                    </div>

        
    </div>    


@endsection
   
