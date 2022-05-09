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
                                        <tr>
                                            <td>PRE KG</td>
                                            <td>
                                                <button class="btn-sm btn btn-primary"><i class="fa fa-edit" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-danger"><i class="fa fa-trash" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-info"><i class="fa fa-tags" aria-hidden="true" style="font-size: 15px"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>LKG</td>
                                            <td>
                                                <button class="btn-sm btn btn-primary"><i class="fa fa-edit" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-danger"><i class="fa fa-trash" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-info"><i class="fa fa-tags" aria-hidden="true" style="font-size: 15px"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>UKG</td>
                                            <td>
                                                <button class="btn-sm btn btn-primary"><i class="fa fa-edit" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-danger"><i class="fa fa-trash" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-info"><i class="fa fa-tags" aria-hidden="true" style="font-size: 15px"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>I</td>
                                            <td>
                                                <button class="btn-sm btn btn-primary"><i class="fa fa-edit" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-danger"><i class="fa fa-trash" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-info"><i class="fa fa-tags" aria-hidden="true" style="font-size: 15px"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>II</td>
                                            <td>
                                                <button class="btn-sm btn btn-primary"><i class="fa fa-edit" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-danger"><i class="fa fa-trash" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-info"><i class="fa fa-tags" aria-hidden="true" style="font-size: 15px"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">
                                                <input type="text" name="class_name" class="form-control" style="width: 80%;float: left;" placeholder="Enter the class name">
                                                <button style="padding: 13px 20px;margin-left: 4px;" class="btn-sm btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 15px"></i></button>
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
                                            <th colspan="2">Class Section - PRE KG</th>
                                            <th style="width: 20%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A</td>
                                            <td>CBSE</td>
                                            <td>
                                                <button class="btn-sm btn btn-primary"><i class="fa fa-edit" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-danger"><i class="fa fa-trash" aria-hidden="true" style="font-size: 15px"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>B</td>
                                            <td>ISTREAM</td>
                                            <td>
                                                <button class="btn-sm btn btn-primary"><i class="fa fa-edit" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-danger"><i class="fa fa-trash" aria-hidden="true" style="font-size: 15px"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>C</td>
                                            <td>IGCSE</td>
                                            <td>
                                                <button class="btn-sm btn btn-primary"><i class="fa fa-edit" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-danger"><i class="fa fa-trash" aria-hidden="true" style="font-size: 15px"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>D</td>
                                            <td>CBSE</td>
                                            <td>
                                                <button class="btn-sm btn btn-primary"><i class="fa fa-edit" aria-hidden="true" style="font-size: 15px"></i></button>
                                                <button class="btn-sm btn btn-danger"><i class="fa fa-trash" aria-hidden="true" style="font-size: 15px"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">
                                                <input type="text" name="section_name" class="form-control" style="width: 45%;float: left;" placeholder="Section name">
                                                <select  name="section_stream" class="form-control" style="width: 35%;float: left;">
                                                    <option value="">Select</option>
                                                    <option value="1">Matric</option>
                                                    <option value="2">CBSE</option>
                                                    <option value="3">ISTREAM</option>
                                                    <option value="4">IGCSE</option>
                                                </select>
                                                <button style="padding: 13px 20px;margin-left: 4px;" class="btn-sm btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 15px"></i></button>
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
</script>