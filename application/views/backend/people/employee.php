<!--  BEGIN CONTENT AREA  -->
<style type="text/css">
.modal.right .modal-dialog {
    width: 1215px;
    min-width: 1215px;
}
.nav-tabs .nav-link.active {
    background-color: #efe9e9;
}
.form-control {
    padding: 5px 5px 5px 5px;
    height: 30px;
}
.table-bordered th {
  border: 1px solid !important;
}
</style>
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm">
                <ul class="navbar-item flex-row search-ul">
                    <li class="nav-item align-self-center page-heading">
                        <div class="page-header">
                            <div class="page-title">
                                <h3>Employee</h3>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-item flex-row">
                    <li><button onclick="addData();" class="btn btn-primary mb-2 mr-2" style="margin-top: 10px;padding: 3px 15px;"><i class="fa fa-plus"></i></button></li>
                </ul>
            </header>
        </div>
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Department</th>
                                        <th>Designation</th>
                                        <th>Mobile No.</th>
                                        <th>PAN No.</th>
                                        <th>Status</th>
                                        <th class="dt-no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>9000</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>8665454343</td>
                                        <td>
                                            <label class="btn-sm btn-primary">Active</label>
                                        </td>
                                        <td>
                                            <a herf="javascript:void(0);" onclick="addData();"><i style="font-size:25px" class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
