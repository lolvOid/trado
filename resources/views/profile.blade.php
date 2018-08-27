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
                                    <img src="img/lhpp.jpg" class="user-profile-image img-circle" alt="">
                                    <h4 class="text-center m-t-lg"></h4>
                                    <p class="text-center"></p>
                                    <hr>
                                    <ul class="list-unstyled text-center">
                                        <li><p><i class="icon-pointer m-r-xs"></i>Address</p></li>
                                    <li><p><i class="icon-envelope-open m-r-xs"></i><a href="">{{$email}}</a></p></li>
                                        
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
                                            <form action="{{route('profile.update')}}">

                                                    <div class="form-group">
                                                            <label for="name">Name</label>
                                                    <input type="text" class="form-control m-t-xxs" id="name" placeholder="Enter Name" value="{{$name}}">
                                                        </div>    
                                                        <div class="form-group">
                                                                <label for="username" value="">username</label>
                                                                <input type="text" class="form-control m-t-xxs" id="username" placeholder="Enter Username">
                                                            </div>    
                                                    
                                                        <div class="form-group">
                                                                <label for="contect">Contact Number</label>
                                                                <input type="tel" class="form-control m-t-xxs" id="contact" placeholder="Enter Your Contact Number" value="">
                                                            </div>        
                                                            

                                                <div class="form-group">
                                                    <label for="email" value="{{$email}}">Email address</label>
                                                    <input type="email" name="email"  class="form-control m-t-xxs" id="email" placeholder="Enter email">
                                                </div>

                                                
                                                <div class="form-group">
                                                    <label for="password1">Password</label>
                                                    <input type="password" name="password" class="password form-control m-t-xxs" id="password" placeholder="Password">
                                                </div>
                                                <div class="checkbox">
                                                    <label class="no-s">
                                                        <input type="checkbox"> Show Password
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-primary m-t-xs m-b-xs">Submit</button>
                                                <button type="reset" class="btn btn-primary m-t-xs m-b-xs">Cancel</button>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>


                      
               


        @endsection()