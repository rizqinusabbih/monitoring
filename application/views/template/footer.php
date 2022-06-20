 <!-- footer content -->
 <footer>
     <div class="pull-right">
         ©2022 - <?php echo date('Y'); ?> All Rights Reserved
     </div>
     <div class="clearfix"></div>
 </footer>
 <!-- /footer content -->
 </div>
 </div>

 <!-- jQuery -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- FastClick -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/fastclick/lib/fastclick.js"></script>
 <!-- NProgress -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/nprogress/nprogress.js"></script>
 <!-- Chart.js -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/Chart.js/dist/Chart.min.js"></script>
 <!-- gauge.js -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/gauge.js/dist/gauge.min.js"></script>
 <!-- bootstrap-progressbar -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
 <!-- iCheck -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/iCheck/icheck.min.js"></script>
 <!-- Skycons -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/skycons/skycons.js"></script>
 <!-- Flot -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/Flot/jquery.flot.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/Flot/jquery.flot.pie.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/Flot/jquery.flot.time.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/Flot/jquery.flot.stack.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/Flot/jquery.flot.resize.js"></script>
 <!-- Flot plugins -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/flot.curvedlines/curvedLines.js"></script>
 <!-- DateJS -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/DateJS/build/date.js"></script>
 <!-- JQVMap -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
 <!-- bootstrap-daterangepicker -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/moment/min/moment.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
 <!-- Datatables -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/jszip/dist/jszip.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/pdfmake/build/pdfmake.min.js"></script>
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/pdfmake/build/vfs_fonts.js"></script>

 <!-- Custom Theme Scripts -->
 <script src="<?php echo base_url('assets/template/back/'); ?>build/js/custom.min.js"></script>

 <!-- Jquery Insert Checkbox USER ACCESS MENU -->
 <script>
     // Alert
     $(document).ready(function() {
         $(function() {
             setTimeout(function() {
                 if ($("#alert").is(":visible")) {
                     $("#alert").fadeOut("fast");
                 }
             }, 3000)

         });
     });

     $('.input-user-access').on('click', function() {
         var menu = $(this).data('menu');
         var level = $(this).data('level');

         $.ajax({
             url: "<?php echo base_url('admin/useraccess/changeaccess'); ?>",
             type: 'post',
             data: {
                 level: level,
                 menu: menu
             },

             success: function() {
                 alertTimeout('Update data berhasil', 2000);
             }
         });
     });

     function alertTimeout(mymsg, mymsecs) {
         var myelement = document.createElement("div");
         myelement.setAttribute("style", "background-color: green;color: white; width: 250px;height: 50px;position: absolute;top:15%;left:50%;border: 4px solid white;display: flex; align-items: center; justify-content: center; text-align: center;");
         myelement.innerHTML = mymsg;
         setTimeout(function() {
             myelement.parentNode.removeChild(myelement);
         }, mymsecs);
         document.body.appendChild(myelement);
     }
 </script>

 </body>

 </html>