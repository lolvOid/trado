@extends('dashmaster')

@section('dashboard')

<div class="page-inner">
                <div class="page-title">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href=" dashboard.html">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                        <div class="page-inner">
                                <div class="page-title">
                                    <h3 class="breadcrumb-header">Data Tables</h3>
                                    <div class="page-breadcrumb">
                                        <ol class="breadcrumb breadcrumb-with-header">
                                            <li><a href=" dashboard.html">Home</a></li>
                                         
                                            <li class="active">Product Data</li>
                                            
                                        </ol>
                                    </div>
                                </div>
                                <div id="main-wrapper">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-white">
                                                <div class="panel-heading clearfix">
                                                    <h2 class="panel-title">Products</h2>
                                                </div>
                                                <div class="panel-body">

                                                {{-- <form method="GET" action="{{route('productUpdate.store')}}">
                                                        <button type='submit'>Ha ha</button>
                                                    </form> --}}
                                                                <button type="button" class="btn btn-primary m-b-sm" data-toggle="modal" data-target="#addModel">Add new product</button>
                                                                <!-- Modal -->
                                                                <form id="add-row-form"  method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                                                                {{csrf_field()}}
                                                                <div class="modal fade" id="addModel" tab dashboard="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                
                                                                                <h4 class="modal-title" id="myModalLabel">Create Product</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                
                                                                                <div class="form-group">
                                                                                    <input type="text" id="name" class="form-control" name="name" placeholder="Name" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <input type="text" id="slug" name="slug" class="form-control"  placeholder="Slug" required>
                                                                                </div>
                                                                                
                                                                                <div class="form-group">
                                                                                    <input type="text" id="details" name="details" class="form-control" placeholder="Details" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <input type="number" id="price" name="price" class="form-control date-picker" placeholder="Price" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                        <input type="text" id="description" name="descriptions" class="form-control" placeholder="Description" required>
                                                                                </div>
                                                                                    <input class="form-control" type="file" data-name="product_img" name="product_img" id="product_img">
                                                                                
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                                <button type="submit" id="add-row" class="btn btn-success">Add</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </form>
                                                            </div>
                                                   <div class="table-responsive">
                                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                                        <thead>
                                                            <tr>
                                                                <th>Product Image</th>
                                                                <th>Product Name</th>
                                                                <th>Slug</th>
                                                                <th>Detail</th>
                                                                <th>Price</th>
                                                                <th>Description</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($products as $product)
                                                                
                                                             <tr>
                                                                <td>
                                                                    <img src="{{$product->images}}" width="160px" height="106px">
                                                                </td>
                                                                <td>{{$product->name}}</td>
                                                                <td>{{$product->slug}}</td>
                                                                <td>{{$product->details}}</td>                                           
                                                                <td>{{$product->presentPrice()}}</td>
                                                                <td>{{$product->description}}</td>
                                                                <td>
                                                                    {{-- <input value= --}}
                                                                <form>
                                                                        <button type="button" class="btn btn-info m-b-sm" data-toggle="modal" data-target="#editModel{{$product->id}}">Edit</button>
                                                                        <br><br>
                                                                        <a class="btn btn-danger m-b-sm">Delete</a>
                                                                        <div class="modal fade" id="editModel{{$product->id}}" tab dashboard="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            
                                                                                            <h4 class="modal-title" id="myModalLabel">Edit Product</h4>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            
                                                                                            <div class="form-group">
                                                                                                <input onClick="this.select();" type="text" id="name" class="form-control" name="name" value="{{$product->name}}" placeholder="Name" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <input type="text" id="slug" name="slug" class="form-control" value="{{$product->slug}}"  placeholder="Slug" required>
                                                                                            </div>
                                                                                            
                                                                                            <div class="form-group">
                                                                                                <input type="text" id="details" name="details" class="form-control" value="{{$product->details}}" placeholder="Details" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <input type="number" id="price" name="price" class="form-control date-picker" value="{{$product->price}}" placeholder="Price" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                    <input type="text" id="description" name="descriptions" class="form-control" value="{{$product->description}}" placeholder="Description" required>
                                                                                            </div>
                                                                                                <input class="form-control" type="file" data-name="product_img" name="product_img" id="product_img">
                                                                                            
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                                            <button type="submit" id="add-row" class="btn btn-success">Save</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                   </form>
                                                                        {{-- <button type="button" class="btn btn-success m-b-sm">Edit</button>
                                                                        <br> <br>
                                                                        <button type="button" class="btn btn-success m-b-sm">Delete</button> --}}
                                                            
                                                                </td>
                                                                
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                       </table>  
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                </div><!-- Main Wrapper -->
        @endsection()