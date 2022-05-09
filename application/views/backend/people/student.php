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
                                <h3>Student</h3>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-item flex-row">
                    <li><button onclick="promote();" class="btn btn-danger mb-2 mr-2" style="margin-top: 10px;padding: 3px 15px;"><i class="fa fa-trash"></i>&numsp;Delete</button></li>
                    <li><button onclick="promote();" class="btn btn-success mb-2 mr-2" style="margin-top: 10px;padding: 3px 15px;"><i class="fa fa-repeat"></i>&numsp;Promote</button></li>
                    <li><button onclick="uploadData();" class="btn btn-info mb-2 mr-2" style="margin-top: 10px;padding: 3px 15px;"><i class="fa fa-upload"></i>&numsp;Upload</button></li>
                    <li><button onclick="addData();" class="btn btn-primary mb-2 mr-2" style="margin-top: 10px;padding: 3px 15px;"><i class="fa fa-plus"></i>&numsp;Add</button></li>
                </ul>
            </header>
        </div>
        <div id="content" class="main-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12">
                    <div class="widget-content widget-content-area br-6">
                        <div class="row clearfix">
                            <div class="form-group col-md-2" style="padding-left: 35px;">
                                <label for="academic">Academic Year</label>
                                <select class="form-control" name="academic">
                                    <option>-Select-</option>
                                </select>  
                            </div> 
                            <div class="form-group col-md-2">
                                <label>Campus</label>
                                <select class="form-control" name="campus">
                                    <option value="">Select Campus</option>
                                    <option value="1">Campus-1</option>
                                    <option value="2">Campus-2</option>
                                    <option value="3">Campus-3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Stream</label>
                                <select class="form-control" name="stream">
                                    <option value="">Select Stream</option>
                                    <option value="1">Matric</option>
                                    <option value="2">CBSE</option>
                                    <option value="3">ISTREAM</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Class</label>
                                <select class="form-control" name="class">
                                    <option value="">Select Class</option>
                                    <option value="1">PRE KG</option>
                                    <option value="2">LKG</option>
                                    <option value="3">UKG</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Section</label>
                                <select class="form-control" name="section">
                                    <option value="">Select Section</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2" style="margin-top: -5px;">
                                <button name="submit" class="btn btn-primary" style="margin-top: 35px;padding: 3px 10px 3px 10px;"><i class="fa fa-search"></i>&numsp;Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width:50px;">Action <input type="checkbox" id="checkAll" /></th>
                                    <th style="width:10px;">S.No.</th>
                                    <th style="width:60px;">A.Year</th>
                                    <th style="width:70px;">Student ID</th>
                                    <th style="width:100px;">Student Name</th>
                                    <th style="width:100px;">Student Type</th>
                                    <th style="width:10px;">Sex</th>
                                    <th style="width:50px;">DOB</th>
                                    <th style="width:20px;">Class</th>
                                    <th style="width:20px;">Sec</th>
                                    <th style="width:50px;">Stream</th>
                                    <th style="width:30px;">Blood Group</th>
                                    <th style="width:60px;">Nationality</th>
                                    <th style="width:60px;">State</th>
                                    <th style="width:60px;">Religion</th>
                                    <th style="width:60px;">Community</th>                
                                    <th style="width:60px;">Caste</th>
                                    <th style="width:60px;">Community Group</th>
                                    <th style="width:60px;">Mother Tongue</th>
                                    <th style="width:60px;">Application No</th>
                                    <th style="width:60px;">Admission Date</th>
                                    <th style="width:60px;">Academic year admitted</th>
                                    <th style="width:60px;">Std admitted</th>
                                    <th style="width:60px;">Father name</th>
                                    <th style="width:60px;">Father occupation</th>
                                    <th style="width:60px;">Mother name</th>
                                    <th style="width:60px;">Mother occupation</th>
                                    <th style="width:150px;">Primary mobile</th> 
                                    <th style="width:150px;">Secondary mobile</th>
                                    <th style="width:150px;">Parmanent Address</th>
                                    <th style="width:150px;">communication Address</th>
                                    <th style="width:100px;">Primary email</th>
                                    <th style="width:120px;">Previous School</th>
                                    <th style="width:60px;">Class last attended</th>
                                    <th style="width:60px;">Second language</th>
                                    <th style="width:100px;">Records docs in file</th>
                                    <th style="width:100px;">Reason for not given BC</th>
                                    <th style="width:60px;">Category</th>
                                    <th style="width:60px;">Staff Name</th>
                                    <th style="width:60px;">Staff School Name</th>
                                    <th style="width:100px;">Remarks</th> 
                                    <th style="width:120px;">Previous School TC No</th> 
                                    <th style="width:120px;">Incoming Tc Date</th> 
                                    <th style="width:120px;">EMIS</th>
                                    <th style="width:120px;">Extras</th>
                                    <th style="width:120px;">Aadhar No</th>
                                    <th style="width:120px;">TC Request</th>
                                    <th style="width:120px;">TC Request Date</th>
                                    <th style="width:120px;">TC issue Date</th>
                                    <th style="width:120px;">Student Identification Marks1</th>
                                    <th style="width:120px;">Student Identification Marks2</th>
                                    <th style="width:120px;">Annual Income</th>
                                    <th style="width:50px;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
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
                <h2 class="model-header-title"><strong id="popup_title">ADD STUDENT</strong></h2>
            </div>

            <div class="modal-body">
                <ul class="nav nav-tabs  mb-3 mt-3" id="simpletab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="general_info-tab" data-toggle="tab" href="#general_info " role="tab" aria-controls="general_info " aria-selected="true">General Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="parents-tab" data-toggle="tab" href="#parents " role="tab" aria-controls="parents " aria-selected="true">Parents Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="others-tab" data-toggle="tab" href="#others " role="tab" aria-controls="others " aria-selected="true">Others</a>
                    </li>
                    <li style="width: 55%;" id="error_altr"></li>
                </ul>
                <div class="tab-content" id="simpletabContent">
                    <div class="tab-pane fade show active" id="general_info" role="tabpanel" aria-labelledby="general_info-tab">
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="academic">Academic Year <span>*</span></label>
                                    <select class="form-control" name="academic">
                                        <option>-Select-</option>
                                    </select>
                                </div>  
                            </div> 
                            <div class="col-md-2">
                              <label for="student_id">Campus<span>*</span></label>
                              <select name="campus" id="campus" class="form-control">\
                                <option>-select</option>
                              </select>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="student_id">Student ID <span>*</span></label>
                                  <input type="text" class="form-control upperCase" id="student_id" name="student_id" />
                                  <span class="err err_student_id"></span>
                                </div>  
                            </div> 
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="student_name">Student Name <span>*</span></label>
                                  <input type="text" class="form-control capitalize" id="student_name" name="student_name" />
                                  <span class="err err_student_name"></span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="class">Class</label>
                                    <select class="form-control" name="class">
                                     <option>-select-</option>
                                    </select>
                                </div>  
                            </div> 
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Section">Gender</label>
                                    <select name="gender" class="form-control" id="student_gender">
                                      <option value="M">Male</option>
                                      <option value="F">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>DOB <span>*</span></label>
                                      <input class="form-control pull-right student_dob" name="student_dob" id="datepicker" type="text">
                                    <span class="err err_student_dob"></span>
                                    <!-- /.input group -->
                                </div>
                            </div><!--// col-md-4 -->
                            <div class="col-md-2">
                              <div class="form-group">
                                <label for="school">Stream</label>
                                <select class="form-control" name="stream">
                                    <option>-select-</option>
                                </select>
                              </div>  
                            </div> 
                            <div class="col-md-2">
                               <div class="form-group">
                                <label for="Type">Section</label>
                                <select name="student_section" class="form-control" id="student_level">
                                  <option value="">Select</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="Section">EMIS No</label>
                                  <input type="text" class="form-control" id="student_emis" name="student_emis" />
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="Section">Aadhar No</label>
                                  <input type="text" class="form-control" id="aadhar_code" name="aadhar_code" data-inputmask='"mask": "9999 9999 9999"' data-mask />
                                </div>
                            </div>
                            <div class="col-md-2">
                              <br/>
                              <div class="checkbox">
                                <label>
                                  <input name="new_admission" id="new_admission" type="checkbox" value="1"> <span class="label label-success">New Admission</span>
                                </label>
                              </div>
                            </div>  
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="Section">Student Email</label>
                                  <input type="text" class="form-control" id="student_email" name="student_email" />
                                </div>
                            </div>
                            <div class="col-md-2">
                               <div class="form-group">
                                <label for="Gender">Mother Tongue</label>
                                <input type="text" class="form-control getMotherTonq" name="mother_tongue" id="mother_tongue" autocomplete="off" /> 
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label for="blood_grp">Blood Group</label>
                                <select name="blood_group" id="blood_group" class="form-control">
                                  <option value=""> -- SELECT -- </option>
                                  <option value="O+">O+</option>
                                  <option value="O-">O-</option>
                                  <option value="A+">A+</option>
                                  <option value="A-">A-</option>
                                  <option value="B+">B+</option>
                                  <option value="B-">B-</option>
                                  <option value="AB+">AB+</option>
                                  <option value="AB-">AB-</option>
                                  <option value="A1+">A1+</option>
                                  <option value="A1-">A1-</option>
                                  <option value="A1B+">A1B+</option>
                                  <option value="A1B-">A1B-</option>
                                  <option value="A2+">A2+</option>
                                  <option value="A2-">A2-</option>
                                  <option value="A2B+">A2B+</option>
                                  <option value="A2B-">A2B-</option>
                                  <option value="Other">Others</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="Class">Nationality</label>
                                <select name="nationality" class="form-control">
                                    <option>-select-</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="Gender">State</label>
                                  <input type="text" class="form-control getState" name="state" id="state" autocomplete="off" /> 
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-2">
                              <div class="form-group">
                                <label for="Contact No">Religion</label>
                                <input type="text" class="form-control getReligion" name="religion" id="religion" autocomplete="off" />
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label for="Contact No">Community</label>
                                 <select name="community" id="community" class="form-control">
                                  <option value="">Select</option>
                                  <option value="BC">BC</option>
                                  <option value="MBC">MBC</option>
                                  <option value="SC">SC</option>
                                  <option value="ST">ST</option>
                                  <option value="BCM">BCM</option>
                                  <option value="OTHERS">OTHERS</option>
                                 </select>
                              </div>
                            </div>

                            <div class="col-md-2">
                             <div class="form-group">
                              <label for="Class">Caste</label>
                              <input type="text" class="form-control getCaste" name="caste" id="caste" autocomplete="off" />
                            </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label for="Section">Group</label>
                                <input type="text" class="form-control getCasteGroup" id="group" name="group" autocomplete="off" />
                              </div>
                            </div>

                            <div class="col-md-2">
                             <div class="form-group">
                              <label for="boarding">Category</label>
                              <select class="form-control" name="student_category" id="student_category" onchange="removeReadonly(this, 'staff_name')">
                                <option value="General">General</option>
                                <option value="Staff">Staff</option>
                              </select>
                            </div>
                            </div>

                            <div class="col-md-2">
                             <div class="form-group">
                              <label for="boarding">Staff Name</label>
                              <input type="text" class="form-control" id="staff_name" name="staff_name" readonly="readonly" />
                             </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="Type">Boarding</label>
                                  <select class="form-control" name="boarding" id="boarding">
                                    <option value="0">Select</option>
                                    <option value="WB">WB</option>
                                    <option value="FB">FB</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                  <label for="Class">Transport</label>
                                  <select name="transport" name="transport" id="transport" class="form-control" onchange="removeReadonly(this, 'location')">
                                   <option value="0">No</option>
                                   <option value="1">Yes</option>         
                                 </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="Class">Location</label>
                                  <input type="text" class="form-control" name="location" id="location" readonly="readonly" />
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="Class" class="blink_me"><span class="label label-warning">Status</span></label>
                                  <select name="status" id="student_status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">In- Active</option>
                                    <option value="2">Admission Cancel</option>
                                  </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="Class">Student Type</label>
                                  <select name="student_type" id="student_type" class="form-control">
                                    <option value="0">-Select-</option>
                                    <option value="1">RTE</option>
                                    <option value="2">Govt</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="parents" role="tabpanel" aria-labelledby="parents-tab">
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="Contact No">Father Name <span>*</span></label>
                                  <input type="text" class="form-control" name="father_name" id="father_name" />
                                  <span class="err err_father_name"></span>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="Class">Father Occupation</label>
                                    <input type="text" class="form-control" name="father_occupation" id="father_occupation" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Class">Primary Mobile <span>*</span></label>
                                    <input type="text" class="form-control" name="primary_mobile" id="primary_mobile" data-inputmask='"mask": "9999999999"' data-mask />
                                    <span class="err err_primary_mobile"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Contact No">Mother Name <span>*</span></label>
                                    <input type="text" class="form-control" name="mother_name" id="mother_name" />
                                    <span class="err err_mother_name"></span>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="Class">Mother Occupation</label>
                                    <input type="text" class="form-control" name="mother_occupation" id="mother_occupation" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Class">Secondary Mobile</label>
                                    <input type="text" class="form-control" name="secondary_mobile" id="secondary_mobile" />
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Class">Permanent Address <span>*</span></label>
                                    <textarea rows="4" name="permanent_addr" id="permanent_addr" class="form-control"></textarea>
                                    <span class="err err_permanent_addr"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="display: inline-block;">Communication Address <span>*</span></label>
                                    <div class="checkbox" style="position: relative;
                                        display: inline-block; margin-top:0px; margin-bottom: 0px;">
                                        <label>
                                        <input type="checkbox" id="same_as" onClick="sameAs(this);"> <span class="label label-success">Same as Permanent Address</span>
                                        </label>
                                    </div>

                                    <textarea rows="4" class="form-control" name="comm_addr" id="comm_addr"></textarea>
                                    <span class="err err_comm_addr"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="Class">Primary Email ID <span>*</span></label>
                                    <input type="text" class="form-control" name="primary_email" id="primary_email" />
                                    <span class="err err_primary_email"></span>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="Class">Secondary Email ID</label>
                                    <input type="text" class="form-control" name="secondary_email" id="secondary_email" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Class">Annual Income</label>
                                    <input type="text" class="form-control" name="annual_income" id="annual_income"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="others" role="tabpanel" aria-labelledby="others-tab">
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="Class">Application No</label>
                                  <input type="text" class="form-control" name="appln_no" id="appln_no" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="Class">Admission Date</label>
                                  <input type="text" class="form-control" name="admission_date" id="admission_date" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="Class">A.Year Admitted</label>
                                  <input type="text" class="form-control" name="academic_year_admitted" id="academic_year_admitted" data-inputmask='"mask": "9999-9999"' data-mask />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="Class">Std Admitted</label>
                                  <select class="form-control" name="std_admitted">
                                      <option>-select-</option>
                                  </select>
                               </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Class">Class last Attend</label>
                                    <select class="form-control" name="class_last_attend">
                                        <option>-section-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Class">Bus No. Morning</label>
                                    <input type="text" class="form-control" name="van_no_mrng" id="van_no_mrng" />
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-2">
                              <div class="form-group">
                                <label for="Class">Van No. Evening</label>
                                <input type="text" class="form-control" name="van_no_even" id="van_no_even" />
                              </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Class">TC Request</label>
                                    <select class="form-control" name="tc_request" id="tc_request">
                                        <option value="0">NO</option>
                                        <option value="1">YES</option>
                                    </select>
                                </div>
                            </div> 

                            <div class="col-md-3">
                              <div class="form-group">
                                <label>TC Request Date</label>
                                  <input class="form-control pull-right tc_request_date" name="tc_request_date" id="tc_request_date" type="text">
                              </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>TC issue Date</label>
                                    <input class="form-control pull-right tc_issue_date" name="tc_issue_date" id="tc_issue_date" type="text">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Class">Records Docs in File</label>
                                    <input type="text" class="form-control" name="rec_doc_files" id="rec_doc_files" />
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Class">Previous School</label>
                                    <input type="text" class="form-control" name="previous_school" id="previous_school" />
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Class">Prev. School TC No</label>
                                    <input type="text" class="form-control" name="previous_tc_no" id="previous_tc_no" />
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Class">Incoming Tc Date</label>
                                    <input type="text" class="form-control" name="incoming_tc_date" id="incoming_tc_date" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Class">Extras</label>
                                    <input type="text" class="form-control" name="extras" id="extras" />
                                </div>
                            </div> 
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Class">Reason for not giving Original BC</label>
                                    <input type="text" class="form-control" name="original_bc" id="original_bc" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Class">Remarks</label>
                                    <input type="text" class="form-control" name="remarks" id="remarks" />
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Class">(A) Personal marks of identification</label>
                                    <input type="text" class="form-control" name="personal_marks_identification" id="personal_marks_identification" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Class">(B) Personal marks of identification</label>
                                    <input type="text" class="form-control" name="personal_marks_identification1" id="personal_marks_identification1" />
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
    $('#popup_title').html('ADD STUDENT');
    $('#popup_btn').html('SAVE');
    $('#myModal2').modal({ backdrop: 'static',keyboard: true,show: true });
}
</script>