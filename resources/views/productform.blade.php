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
                                            <form id="editForm" method="POST" action="{{route('products.update')}}" class="form-horizontal">
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
                                                        <div class="checkbox" checked={{$product->featured}}>
                                                            <label>
                                                                <input type="checkbox">
                                                            </label>
                                                        </div>
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
                                                    <label class="col-sm-2 control-label">Product Description</label>
                                                    <input type="hidden" class="description" id="description" name="description" value="haha">
                                                    <div class="col-sm-10">
                                                        <div class="summernote"></div>
                                                    </div>
                                                </div>
                                                <input type="button" onclick="beforeSubmit();" name="edit-save" id="edit-save" value="Save" class="btn btn-success pull-right">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                  
                            </div>
                            <script>

                                beforeSubmit = function(){
                                    $descriptionValue = $('div.note-editable').html();
                                    $('input#description').val($descriptionValue);
                                    $("#editForm").submit();                
                                }
                                $("#summernote").summernote({
                                    height: 300,
                                    toolbar: [
                                        [ 'style', [ 'style' ] ],
                                        [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
                                        [ 'fontname', [ 'fontname' ] ],
                                        [ 'fontsize', [ 'fontsize' ] ],
                                        [ 'color', [ 'color' ] ],
                                        [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
                                        [ 'table', [ 'table' ] ],
                                        [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
                                    ]
                                });
                                
                                
                            </script>
        @endsection()