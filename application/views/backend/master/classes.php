<!--  BEGIN CONTENT AREA  -->
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm">
                <ul class="navbar-item flex-row search-ul">
                    <li class="nav-item align-self-center page-heading">
                        <div class="page-header">
                            <div class="page-title">
                                <h3>Class & Section</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </header>
        </div>
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area">
                            <form method="post" id="campus_form" action="<?php echo base_url();?>index.php/backend/master/classes">
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
                        <div class="col-xl-4 col-lg-4 col-sm-4  layout-spacing">
                            <div class="widget-content widget-content-area br-6">
                                <table class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Stream</th>
                                            <th style="width: 20%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($stream_results){?>
                                            <?php foreach($stream_results as $stream_val){?>
                                                <tr>
                                                    <td><?php echo $stream_val->stream_name;?></td>
                                                    <td>
                                                        <button class="btn-sm btn btn-primary" onclick="editStream(<?php echo $stream_val->stream_id;?>);"><i class="fa fa-edit" aria-hidden="true" style="font-size: 15px"></i></button>
                                                        <!-- <button class="btn-sm btn btn-danger" onclick="deleteStream(<?php echo $stream_val->stream_id;?>);"><i class="fa fa-trash" aria-hidden="true" style="font-size: 15px"></i></button> -->
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">
                                                <form method="post" onSubmit="return stream_form_validate();" id="stream_form" action="<?php echo base_url();?>index.php/backend/master/classes/stream_update">
                                                    <input type="hidden" name="stream_id" id="stream_id" value="0">
                                                    <input type="hidden" name="stream_campus" id="stream_campus" value="<?php echo $campus_id;?>">
                                                    <input type="text" name="stream_name" id="stream_name" class="form-control field_required" style="width: 80%;float: left;" placeholder="Enter the Stream Name">
                                                    <button type="submit" style="padding: 13px 20px;margin-left: 4px;" class="btn-sm btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 15px"></i></button>
                                                </form>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-4  layout-spacing">
                            <div class="widget-content widget-content-area br-6">
                                <table class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Class</th>
                                            <th style="width: 20%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($class_results){?>
                                            <?php foreach($class_results as $class_val){?>
                                                <tr>
                                                    <td><?php echo $class_val->class_name;?></td>
                                                    <td>
                                                        <button class="btn-sm btn btn-primary" onclick="editClass(<?php echo $class_val->class_id;?>);"><i class="fa fa-edit" aria-hidden="true" style="font-size: 15px"></i></button>
                                                        <!-- <button class="btn-sm btn btn-danger"><i class="fa fa-trash" aria-hidden="true" style="font-size: 15px"></i></button>
                                                        <button class="btn-sm btn btn-info"><i class="fa fa-tags" aria-hidden="true" style="font-size: 15px"></i></button> -->
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">
                                                <form method="post" onSubmit="return class_form_validate();" id="class_form" action="<?php echo base_url();?>index.php/backend/master/classes/class_update">
                                                    <input type="hidden" name="class_id" id="class_id" value="0">
                                                    <input type="hidden" name="class_campus" id="class_campus" value="<?php echo $campus_id;?>">
                                                    <input type="text" name="class_name" id="class_name" class="form-control field_required" style="width: 80%;float: left;" placeholder="Enter the class name">
                                                    <button type="submit" style="padding: 13px 20px;margin-left: 4px;" class="btn-sm btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 15px"></i></button>
                                                </form>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-4  layout-spacing">
                            <div class="widget-content widget-content-area br-6">
                                <table class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Class Section</th>
                                            <th style="width: 20%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($class_section_results){?>
                                            <?php foreach($class_section_results as $class_section_val){?>
                                                <tr>
                                                    <td><?php echo $class_section_val->class_section_name;?></td>
                                                    <td>
                                                        <button class="btn-sm btn btn-primary" onclick="classSectionEdit(<?php echo $class_section_val->class_section_id;?>);"><i class="fa fa-edit" aria-hidden="true" style="font-size: 15px"></i></button>
                                                        <!-- <button class="btn-sm btn btn-danger"><i class="fa fa-trash" aria-hidden="true" style="font-size: 15px"></i></button> -->
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">
                                                <form method="post" onSubmit="return class_section_form_validate();" id="class_section_form" action="<?php echo base_url();?>index.php/backend/master/classes/class_section_update">
                                                    <input type="hidden" name="class_section_id" id="class_section_id" value="0">
                                                    <input type="hidden" name="class_section_campus" id="class_section_campus" value="<?php echo $campus_id;?>">
                                                    <input type="text" name="class_section_name" id="class_section_name" class="form-control field_required" style="width: 80%;float: left;" placeholder="Section name">
                                                    
                                                    <button type="submit" style="padding: 13px 20px;margin-left: 4px;" class="btn-sm btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 15px"></i></button>
                                                </form>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
<script type="text/javascript">
$(document).ready(function(){
    $('#stream_id').val(0);
    $('#stream_name').val('');
    $('#stream_campus').val('<?php echo $campus_id;?>');
    $('#class_id').val(0);
    $('#class_name').val('');
    $('#class_campus').val('<?php echo $campus_id;?>');
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
//STREAM SCTION
function stream_form_validate(){ 
    var flag = true;
    $('#stream_form').find('.field_required').each(function(){ 
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

function editStream(id){
    $('#stream_id').val(0); 
    $('#stream_name').val('');
    var dataString = "id="+id;
    $.ajax
    ({
    type: "POST",
    cache : false,
    url: "<?php echo base_url(); ?>index.php/backend/master/classes/stream_edit",
    data: dataString,
    ashync: false,
    dataType:'json',
    success: function(data){ 
        $('#stream_id').val(data.stream_id); 
        $('#stream_name').val(data.stream_name);
       }
     });
}

//CLASS SECTION
function class_form_validate(){ 
    var flag = true;
    $('#class_form').find('.field_required').each(function(){ 
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

function editClass(id){
    $('#class_id').val(0); 
    $('#class_name').val('');
    var dataString = "id="+id;
    $.ajax
    ({
    type: "POST",
    cache : false,
    url: "<?php echo base_url(); ?>index.php/backend/master/classes/class_edit",
    data: dataString,
    ashync: false,
    dataType:'json',
    success: function(data){ 
        $('#class_id').val(data.class_id); 
        $('#class_name').val(data.class_name);
       }
     });
}
//CLASS SECTION SECTION
function class_section_form_validate(){ 
    var flag = true;
    $('#class_section_form').find('.field_required').each(function(){ 
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

function classSectionEdit(id){
    $('#class_section_id').val(0); 
    $('#class_section_name').val('');
    var dataString = "id="+id;
    $.ajax
    ({
    type: "POST",
    cache : false,
    url: "<?php echo base_url(); ?>index.php/backend/master/classes/class_section_edit",
    data: dataString,
    ashync: false,
    dataType:'json',
    success: function(data){ 
        $('#class_section_id').val(data.class_section_id); 
        $('#class_section_name').val(data.class_section_name);
       }
     });
}
</script>