@extends('master')

@section('pages')



   <div class="card">
        <div class="card-body">
            <div class="media">
                <div><img class="rounded-circle mr-3" src="{{$owner->avatar}}" style="height:104px;width:106px;"></div>
                <div class="media-body">
                    <ul class="list-unstyled fa-ul">
                    <li><i class="fa fa-user fa-li" style="font-size:19px;"></i><a style="font-size:19px;">{{$owner->username}}</a>
        
                    <li><button class="btn btn-primary" type="button" style="background-color:rgb(255,255,255);color:rgb(88,133,251);"><i class="fa fa-plus" style="color:rgb(122,151,255);"></i>&nbsp;Add Friend</button></li>
                    </ul>
                </div>
            </div>
            <div></div>
            <hr>
            <p><i class="fa fa-location-arrow fa-fw"></i> Yangon<br>
            <span class="small"><i class="fa fa-calendar fa-fw"></i> Joined Tradoexchange on {{ getTimeToDate($owner->created_at)  }}</span></p><div class="panel panel-default">
             <ul class="nav nav-tabs panel-heading">
        <li class="nav-item"><a role="tab" data-toggle="tab" href="#tab-1" class="nav-link show">Products Uploaded</a></li>
        {{-- <li class="nav-item"><a role="tab" data-toggle="tab" href="#tab-2" class="nav-link active">Recent Log</a></li>
        <li class="nav-item"><a role="tab" data-toggle="tab" href="#tab-3" class="nav-link">Related Friends</a></li> --}}
    </ul>
    <div class="tab-content panel-body">
        <div role="tabpanel" class="tab-pane" id="tab-1">
            <div class="row justify-content-center align-items-center" style="margin-left:0px;margin-right:0px;">
                @foreach ($products as $product)
                    
                
                <div class="col-9 col-sm-10 col-md-3 col-lg-3 col-xl-3 offset-sm-0 col-md-4 card">
                    <div class="row">
                        <div class="col-sm-10 col-md-12 col-xl-12 offset-sm-0 col-md-5">
                            <div style="background-color:#ffffff;width:200px;"></div><img src="{{$product->images}}" style="height:242px;" /></div>
                        <div class="col-sm-10 col-md-12 col-lg-12 col-xl-12 offset-sm-9 offset-lg-0 offset-xl-0 offset-md-1 col-md-6" style="margin-left:0px;padding-left:21px;">
                            <h1 class="product-text-color">{{$product->name}}</h1><small style="font-style:oblique;">{{$owner->username}}<i class="fa fa-user"></i></small>
                                <small>{{$product->presentprice()}} USD</small>
                            
                            
                                <h3 class="product-description"> {!! strip_tags(str_limit($product->description, 100)) !!}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- <div role="tabpanel" class="tab-pane active" id="tab-2">
            <ul class="list-group">
                 <li class="list-group-item">
                    <div class="media">
                        <div></div>
                        <div class="media-body">
                            <div class="media" style="overflow:visible;">
                                <div><img src="img/mkkpp.jpg" class="mr-3" style="width:50px;height:50px;" /></div>
                                <div class="media-body" style="overflow:visible;">
                                    <div class="row">
                                        <div class="col-10">
                                            <div>
                                                <p><a href="#">Myat Kaung Khant</a>bought a product from this user.<br /></p><small class="text-muted">August 30, 2018 @ 9:10am</small></div>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="media">
                        <div></div>
                        <div class="media-body">
                            <div class="media" style="overflow:visible;">
                                <div><img src="img/lhpp.jpg" class="mr-3" style="width:50px;height:50px;" /></div>
                                <div class="media-body" style="overflow:visible;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><a href="#">Lin Htet Moe</a> traded with this user a week ago.(added by<a href="#">Satt Paing Phyoe</a>)<br /><small class="text-muted">August 24, 2018 @ 9:17am</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="media">
                        <div></div>
                        <div class="media-body">
                            <div class="media" style="overflow:visible;">
                                <div><img src="img/stmpp.jpg" class="mr-3" style="width:50px;height:50px;" /></div>
                                <div class="media-body" style="overflow:visible;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><a href="#">Si Thu Myo</a> bought a phone from this user (added by<a href="#">Lynn Htet Aung</a>)<br /><small class="text-muted">August 30, 2018 @ 9:10am</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div> --}}
        {{-- <div role="tabpanel" class="tab-pane" id="tab-3">
            <div class="row user-list">
                 <div class="col-12 col-sm-6 col-md-4 col-lg-3 user-item">
                    <div class="user-container"><a href="#" class="user-avatar"><img src="assets/img/spppp.jpg" alt="Profile of Mark Smith Peterson" width="48" height="48" class="rounded-circle img-fluid" /></a>
                        <p class="user-name"><a href="#">Satt Paing Phyoe</a><span>Joined on 30 August 2018</span></p><a href="#" class="user-delete"><i class="fa fa-remove"></i></a></div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 user-item">
                    <div class="user-container"><a href="#" class="user-avatar"><img src="assets/img/lhapp.jpg" alt="Profile of Mark Smith Peterson" width="48" height="48" class="rounded-circle img-fluid" /></a>
                        <p class="user-name"><a href="#">Lynn Htet Aung</a><span>Joined on 18 August 2018</span></p><a href="#" class="user-delete"><i class="fa fa-remove"></i></a></div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 user-item">
                    <div class="user-container"><a href="#" class="user-avatar"><img src="assets/img/kmmpp.jpg" alt="Profile of Mark Smith Peterson" width="48" height="48" class="rounded-circle img-fluid" /></a>
                        <p class="user-name"><a href="#">Khant Myat Min</a><span>Joined on 17 July 2018</span></p><a href="#" class="user-delete"><i class="fa fa-remove"></i></a></div>
                </div> 
            </div>
        </div>
    </div>
</div>--}}</div>
      
    </div>
    </div>

@endsection()