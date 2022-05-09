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
                                <h3>Student Assign</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </header>
        </div>
        <div id="content" class="main-content">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="widget-content widget-content-area br-6">
                        <form>
                            <div class="row clearfix">
                                <div class="form-group col-md-3">
                                    <label>Campus</label>
                                    <select class="form-control" name="campus" style="height: 36px;padding: 5px;">
                                        <option value="">Select Campus</option>
                                        <option value="1">Campus-1</option>
                                        <option value="2">Campus-2</option>
                                        <option value="3">Campus-3</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Stream</label>
                                    <select class="form-control" name="stream" style="height: 36px;padding: 5px;">
                                        <option value="">Select Stream</option>
                                        <option value="1">Matric</option>
                                        <option value="2">CBSE</option>
                                        <option value="3">ISTREAM</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Class</label>
                                    <select class="form-control" name="class" style="height: 36px;padding: 5px;">
                                        <option value="">Select Class</option>
                                        <option value="1">PRE KG</option>
                                        <option value="2">LKG</option>
                                        <option value="3">UKG</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Section</label>
                                    <select class="form-control" name="section" style="height: 36px;padding: 5px;">
                                        <option value="">Select Section</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">C</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3" style="margin-top: -5px;">
                                    <button name="submit" class="btn btn-primary" style="margin-top: 34px;"><i class="fa fa-search"></i>&numsp;Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="widget-content widget-content-area br-6">
                        <table class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="dt-no-sorting">S.No.</th>
                                    <th class="dt-no-sorting">Student ID</th>
                                    <th class="dt-no-sorting">Student Name</th>
                                    <th class="dt-no-sorting">Tamil</th>
                                    <th class="dt-no-sorting">English</th>
                                    <th class="dt-no-sorting">Mathematics</th>
                                    <th class="dt-no-sorting">Science</th>
                                    <th class="dt-no-sorting">Social Science</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>SMR001</td>
                                    <td>Test-1</td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SMR002</td>
                                    <td>Test-2</td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>SMR003</td>
                                    <td>Test-3</td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>SMR004</td>
                                    <td>Test-4</td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>SMR005</td>
                                    <td>Test-5</td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                    <td><input type="checkbox" name="subject[]"></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="8">
                                        <button style="padding: 13px 20px;margin-left: 4px;float: right;" class="btn-sm btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 15px"></i></button>
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>