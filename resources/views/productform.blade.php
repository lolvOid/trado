@extends('dashmaster')

@section('dashboard')

                            <div class="row">
                              <div class="col-md-12">
                                    <div class="panel panel-white">
                                        <div class="panel-heading clearfix">
                                                <h4 class="panel-title">Form Elements</h4>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="input-Default" class="col-sm-2 control-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" placeholder="iPhoneX" class="form-control" id="input-Default">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                        <label for="input-Default" class="col-sm-2 control-label">Slug</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" placeholder="Slug" class="form-control" id="input-Default">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                            <label for="input-Default" class="col-sm-2 control-label">Details</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" placeholder="Details" class="form-control" id="input-Default">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                                <label for="input-Default" class="col-sm-2 control-label">Price</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"placeholder="$1000" class="form-control" id="input-Default">
                                                                </div>
                                                            </div>

                                           
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Featured</label>
                                                    <div class="col-sm-10">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                            </label>
                                                        </div>
                                                       
                                                   
                                                    </div>
                                                </div>
                                               <div class="form-group">
                                                    <label class="col-sm-2 control-label">Type</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control m-b-sm">
                                                            <option>Laptop</option>
                                                            <option>Desktop</option>
                                                            <option>Mobile Phone</option>
                                                            <option>Gadget</option>
                                                            <option></option>
                                                        </select>
                                                        </div>
                                                </div>
                                       
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Product Description</label>
                                                    <div class="col-sm-10">
                                                        <div class="summernote"></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                  
                            </div>
        @endsection()