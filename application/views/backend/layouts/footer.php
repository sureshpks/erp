<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

</div>
    <!-- END MAIN CONTAINER -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    
    <script src="<?php echo base_url();?>bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="<?php echo base_url();?>plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>plugins/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="<?php echo base_url();?>plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/scrollspyNav.js"></script>
    <script src="<?php echo base_url();?>plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="<?php echo base_url();?>plugins/sweetalerts/custom-sweetalert.js"></script>
    <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            }
        } );
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
    <script type="text/javascript">
        function validate(form_id){
            var npattern = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/i;
            var epattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i; 
            var flag = true;
            $('#'+form_id).find('.field_required').each(function(){ 
                if($(this).val() == ''){
                     $(this).parent('div').addClass('has-danger');
                     $(this).addClass('forn-control-danger');
                     flag = false;
                }else{
                    if($(this).attr("data-id") == 'email'){
                        if(!epattern.test($(this).val())){
                            $(this).parent('div').addClass('has-danger');
                            $(this).addClass('forn-control-danger');
                            flag = false; 
                        }else{
                            $(this).parent('div').removeClass('has-danger');
                            $(this).removeClass('forn-control-danger');
                        }
                    }else{
                        $(this).parent('div').removeClass('has-danger');
                        $(this).removeClass('forn-control-danger');
                    }

                    if($(this).attr("data-id") == 'mobile_no'){
                        if(!npattern.test($(this).val())){
                            $(this).parent('div').addClass('has-danger');
                            $(this).addClass('forn-control-danger');
                            flag = false; 
                        }else{
                            $(this).parent('div').removeClass('has-danger');
                            $(this).removeClass('forn-control-danger');
                        }
                    }else{
                        $(this).parent('div').removeClass('has-danger');
                        $(this).removeClass('forn-control-danger');
                    }
                }
            });
            if(flag == false){
                swal({
                    title: "Oops...",
                    text: "Please Enter the Required Field...!",
                    timer: 2000,
                    type: "error",
                    showConfirmButton: false
                });
            }
            return flag;
        }
    </script>
</body>
</html>