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
                                <h3>Blood Group</h3>
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
                                <h4 id="popup_title">Create Blood Group</h4>                                                                      
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form method="post" onSubmit="return form_validate();" id="blood_group_form" action="<?php echo base_url();?>index.php/backend/master/blood_group/update">
                            <input type="hidden" name="hidden_id" value="0" id="hidden_id">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>Blood Group</b>
                                    <div class="form-group">
                                        <input type="text" class="form-control field_required" id="blood_group" name="blood_group">
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>Blood Group Status</b>
                                    <div class="form-group">
                                        <select class="form-control" name="blood_group_status" id="blood_group_status">
                                            <option value="0">Active</option>
                                            <option value="1">In-Active</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group" style="float: right;">
                                        <button type="submit" id="popup_btn" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="widget-content widget-content-area br-6">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Blood Group</th>
                                    <th>Status</th>
                                    <th class="dt-no-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($results){ ?>
                                    <?php foreach($results as $key => $result){ ?>
                                        <tr>
                                            <td><?php echo $key+1;?></td>
                                            <td><?php echo $result->blood_group;?></td>
                                             <td>
                                                <?php if($result->blood_group_status == 0){ ?>
                                                    <label class="btn-sm btn-primary">Active</label>
                                                <?php }else{ ?>
                                                    <label class="btn-sm btn-danger">In-Active</label>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <a herf="javascript:void(0);" onclick="edit(<?php echo $result->blood_group_id;?>);"><i style="font-size:25px" class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
<script type="text/javascript">
$(document).ready(function(){
    $('#popup_title').html('');
    $('#popup_btn').html('');
    $('#popup_title').html('Create Blood Group');
    $('#popup_btn').html('SAVE');
    $('#hidden_id').val(0); 
    $('#blood_group').val('');
    $('#blood_group_status').val(0);
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
function form_validate(){ 
    var flag = true;
    $('#blood_group_form').find('.field_required').each(function(){ 
        if($(this).val() == ''){
             $(this).parent('div').addClass('has-danger');
             $(this).addClass('forn-control-danger');
             flag = false;
             swal({
                title: "Oops...",
                text: "Please Enter the Required Field...!",
                timer: 2000,
                type: "error",
                showConfirmButton: false
             });
        }else{
            $(this).parent('div').removeClass('has-danger');
             $(this).removeClass('forn-control-danger');
        }
    });
    return flag;
}
function edit(id){
    $('#popup_title').html('');
    $('#popup_btn').html('');
    $('#popup_title').html('Edit Blood Group');
    $('#popup_btn').html('UPDATE');
    $('#hidden_id').val(0); 
    $('#blood_group').val('');
    $('#blood_group_status').val(0);
    var dataString = "id="+id;
    $.ajax
    ({
    type: "POST",
    cache : false,
    url: "<?php echo base_url(); ?>index.php/backend/master/blood_group/edit",
    data: dataString,
    ashync: false,
    dataType:'json',
    success: function(data){ 
        $('#hidden_id').val(data.blood_group_id); 
        $('#blood_group').val(data.blood_group);
        $('#blood_group_status').val(data.blood_group_status);
       }
     });
}
</script>