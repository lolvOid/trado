@extends('dashmaster')

@section('dashboard')
{{-- <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.core.css">
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> --}}
<div class="page-inner">
                <div class="page-title">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href=" dashboard">Home</a></li>
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
                                            <li><a href=" dashboard">Home</a></li>
                                         
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
                                                            <form method="post" action="{{route('products.add')}} ">
                                                                {{csrf_field()}}
                                                               
                                                                <input type="submit" class="btn btn-success m-b-sm" value="Add new Product">
                                                                <a href="/shop" class="btn btn-default m-b-sm">Go To Shop</a>
                                                            </form>
                                                                
                                                                <br>
                                                                @if(\Session::has('success'))
                                                                    <div class='alert alert-success'>
                                                                        <p>
                                                                            {{\Session::get('success')}}
                                                                        </p>
                                                                @endif
                                                                <!-- Modal -->
                                                                
                                                                <form id="add-row-form" class="md-form" method="POST" action="{{route('products.store')}}" enctype="multipart/form-data" >
                                                                    {{-- <form id="add-row-form" class="md-form" enctype="multipart/form-data"> --}}
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
                                                                                    <select name="category" id="category" class="selectpicker">
                                                                                        @foreach ($categories as $category)
                                                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                                                        @endforeach
                                                                                        
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <input type="text" id="details" name="details" class="form-control" placeholder="Details" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <input type="number" id="price" name="price" class="form-control" placeholder="Price" min="1" max="9999999999" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                        <label >Featured</label>
                                                                                        <label  id="togglebutton" class="switch">
                                                                                            .<input class="switch" name="featured" id="featured" type="checkbox">
                                                                                            <span class="slider round"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                {{-- <div id="add-description">
                                                                                        
                                                                                </div>
                                                                                <input type="hidden" id="hiddeninput" name="description"> --}}
                                                                                <div class="form-group">
                                                                                        <textarea type="text" id="descriptions" name="description" class="form-control" placeholder="Description" required></textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <input class="btn btn-default btn-md float-left" type="file" data-name="product_img" name="product_img" id="product_img" required>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                                <button type="submit" id="add-save" class="btn btn-success">Add</button>
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
                                                                <th style="column-width: 300px;">Description</th>
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
                                                                <td style="column-width: 300px;"> {!! $product->description !!}  </td>
                                                                <td>
                                                                    {{-- <input value= --}}
                                                                        
                                                                        <form method="post" action="{{route('products.edit')}} ">
                                                                                {{csrf_field()}}
                                                                            <input type="hidden" name="id" value="{{$product->id}}">
                                                                            <input type="submit" id="save" class="btn btn-info m-b-sm" value="Edit">
                                                                            <br><br>
                                                                        </form>
                                                                            <form method="post" action="{{route('products.delete')}} ">
                                                                                {{csrf_field()}}
                                                                                <input type="hidden" value="{{ $product->id}}" name="id" id="id">
                                                                                <input type="submit" class="btn btn-danger m-b-sm" value="Delete">
                                                                            </form>

                                                                            {{--<form method="POST" action="{{route('products.edit')}}" enctype="multipart/form-data">
                                                                                    {{csrf_field()}}
                                                                            <div class="modal fade" id="editModel{{$product->id}}" tab dashboard="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            
                                                                                            <h4 class="modal-title" id="myModalLabel">Edit Product</h4>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <input type="hidden" value="{{$product->id}}" name="id" id="id">
                                                                                            <div class="form-group">
                                                                                                <input onClick="this.select();" type="text" id="name" class="form-control" name="name" value="{{$product->name}}" placeholder="Name" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <input type="text" id="slug" name="slug" class="form-control" value="{{$product->slug}}"  placeholder="Slug" required>
                                                                                            </div>
                                                                                            
                                                                                            <div class="form-group">
                                                                                                <select name="category" id="category" value="{{$product->category_id}}" class="selectpicker">
                                                                                                    @foreach ($categories as $category)
                                                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                                                                    @endforeach
                                                                                                    
                                                                                                </select>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <input type="text" id="details" name="details" class="form-control" value="{{$product->details}}" placeholder="Details" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <input type="number" id="price" name="price" class="form-control date-picker" value="{{($product->price)/100}}" placeholder="Price" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label >Featured</label>
                                                                                                <label  id="togglebutton" class="switch">
                                                                                                    .<input class="switch" name="featured" id="featured" type="checkbox" checked={{$product->featured}}>
                                                                                                    <span class="slider round"></span>
                                                                                                </label>
                                                                                            </div>
                                                                                            
                                                                                                <div class="form-group">
                                                                                                    <textarea id="description" name="description" class="form-control" placeholder="Description" required>{{$product->description}}</textarea>
                                                                                            </div> 
                                                                                           
                                                                                            
                                                                                            <div id="edit-description">
                                                                                                    <input type="hidden" id="hiddeninput" name="description">
                                                                                            </div>
                                                                                            
                                                                                                <input class="form-control" type="file" data-name="product_img" name="product_img" id="product_img">
                                                                                            
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                                            <button type="submit" name="edit-save" id="add-row" class="btn btn-success">Save</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            </form> --}}
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
                                    <script>
                                        // $(function(){
                                        //     $('#add-save').click(function () {
                                        //         var mysave = $('div.ql-editor').text();
                                        //         $('#hiddeninput').val(mysave);
                                        //     });
                                        // });

                                        // $(function(){
                                        //     $('#edit-save').click(function () {
                                        //         var mysave = $('div.ql-editor').text();
                                        //         $('#hiddeninput').val(mysave);
                                        //     });
                                        // });

                                       
                                        // var quill = new Quill('#editor', {
                                        // modules: {
                                        //     toolbar: '#add-description'
                                        // },
                                        // placeholder: 'Compose an epic...',
                                        // theme: 'snow'
                                        // });
                                        // var quill = new Quill('#editor', {
                                        // modules: {
                                        //     toolbar: '#edit-description'
                                        // },
                                        // placeholder: 'Compose an epic...',
                                        // theme: 'snow'
                                        // });
                                        </script>
                </div><!-- Main Wrapper -->
        @endsection()