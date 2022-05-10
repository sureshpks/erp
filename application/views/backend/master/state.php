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
                                <h3>States</h3>
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
                                <h4 id="popup_title">Create State</h4>                                                                      
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form method="post" onSubmit="return form_validate();" id="state_form" action="<?php echo base_url();?>index.php/backend/master/state/update">
                            <input type="hidden" name="hidden_id" value="0" id="hidden_id">

                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>Country</b>
                                    <div class="form-group">
                                        <select class="form-control" name="country" id="country">
                                        <?php 

                                        foreach($country as $country)
                                        { 
                                          echo '<option value="'.$country->country_id.'" if>'.$country->country.'</option>';
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>State</b>
                                    <div class="form-group">
                                        <input type="text" class="form-control field_required" id="state" name="state">
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <b>State Status</b>
                                    <div class="form-group">
                                        <select class="form-control" name="state_status" id="state_status">
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
                                    <th>State</th>
                                    <th>Status</th>
                                    <th class="dt-no-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($results){ ?>
                                    <?php foreach($results as $key => $result){ ?>
                                        <tr>
                                            <td><?php echo $key+1;?></td>
                                            <td><?php echo $result->state;?></td>
                                             <td>
                                                <?php if($result->state_status == 0){ ?>
                                                    <label class="btn-sm btn-primary">Active</label>
                                                <?php }else{ ?>
                                                    <label class="btn-sm btn-danger">In-Active</label>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <a herf="javascript:void(0);" onclick="edit(<?php echo $result->state_id;?>);"><i style="font-size:25px" class="fa fa-edit"></i></a>
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
    $('#popup_title').html('Create State');
    $('#popup_btn').html('SAVE');
    $('#hidden_id').val(0); 
    $('#state').val('');
    $('#state_status').val(0);
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
    $('#state_form').find('.field_required').each(function(){ 
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
    $('#popup_title').html('Edit State');
    $('#popup_btn').html('UPDATE');
    $('#hidden_id').val(0); 
    $('#state').val('');
    $('#state_status').val(0);
    var dataString = "id="+id;
    $.ajax
    ({
    type: "POST",
    cache : false,
    url: "<?php echo base_url(); ?>index.php/backend/master/state/edit",
    data: dataString,
    ashync: false,
    dataType:'json',
    success: function(data){ 
        $('#hidden_id').val(data.state_id); 
        $('#country').val(data.country_id_fk).trigger("change");
        $('#state').val(data.state);
        $('#state_status').val(data.state_status);
       }
     });
}
</script>