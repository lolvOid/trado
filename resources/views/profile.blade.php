@extends('dashmaster')

@section('dashboard')



   
            <div class="page-inner">
                <div class="page-title">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href=" dashboard.html">Home</a></li>
                            <li class="active">Profile</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="user-profile-panel panel panel-white">
                                <div class="panel-heading">
                                    <div class="panel-title">User profile</div>
                                </div>

                               
                                    
                               
                                <div class="panel-body">
                                    {{-- <img src="img/lhpp.jpg" class="user-profile-image img-circle" alt=""> --}}
                                    <div class="form-group">
                                        <form method="POST" action="{{ URL::to('upload') }}" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <img src={{$user->avatar}} class="img-circle" style="width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                            <input class="form-control" type="file" data-name="avatar" name="avatar" id="avatar">
                                            <button type="submit" class="btn btn-primary m-t-xs m-b-xs">Upload</button>
                                        </form>
                                    </div>
                                    <h4 class="text-center m-t-lg"></h4>
                                    <p class="text-center"></p>
                                    <hr>
                                    <ul class="list-unstyled text-center">
                                        <li><p><i class="icon-pointer m-r-xs"></i>Address</p></li>
                                    <li><p><i class="icon-envelope-open m-r-xs"></i><a href="">{{$user->email}}</a></p></li>
                                        
                                    </ul>
                                    <hr>
                                 <!--   <button class="btn btn-info btn-block"><i class="icon-plus m-r-xs"></i>Follow</button>
                                 -->   </div>
                            </div>
                        </div>

  



                        <div class="row">
                                <div class="col-md-6">
                                    <div class="panel panel-white">
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">Edit your profile</h4>
                                        </div>
                                        <div class="panel-body">
                                            <form method="POST" action="{{ route('profile.store', $user->id) }}">
                                                    {{csrf_field()}}
                                                    <div class="form-group">
                                                            <label for="name">Name</label>
                                                        <input type="text" class="form-control m-t-xxs" id="name" name='name' placeholder="Enter Name" value="{{$user->name}}">
                                                    </div>    
                                                        <div class="form-group">
                                                                <label for="username" value="">username</label>
                                                                <input type="text" class="form-control m-t-xxs" id="username" name="username" value="{{$user->username}}">
                                                            </div>    
                                                    
                                                        <div class="form-group">
                                                                <label for="contect">Contact Number</label>
                                                                <input type="tel" class="form-control m-t-xxs" id="contact" name="contact" value="{{$user->contact}}" >
                                                            </div>        
                                                            

                                                <div class="form-group">
                                                    <label for="email">Email address</label>
                                                    <input type="email" name="email"  class="form-control m-t-xxs" id="email" name="email" value="{{$user->email}}">
                                                </div>

                                                <button type="submit" class="btn btn-primary m-t-xs m-b-xs">Submit</button>
                                                <button type="reset" class="btn btn-primary m-t-xs m-b-xs">Cancel</button>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>


                      
               


        @endsection()