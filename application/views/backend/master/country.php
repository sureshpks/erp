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
                                <h3>Country</h3>
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
                                <h4 id="popup_title">Create Country</h4>                                                                      
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form method="post" onSubmit="return validate('country_form');" id="country_form" action="<?php echo base_url();?>index.php/backend/master/country/update">
                            <input type="hidden" name="hidden_id" value="0" id="hidden_id">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control field_required" id="country" name="country">
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Country Status</label>
                                        <select class="form-control" name="country_status" id="country_status">
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
                                    <th>Country</th>
                                    <th>Status</th>
                                    <th class="dt-no-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($results){ ?>
                                    <?php foreach($results as $key => $result){ ?>
                                        <tr>
                                            <td><?php echo $key+1;?></td>
                                            <td><?php echo $result->name;?></td>
                                             <td>
                                                <?php if($result->status == 0){ ?>
                                                    <label class="btn-sm btn-primary">Active</label>
                                                <?php }else{ ?>
                                                    <label class="btn-sm btn-danger">In-Active</label>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <a herf="javascript:void(0);" onclick="edit(<?php echo $result->country_id;?>);"><i style="font-size:25px" class="fa fa-edit"></i></a>
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
    $('#popup_title').html('Create Country');
    $('#popup_btn').html('SAVE');
    $('#hidden_id').val(0); 
    $('#country').val('');
    $('#country_status').val(0);
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

function edit(id){
    $('#popup_title').html('');
    $('#popup_btn').html('');
    $('#popup_title').html('Edit Country');
    $('#popup_btn').html('UPDATE');
    $('#hidden_id').val(0); 
    $('#country').val('');
    $('#country_status').val(0);
    var dataString = "id="+id;
    $.ajax
    ({
    type: "POST",
    cache : false,
    url: "<?php echo base_url(); ?>index.php/backend/master/country/edit",
    data: dataString,
    ashync: false,
    dataType:'json',
    success: function(data){ 
        $('#hidden_id').val(data.country_id); 
        $('#country').val(data.country);
        $('#country_status').val(data.country_status);
       }
     });
}
</script>