@extends('dashmaster')

@section('dashboard')
                           <div class="page-inner">
                                    <div class="page-title">
                                            <div class="page-breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li><a href="dashboard">Home</a></li>
                                                    <li class="active">Product Edit</li>
                                                </ol>
                                            </div>
                                        </div>
                              <div class="col-md-12">
                                    <div class="panel panel-white">
                                        <div class="panel-heading clearfix">
                                                <h4 class="panel-title">Product Edit</h4>
                                        </div>
                                        <div class="panel-body">
                                            <form id="editForm" method="POST" action="{{route('products.update')}}" enctype="multipart/form-data" class="form-horizontal">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <div class="form-group">
                                                    <label for="input-Default" class="col-sm-2 control-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="name" value="{{$product->name}}" placeholder="Product Name" class="form-control" id="input-Default">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                        <label for="input-Default" class="col-sm-2 control-label">Slug</label>
                                                        <div class="col-sm-10">
                                                            <input type="text"  name="slug" value="{{$product->slug}}" placeholder="Slug" class="form-control" id="input-Default">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                            <label for="input-Default" class="col-sm-2 control-label">Details</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="details" value="{{$product->details}}" placeholder="Details" class="form-control" id="input-Default">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                                <label for="input-Default" class="col-sm-2 control-label">Price</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="price" value="{{($product->price)/100}}" placeholder="Price" class="form-control" id="input-Default">
                                                                </div>
                                                            </div>

                                           
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Featured</label>
                                                    <div class="col-sm-10">
                                                            <label  id="togglebutton" class="switch">
                                                                    .<input class="switch" type="checkbox" @if($product->featured) checked @endif >
                                                            <span class="slider round"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <label  class="col-sm-2 control-label">Old or New</label>
                                                        <div class="form-check  form-check-inline col-sm-10">
                                                            <input type="radio" name="old" id="old_new1" value="1" 
                                                            @if ($product->old)
                                                                checked
                                                            @endif
                                                            >Old<br/>
                                                            <input type="radio" name="old" id="old_new2" value="0"
                                                            @if (! $product->old)
                                                                checked
                                                            @endif
                                                            >New
                                                            
                                                        </div>
                                                    </div>
                                               <div class="form-group">
                                                    <label class="col-sm-2 control-label">Type</label>
                                                    <div class="col-sm-10">
                                                        <select name="category" value="{{$product->category_id}}">
                                                                @foreach ($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                        </select>
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Image File:</label>
                                                    <div class="col-sm-10">
                                                    <input class="btn btn-default btn-md float-left" type="file" data-name="product_img" name="product_img" id="product_img" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Product Description</label>
                                                <input type="hidden" class="description" id="description" name="description" value="{{ $product->description }}">
                                                    <div class="col-sm-10">
                                                        <div id="editor">
                                                            {{-- {!! $product->description !!} --}}
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <input type="button" onclick="beforeSubmit();" name="edit-save" id="edit-save" value="Save" class="btn btn-success pull-right">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                  
                            </div>
                            <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                            <script>
                                var toolbarOptions = [
                                    [{ 'color': [] }, { 'background': [] }],

                                ];
                                var quill = new Quill('#editor', {
                                    theme: 'snow',
                                    modules: {
                                        toolbar: toolbarOptions
                                    }
                                });
                                beforeSubmit = function(){
                                    $descriptionValue = $('div.ql-editor').html();
                                    $('input#description').val($descriptionValue);
                                    $("#editForm").submit();                
                                };
                                $(document).ready(function(){
                                    $('div.ql-editor').html($('input#description').val());
                                });
                            </script>
        @endsection()