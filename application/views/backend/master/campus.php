<!--  BEGIN CONTENT AREA  -->
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm">
                <ul class="navbar-item flex-row search-ul">
                    <li class="nav-item align-self-center page-heading">
                        <div class="page-header">
                            <div class="page-title">
                                <h3>Campus</h3>
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
                                        <th>Campus Name</th>
                                        <th>Address</th>
                                        <th>Principal Name</th>
                                        <th>Mobile No</th>
                                        <th>Status</th>
                                        <th class="dt-no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($results){ ?>
                                        <?php foreach($results as $key => $result){ ?>
                                            <tr>
                                                <td><?php echo $key+1;?></td>
                                                <td><?php echo $result->campus_name;?></td>
                                                <td><?php echo $result->campus_address;?></td>
                                                <td><?php echo $result->principal_name;?></td>
                                                <td><?php echo $result->mobile_no;?></td>
                                                <td>
                                                    <?php if($result->status == 0){ ?>
                                                        <label class="btn-sm btn-primary">Active</label>
                                                    <?php }else{ ?>
                                                        <label class="btn-sm btn-danger">In-Active</label>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <a herf="javascript:void(0);" onclick="edit(<?php echo $result->campus_id;?>);"><i style="font-size:25px" class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
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
                <h2 class="model-header-title"><strong id="popup_title">ADD CAMPUS</strong></h2>
            </div>

            <div class="modal-body">
            <form method="post" onSubmit="return validate('campus_form');" id="campus_form" action="<?php echo base_url();?>index.php/backend/master/campus/update">
                <input type="hidden" name="hidden_id" value="0" id="hidden_id">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Campus Name</label>
                            <input type="text" class="form-control field_required" id="campus_name" name="campus_name">
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Campus Address</label>
                            <textarea class="form-control field_required" id="campus_address" name="campus_address"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Principal Name</label>
                            <input type="text" class="form-control field_required" id="principal_name" name="principal_name">
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Mobile No.</label>
                            <input type="text" class="form-control field_required" id="mobile_no" name="mobile_no">
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Campus Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="0">Active</option>
                                <option value="1">In-Active</option>
                            </select>
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
    $('#popup_title').html('ADD CAMPUS');
    $('#popup_btn').html('SAVE');
    $('#hidden_id').val(0); 
    $('#campus_name').val('');
    $('#campus_address').val('');
    $('#principal_name').val('');
    $('#mobile_no').val('');
    $('#status').val(0);
    $('#myModal2').modal({ backdrop: 'static',keyboard: true,show: true });
}
function edit(id){
    $('#popup_title').html('');
    $('#popup_btn').html('');
    $('#popup_title').html('EDIT CAMPUS');
    $('#popup_btn').html('UPDATE');
    $('#hidden_id').val(0); 
    $('#campus_name').val('');
    $('#campus_address').val('');
    $('#principal_name').val('');
    $('#mobile_no').val('');
    $('#status').val(0);
    var dataString = "id="+id;
    $.ajax
    ({
    type: "POST",
    cache : false,
    url: "<?php echo base_url(); ?>index.php/backend/master/campus/edit",
    data: dataString,
    ashync: false,
    dataType:'json',
    success: function(data){ 
        $('#myModal2').modal({ backdrop: 'static',keyboard: true,show: true });
        $('#hidden_id').val(data.campus_id); 
        $('#campus_name').val(data.campus_name);
        $('#campus_address').val(data.campus_address);
        $('#principal_name').val(data.principal_name);
        $('#mobile_no').val(data.mobile_no);
        $('#status').val(data.status);
       }
     });
}

$(document).ready(function(){
    <?php if($this->session->flashdata('success_alert')){ ?>
        swal({
            title: "<?php echo $title;?>",
            text: "<?php echo $this->session->flashdata('success_alert');?>...!",
            timer: 2000,
            type: "success",
            showConfirmButton: false
        });
    <?php } ?>
    <?php if($this->session->flashdata('error_alert')){ ?>
        swal({
            title: "<?php echo $title;?>",
            text: "<?php echo $this->session->flashdata('error_alert');?>...!",
            timer: 2000,
            type: "error",
            showConfirmButton: false
        });
    <?php } ?>
});
</script>