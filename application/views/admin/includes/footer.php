<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script>
    CKEDITOR.replace('editor1', {
     
    });
  </script>	
    <script src="<?php echo base_url(); ?>assets/assetsadmin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assetsadmin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/assetsadmin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/assetsadmin/js/plugins/jasny/jasny-bootstrap.min.js"></script>	
    <script src="<?php echo base_url(); ?>assets/assetsadmin/js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assetsadmin/js/sweetalert/sweetalert.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/assetsadmin/js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>assets/assetsadmin/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>assets/assetsadmin/js/plugins/pace/pace.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/assetsadmin/js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script>
    	$(document).ready(function(){

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $( '.uang' ).mask('000.000.000.000.000', {reverse: true});
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

    </body>

</html>