<!-- popup -->
<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button  type="button" class="close model-header-close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="model-header-title"><strong id="popup_title">ADD EMPLOYEE</strong></h2>
            </div>

            <div class="modal-body">
            <ul class="nav nav-tabs  mb-3 mt-3" id="simpletab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="personal_detail-tab" data-toggle="tab" href="#personal_detail " role="tab" aria-controls="personal_detail " aria-selected="true">PERSONAL </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="hr-tab" data-toggle="tab" href="#hr" role="tab" aria-controls="hr" aria-selected="false">HR ENTRY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="family-tab" data-toggle="tab" href="#family" role="tab" aria-controls="family" aria-selected="false">FAMILY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="wed-tab" data-toggle="tab" href="#wed" role="tab" aria-controls="wed" aria-selected="false">WORK EXPERIENCE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="kyc-tab" data-toggle="tab" href="#kyc" role="tab" aria-controls="kyc" aria-selected="false">KYC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="documents-tab" data-toggle="tab" href="#documents" role="tab" aria-controls="documents" aria-selected="false">RECEIVED DOCUMENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="bank-tab" data-toggle="tab" href="#bank" role="tab" aria-controls="bank" aria-selected="false">BANK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nominee-tab" data-toggle="tab" href="#nominee" role="tab" aria-controls="nominee" aria-selected="false">NOMINEE</a>
                </li>
            </ul>
            <div class="tab-content" id="simpletabContent">
                <div class="tab-pane fade show active" id="personal_detail" role="tabpanel" aria-labelledby="personal_detail-tab">
                    <div class="row clearfix">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="fname" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" class="form-control datetimepicker" name="dob" placeholder="Date of Birth">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="age" placeholder="Age">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                       <div class="col-sm-3">
                            <select class="form-control show-tick" name="gender">
                                <option>- Gender -</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control show-tick" name="marital_status">
                                <option value="">- Marital Status -</option>
                                <option value="Y">Yes</option>
                                <option value="N">No</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Emp. Mobile No.">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="alt_phone" placeholder="Emp. Alt. Mobile No.">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="mail" placeholder="Email ID">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control show-tick" name="blood_group">
                                <option value="">- Blood Group -</option>
                                <option value="b+">B+</option>
                                <option value="ab+">AB+</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control show-tick" name="qualification">
                                <option value="">- Qualification -</option>
                                <option value="degree">Degree</option>
                                <option value="diploma">Diploma</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="emergency_contact" placeholder="Emergency contact no. (Family)">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <textarea rows="4" class="form-control no-resize" placeholder="Please type present address..."></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <textarea rows="4" class="form-control no-resize" placeholder="Please type permament address..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="hr" role="tabpanel" aria-labelledby="hr-tab">
                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Employee Code">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control show-tick">
                                <option value="">- Deportment -</option>
                                <option value="management">management</option>
                                <option value="software">software</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control show-tick">
                                <option value="">- Designation -</option>
                                <option value="te">Trainee Engineer</option>
                                <option value="se">Software Engineer</option>
                                <option value="sa">System Analyst</option>
                            </select>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <select class="form-control show-tick">
                                <option value="">- Recruotment Source -</option>
                                <option value="er">Emp. Referral</option>
                                <option value="mr">Mgmt. Referral</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-calendar"></i>
                                </span>
                                <input type="text" class="form-control datetimepicker" placeholder="DOJ">
                                
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control datetimepicker" placeholder="Probation upto">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control datetimepicker" placeholder="Joining Date">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                               <input type="text" class="form-control" placeholder="Salary as on joining">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <select class="form-control show-tick">
                                    <option value="">-Employee Status-</option>
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="family" role="tabpanel" aria-labelledby="family-tab">
                    <div class="row clearfix">
                        <div class="col-sm-2">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name as per Aadhar">
                           </div>
                        </div>
                        <div class="col-sm-2">
                           <div class="input-group">
                            <input type="text" class="form-control datetimepicker" placeholder="DOB">
                           </div>
                        </div>
                        <div class="col-sm-2">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Relationship With IP">
                           </div>
                        </div>
                        <div class="col-sm-2">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Aadhar No.">
                           </div>
                        </div>
                        <div class="col-sm-2">
                           <div class="checkbox inlineblock">
                                <input id="verified" type="checkbox">
                                <label for="verified">
                                        Verified
                                </label>
                           </div>
                        </div>
                        <div class="col-sm-2">
                           <div class="form-group">
                                <input type="submit" name="add_family_btn" class="btn btn-primary float-right" value="Add Family Member">
                           </div>
                        </div>
                        <hr/>
                        <table class="table table-bordered" style="margin-top: 15px;">
                           <thead>
                                <tr>
                                     <th>S.No.</th>
                                     <th>Name as per Aadhar</th>
                                     <th>DOB</th>
                                     <th>Relationship With IP</th>
                                     <th>Aadhar No.</th>
                                     <th>Verified</th>
                                     <th>Action</th>
                                </tr>
                           </thead>
                           <tbody>
                                <tr>
                                     <td>1</td>
                                     <td>Test</td>
                                     <td>20-12-1990</th>
                                     <td>Father</td>
                                     <td>1234 5678 9101 1121</td>
                                     <td>YES</td>
                                     <td><span class="badge badge-info">EDIT</span>&numsp;<span class="badge badge-danger">REMOVE</span></td>
                                </tr>
                           </tbody>
                        </table>
                        </div>
                </div>
                <div class="tab-pane fade" id="wed" role="tabpanel" aria-labelledby="wed-tab">
                    <div class="row clearfix">
                          <div class="col-sm-4">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="School Name">
                               </div>
                          </div>
                          <div class="col-sm-4">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="School Address">
                               </div>
                          </div>
                          <div class="col-sm-4">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Experience">
                               </div>
                          </div>
                          <div class="col-sm-6">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="At the time of joining the school (Designation & Salary Drawn)">
                               </div>
                          </div>
                          <div class="col-sm-6">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="At the time of leaving the school (Designation & Salary Drawn)">
                               </div>
                          </div>
                          <div class="col-sm-4">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Contact Person Name">
                               </div>
                          </div>
                          <div class="col-sm-4">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Contact Person Mobile no.">
                               </div>
                          </div>
                          <div class="col-sm-4">
                               <div class="checkbox inlineblock">
                                    <input id="verified" type="checkbox">
                                    <label for="verified">
                                            Verified
                                    </label>
                               </div>
                          </div>
                          <div class="col-sm-12">
                               <div class="form-group">
                                    <input type="submit" name="add_wed_btn" class="btn btn-primary float-right" value="Add Work Exp">
                               </div>
                          </div>
                          <table class="table table-bordered" style="margin-top: 15px;">
                               <thead>
                                    <tr>
                                        <th rowspan="2" style="vertical-align: middle;text-align: center;">S.No.</th>
                                        <th colspan="2" style="text-align: center;">School</th>
                                        <th rowspan="2" style="vertical-align: middle;text-align: center;">Experience</th>
                                        <th colspan="2" style="text-align: center;">At the time of School</th>
                                        <th colspan="2" style="text-align: center;">Contact Person </th>
                                        <th rowspan="2" style="vertical-align: middle;text-align: center;">Verified</th>
                                        <th rowspan="2" style="vertical-align: middle;text-align: center;">Action</th>
                                    </tr>
                                    <tr>
                                         
                                         <th>Name</th>
                                         <th>Address</th>
                                         <th>Joining</th>
                                         <th>Leaving </th>
                                         <th>Name</th>
                                         <th>Mobile No.</th>
                                         
                                    </tr>
                               </thead>
                               <tbody>
                                    <tr>
                                         <td>1</td>
                                         <td>Test</td>
                                         <td>test</th>
                                         <td>10</td>
                                         <td>test</td>
                                         <td>test</td>
                                         <td>test</td>
                                         <td>test</td>
                                         <td>YES</td>
                                         <td><span class="badge badge-info">EDIT</span>&numsp;<span class="badge badge-danger">REMOVE</span></td>
                                    </tr>
                               </tbody>
                          </table>
                          <div class="col-sm-3">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Reference Name">
                               </div>
                          </div>
                          <div class="col-sm-3">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Reference Mobile no.">
                               </div>
                          </div>
                          <div class="col-sm-3">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Reference Designation">
                               </div>
                          </div>
                          <div class="col-sm-3">
                               <div class="checkbox inlineblock">
                                    <input id="verified" type="checkbox">
                                    <label for="verified">
                                            Verified
                                    </label>
                               </div>
                          </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kyc" role="tabpanel" aria-labelledby="kyc-tab">
                    <div class="row clearfix">
                        <div class="col-sm-2">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="ID Type">
                           </div>
                        </div>
                        <div class="col-sm-2">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Document No">
                           </div>
                        </div>
                        <div class="col-sm-2">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name as per Document">
                           </div>
                        </div>
                        <div class="col-sm-2">
                           <div class="form-group">
                                <input type="file" class="form-control">
                           </div>
                        </div>
                        <div class="col-sm-2">
                           <div class="input-group">
                            <input type="text" class="form-control datetimepicker" placeholder="Expiry Date">
                           </div>
                        </div>
                        <div class="col-sm-2">
                           <div class="form-group">
                                <input type="submit" name="add_kyc_btn" class="btn btn-primary float-right" value="Add KYC">
                           </div>
                        </div>
                        <hr/>
                        <table class="table table-bordered" style="margin-top: 15px;">
                           <thead>
                                <tr>
                                     <th>S.No.</th>
                                     <th>ID Type</th>
                                     <th>Document No.</th>
                                     <th>Name as per Document</th>
                                     <th>Upload File</th>
                                     <th>Expiry Date</th>
                                     <th>Action</th>
                                </tr>
                           </thead>
                           <tbody>
                                <tr>
                                     <td>1</td>
                                     <td>Test</td>
                                     <td>1234567890</th>
                                     <td>Test</td>
                                     <td>test</td>
                                     <td>20-10-2025</td>
                                     <td><span class="badge badge-info">EDIT</span>&numsp;<span class="badge badge-danger">REMOVE</span></td>
                                </tr>
                           </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
                    <div class="row clearfix">
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Document Name">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="file" class="form-control">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="submit" name="add_document_btn" class="btn btn-primary float-right" value="Add DOCUMENTS">
                           </div>
                        </div>
                        <hr/>
                        <table class="table table-bordered" style="margin-top: 15px;">
                           <thead>
                                <tr>
                                     <th>S.No.</th>
                                     <th>Document Name</th>
                                     <th>Upload File</th>
                                     <th>Action</th>
                                </tr>
                           </thead>
                           <tbody>
                                <tr>
                                     <td>1</td>
                                     <td>Test</td>
                                     <td>Test</td>
                                     <td><span class="badge badge-info">EDIT</span>&numsp;<span class="badge badge-danger">REMOVE</span></td>
                                </tr>
                           </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="bank" role="tabpanel" aria-labelledby="bank-tab">
                    <div class="row clearfix">
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Account Name">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Account No.">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Account Type">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Bank Name">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Branch Name">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="IFSC Code">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Gpay Number">
                           </div>
                        </div>
                        <div class="col-sm-8">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="UPI ID">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <h6>EMPTY CHEQUE DETAILS</h6>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Bank Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Cheque No.">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Remarks">
                           </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nominee" role="tabpanel" aria-labelledby="nominee-tab">
                    <div class="row clearfix">
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name as per Aadhar">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Relationship with IP">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Mobile No.">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Aadhar No">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                                <select class="form-control show-tick">
                                     <option value="">-Is nominee a family member-</option>
                                     <option value="1">YES</option>
                                     <option value="0">NO</option>
                                </select>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="popup_btn" class="btn btn-primary">Save</button>
            </div>

        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->

<script type="text/javascript">
function addData(){
    $('#popup_title').html('');
    $('#popup_btn').html('');
    $('#popup_title').html('ADD EMPLOYEE');
    $('#popup_btn').html('SAVE');
    $('#myModal2').modal({ backdrop: 'static',keyboard: true,show: true });
}
</script>