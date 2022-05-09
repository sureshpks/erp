<!--  BEGIN CONTENT AREA  -->
<style type="text/css">
    .row {
      margin-right: 0px !important;
      margin-left: 0px !important;
    }
</style>
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm">
                <ul class="navbar-item flex-row search-ul">
                    <li class="nav-item align-self-center page-heading">
                        <div class="page-header">
                            <div class="page-title">
                                <h3>Subject</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </header>
        </div>
        <div id="content" class="main-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row clearfix">
                                <h4>Create Subject</h4>                                                                      
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>Subject Name</b>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject_name" name="subject_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>Subject Code</b>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject_code" name="subject_code">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>Subject Type</b>
                                    <div class="form-group">
                                        <select class="form-control" name="subject_type" id="subject_type">
                                            <option value="Theory">Theory</option>
                                            <option value="Practical">Practical</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>Class</b>
                                    <div class="form-group">
                                        <select class="form-control" name="class_name" id="class_name">
                                            <option value="1">PRE KG</option>
                                            <option value="2">LKG</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>Stream</b>
                                    <div class="form-group">
                                        <select class="form-control" name="stream_name" id="stream_name">
                                            <option value="1">MATRIC</option>
                                            <option value="2">CBSE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>Subject Status</b>
                                    <div class="form-group">
                                        <select class="form-control" name="subject_status" id="subject_status">
                                            <option value="0">Active</option>
                                            <option value="1">In-Active</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group" style="float: right;">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="widget-content widget-content-area br-6">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Subject</th>
                                    <th>Class</th>
                                    <th>Stream</th>
                                    <th>Status</th>
                                    <th class="dt-no-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tamil</td>
                                    <td>PRE KG</td>
                                    <td>CBSE</td>
                                    <td>
                                        <label class="btn-sm btn-danger">In-active</label>
                                    </td>
                                    <td>
                                        <a herf="javascript:void(0);"><i style="font-size:25px" class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>English</td>
                                    <td>PRE KG</td>
                                    <td>CBSE</td>
                                    <td>
                                        <label class="btn-sm btn-primary">Active</label>
                                    </td>
                                    <td>
                                        <a herf="javascript:void(0);"><i style="font-size:25px" class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>