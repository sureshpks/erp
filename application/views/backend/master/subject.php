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
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area">
                    <form method="post" id="campus_form" action="<?php echo base_url();?>index.php/backend/master/subject">
                        <div class="row">
                            <div class="form-group col-md-4" style="margin-left: 20px;margin-top: 15px;">
                                <label>Campus</label>
                                <select class="form-control" name="campus" style="height: 36px;padding: 5px;">
                                    <option value="0" <?php echo ($campus_id == 0)?'selected':''; ?>>Select Campus</option>
                                    <?php if($campus_results){?>
                                        <?php foreach($campus_results as $campus_val){?>
                                            <option value="<?php echo $campus_val->campus_id;?>" <?php echo ($campus_id == $campus_val->campus_id)?'selected':''; ?>><?php echo $campus_val->campus_name;?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4" style="margin-top: 10px;">
                                <button name="submit" type="submit" value="submit" class="btn btn-primary" style="margin-top: 34px;"><i class="fa fa-search"></i>&numsp;Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php if($campus_id !=0){ ?>
                <div class="row">
                    <div class="col-md-4">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row clearfix">
                                    <h4 id="popup_title">Create Subject</h4>                                                                      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form method="post" onSubmit="return form_validate();" id="subject_form" action="<?php echo base_url();?>index.php/backend/master/subject/update">
                                <input type="hidden" name="subject_id" value="0" id="subject_id">
                                <input type="hidden" name="campus_id" value="0" id="campus_id">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <b>Subject Name</b>
                                        <div class="form-group">
                                            <input type="text" class="form-control field_required" id="subject_name" name="subject_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <b>Subject Code</b>
                                        <div class="form-group">
                                            <input type="text" class="form-control field_required" id="subject_code" name="subject_code">
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
                                            <select class="form-control field_required" name="class_id_fk" id="class_id_fk">
                                                <option value="">-Select-</option>
                                                <?php if($class_results){ ?>
                                                    <?php foreach($class_results as $class_val){ ?>
                                                        <option value="<?php echo $class_val->class_id;?>"><?php echo $class_val->class_name;?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <b>Stream</b>
                                        <div class="form-group">
                                            <select class="form-control field_required" name="stream_id_fk" id="stream_id_fk">
                                                <option value="">-Select-</option>
                                                 <?php if($stream_results){ ?>
                                                    <?php foreach($stream_results as $stream_val){ ?>
                                                        <option value="<?php echo $stream_val->stream_id;?>"><?php echo $stream_val->stream_name;?></option>
                                                    <?php } ?>
                                                <?php } ?>
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
                                        <th>Subject</th>
                                        <th>Code</th>
                                        <th>Type</th>
                                        <th>Class</th>
                                        <th>Stream</th>
                                        <th>Status</th>
                                        <th class="dt-no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($results){ ?>
                                        <?php foreach($results as $key => $result){ ?>
                                            <tr>
                                                <td><?php echo $key+1;?></td>
                                                <td><?php echo $result->subject_name;?></td>
                                                <td><?php echo $result->subject_code;?></td>
                                                <td><?php echo $result->subject_type;?></td>
                                                <td><?php echo get_val('class_name','class_id',$result->class_id_fk,'erp_class');?></td>
                                                <td><?php echo get_val('stream_name','stream_id',$result->stream_id_fk,'erp_stream');?></td>
                                                <td>
                                                    <?php if($result->subject_status == 0){ ?>
                                                        <label class="btn-sm btn-primary">Active</label>
                                                    <?php }else{ ?>
                                                        <label class="btn-sm btn-danger">In-Active</label>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <a herf="javascript:void(0);" onclick="editSubject(<?php echo $result->subject_id;?>);"><i style="font-size:25px" class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } ?>
<script type="text/javascript">
$(document).ready(function(){
    $('#subject_id').val(0);
    $('#subject_name').val('');
    $('#subject_code').val('');
    $('#subject_type').val('Theory');
    $('#class_id_fk').val('');
    $('#stream_id_fk').val('');
    $('#subject_status').val(0);
    $('#campus_id').val('<?php echo $campus_id;?>');
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
    $('#subject_form').find('.field_required').each(function(){ 
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

function editSubject(id){
    $('#subject_id').val(0);
    $('#subject_name').val('');
    $('#subject_code').val('');
    $('#subject_type').val('Theory');
    $('#class_id_fk').val('');
    $('#stream_id_fk').val('');
    $('#subject_status').val(0);
    var dataString = "id="+id;
    $.ajax
    ({
    type: "POST",
    cache : false,
    url: "<?php echo base_url(); ?>index.php/backend/master/subject/edit",
    data: dataString,
    ashync: false,
    dataType:'json',
    success: function(data){ 
        $('#subject_id').val(data.subject_id);
        $('#subject_name').val(data.subject_name);
        $('#subject_code').val(data.subject_code);
        $('#subject_type').val(data.subject_type);
        $('#class_id_fk').val(data.class_id_fk);
        $('#stream_id_fk').val(data.stream_id_fk);
        $('#subject_status').val(data.subject_status);
       }
     });
}
</script>