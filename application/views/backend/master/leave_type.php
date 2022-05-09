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
                                <h3>Leave Type</h3>
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
                                <h4>Create Leave Type</h4>                                                                      
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>Leave Type</b>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="leave_type" name="leave_type">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>No of Leave</b>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="no_of_leave" name="no_of_leave">
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>Status</b>
                                    <div class="form-group">
                                        <select class="form-control" name="status" id="status">
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
                                    <th>Leave Type</th>
                                    <th>No. of Leave</th>
                                    <th>Status</th>
                                    <th class="dt-no-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Medical Leave</td>
                                    <td>30</td>
                                    <td>
                                        <label class="btn-sm btn-danger">In-active</label>
                                    </td>
                                    <td>
                                        <a herf="javascript:void(0);"><i style="font-size:25px" class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Casual Leave</td>
                                    <td>5</td>
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