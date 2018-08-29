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
                                                    <h4 class="panel-title">Basic example</h4>
                                                </div>
                                                <div class="panel-body">
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
                                            <div class="panel panel-white">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Add rows</h4>
                                                </div>
                                                <div class="panel-body">
                                                    <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add new row</button>
                                                    <!-- Modal -->
                                                    <form id="add-row-form" action="javascript:void(0);">
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
                                                                        <input type="text" id="details" name="details" class="form-control" placeholder="Details" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="number" id="price" name="price" class="form-control date-picker" placeholder="Price" required>
                                                                    </div>
                                                                    <div class="form-group  col-md-12">
                                        
                                                                        <label for="name">Description</label>
                                                                        <textarea class="form-control simplemde" name="description" id="markdowndescription" style="display: none;">
                                                                        </textarea>
                                                                        <div class="editor-toolbar">
                                                                            <a title="Bold (Ctrl-B)" tabindex="-1" class="fa fa-bold">
                                                                            </a>
                                                                            a title="Italic (Ctrl-I)" tabindex="-1" class="fa fa-italic">
                                                                        </a>
                                                                        <a title="Heading (Ctrl-H)" tabindex="-1" class="fa fa-header"></a>
                                                                        <i class="separator">|</i>
                                                                        <a title="Quote (Ctrl-')" tabindex="-1" class="fa fa-quote-left"></a>
                                                                        <a title="Generic List (Ctrl-L)" tabindex="-1" class="fa fa-list-ul"></a>
                                                                        <a title="Numbered List (Ctrl-Alt-L)" tabindex="-1" class="fa fa-list-ol"></a>
                                                                        <i class="separator">|</i><a title="Create Link (Ctrl-K)" tabindex="-1" class="fa fa-link"></a>
                                                                        <a title="Insert Image (Ctrl-Alt-I)" tabindex="-1" class="fa fa-picture-o"></a><i class="separator">|</i>
                                                                        <a title="Toggle Preview (Ctrl-P)" tabindex="-1" class="fa fa-eye no-disable"></a>
                                                                        <a title="Toggle Side by Side (F9)" tabindex="-1" class="fa fa-columns no-disable no-mobile"></a>
                                                                        <a title="Toggle Fullscreen (F11)" tabindex="-1" class="fa fa-arrows-alt no-disable no-mobile"></a>
                                                                        <i class="separator">|</i>
                                                                        <a title="Markdown Guide" tabindex="-1" class="fa fa-question-circle" href="https://simplemde.com/markdown-guide" target="_blank"></a>
                                                                    </div><div class="CodeMirror cm-s-paper CodeMirror-wrap">
                                                                        <div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 15px; left: 15px;">
                                                                            <textarea autocorrect="off" autocapitalize="off" spellcheck="false" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;" tabindex="0"></textarea>
                                                                        </div>
                                                                        <div class="CodeMirror-vscrollbar" cm-not-content="true">
                                                                            <div style="min-width: 1px; height: 0px;"></div>
                                                                        </div>
                                                                        <div class="CodeMirror-hscrollbar" cm-not-content="true">
                                                                            <div style="height: 100%; min-height: 1px; width: 0px;"></div>
                                                                        </div>
                                                                        <div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
                                                                        <div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
                                                                        <div class="CodeMirror-scroll" tabindex="-1">
                                                                            <div class="CodeMirror-sizer" style="margin-left: 0px; margin-bottom: -17px; border-right-width: 13px; min-height: 30px; padding-right: 0px; padding-bottom: 0px;">
                                                                                <div style="position: relative; top: 0px;">
                                                                                    <div class="CodeMirror-lines" role="presentation">
                                                                                        <div role="presentation" style="position: relative; outline: none;">
                                                                                            <div class="CodeMirror-measure"></div>
                                                                                            <div class="CodeMirror-measure"></div>
                                                                                            <div style="position: relative; z-index: 1;"></div>
                                                                    <div class="CodeMirror-cursors" style="visibility: hidden;">
                                                                        <div class="CodeMirror-cursor" style="left: 4px; top: 0px; height: 22px;">&nbsp;</div>
                                                                    </div><div class="CodeMirror-code" role="presentation">
                                                                        <pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span cm-text="">&#8203;</span></span></pre></div></div></div></div></div><div style="position: absolute; height: 13px; width: 1px; border-bottom: 0px solid transparent; top: 30px;"></div><div class="CodeMirror-gutters" style="display: none; height: 43px;"></div></div></div><div class="editor-preview-side"></div><div class="editor-statusbar"><span class="autosave"></span><span class="lines">1</span><span class="words">0</span><span class="cursor">0:0</span></div>
                                
                                                                        
                                                                                </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" id="add-row" class="btn btn-success">Add</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                    <div class="table-responsive">
                                                        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Position</th>
                                                                    <th>Age</th>
                                                                    <th>Start date</th>
                                                                    <th>Salary</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Position</th>
                                                                    <th>Age</th>
                                                                    <th>Start date</th>
                                                                    <th>Salary</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                </div><!-- Main Wrapper -->
               
       
    

        @endsection()