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
                                                                <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add new product</button>
                                                                <!-- Modal -->
                                                                <form id="add-row-form" method="POST" action="{{ route('products.add') }}" enctype="multipart/form-data">
                                                                <div class="modal fade" id="myModal" tab dashboard="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
                                                                                        <Select type="text" id="category" name="category" class="form-control" required>
                                                                                            @foreach ($categories as $cat)
                                                                                        <option value="{{$cat->id}}" >{{$cat->name}}</option>    
                                                                                            @endforeach
                                                                                            
                                                                                        </Select>
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
                                                                                    <input class="form-control" type="file" data-name="avatar" name="avatar" id="avatar">
                                                                                
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
                                                                <th>Product Name</th>
                                                                <th>Category</th>
                                                                <th>Detail</th>
                                                                <th>Price</th>
                                                                <th></th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Position</th>
                                                                <th>Office</th>
                                                                <th>Age</th>
                                                                <th>Start date</th>
                                                                <th>Salary</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                            @foreach ($products as $product)
                                                                
                                                             <tr>
                                                                <td>Hermione Butler</td>
                                                                <td>Regional Director</td>
                                                                <td>London</td>
                                                                <td>47</td>
                                                                <td>2011/03/21</td>
                                                                <td>$356,250</td>
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