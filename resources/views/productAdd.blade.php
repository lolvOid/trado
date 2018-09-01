@extends('dashmaster')

@section('dashboard')

                            <div class="page-inner">
                                    <div class="page-title">
                                            <div class="page-breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li><a href="dashboard">Home</a></li>
                                                    <li class="active">Product Add</li>
                                                </ol>
                                            </div>
                                        </div>
                              <div class="col-md-12">
                                    <div class="panel panel-white">
                                        <div class="panel-heading clearfix">
                                                <h4 class="panel-title">Add Product</h4>
                                        </div>
                                        <div class="panel-body">
                                            <form id="addForm" method="POST" action="{{route('products.store')}}" enctype="multipart/form-data" class="form-horizontal">
                                                {{ csrf_field() }}
                                                {{-- <input type="hidden" name="id" value="{{$product->id}}"> --}}
                                                <div class="form-group">
                                                    <label for="input-Default" class="col-sm-2 control-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="name" placeholder="Product Name" class="form-control" id="input-Default">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                        <label for="input-Default" class="col-sm-2 control-label">Slug</label>
                                                        <div class="col-sm-10">
                                                            <input type="text"  name="slug" placeholder="Slug" class="form-control" id="input-Default">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                            <label for="input-Default" class="col-sm-2 control-label">Details</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="details" placeholder="Details" class="form-control" id="input-Default">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                                <label for="input-Default" class="col-sm-2 control-label">Price</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="price" placeholder="Price" class="form-control" id="input-Default">
                                                                </div>
                                                            </div>

                                           
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Featured</label>
                                                    <div class="col-sm-10">
                                                           
                                                                    .<input class="switch" type="checkbox">
                                                            
                                                    
                                                </div>
                                               <div class="form-group">
                                                    <label class="col-sm-2 control-label">Type</label>
                                                    <div class="col-sm-10">
                                                        <select name="category">
                                                                @foreach ($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                        </select>
                                                        </div>
                                                </div>
                                       
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Product Description</label>
                                                    <input type="hidden" class="description" id="description" name="description">
                                                    <div class="col-sm-10">
                                                        <div class="summernote">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="button" onclick="beforeSubmit();" name="add" id="add" value="Save" class="btn btn-success pull-right">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                  
                            </div>
                            <script>

                                beforeSubmit = function(){
                                    $descriptionValue = $('div.note-editable').html();
                                    $('input#description').val($descriptionValue);
                                    $("#addForm").submit();                
                                }
                                
                            </script>
        @endsection()