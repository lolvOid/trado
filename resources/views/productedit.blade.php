
@extends('dashmaster')

@section('dashboard')

<form>
        <div class="modal fade" id="editModel" tab dashboard="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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