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
 <!-- iCheck -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/iCheck/icheck.min.js"></script>
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
 <!-- Morris Chart -->
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 <!-- Chart.js -->
 <script src="<?php echo base_url('assets/template/back/'); ?>vendors/Chart.js/dist/Chart.min.js"></script>

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
     $('#id_prestasi').change(function() {
         pointPrestasi();
     });
     $('#id_pelanggaran').change(function() {
         poinPelanggaran();
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

     //  point prestasi
     function pointPrestasi() {
         var prestasi = $('#id_prestasi').val();
         if (prestasi) {
             $.ajax({
                 type: "GET",
                 url: "<?php echo base_url(); ?>admin/mprestasi/updateFormData",
                 data: {
                     dataprestasi: prestasi
                 },
                 success: function(response) {
                     var result = JSON.parse(response);
                     console.log(result);
                     $("#jml_point").val(result.jml_point);
                 },
                 error: function() {
                     console.log('update form err');
                 }
             });
         }
     }

     //  poin pelanggaran
     function poinPelanggaran() {
         var pelanggaran = $('#id_pelanggaran').val();
         if (pelanggaran) {
             $.ajax({
                 type: "GET",
                 url: "<?php echo base_url(); ?>admin/mpelanggaran/updateFormData",
                 data: {
                     datapelanggaran: pelanggaran
                 },
                 success: function(response) {
                     var result = JSON.parse(response);
                     console.log(result);
                     $("#jml_poin").val(result.jml_poin);
                 },
                 error: function() {
                     console.log('update form err');
                 }
             });
         }
     }
 </script>

 <!-- Morris Chart -->
 <script>
     Morris.Donut({
         element: 'pie-chart',
         data: [{
                 label: "Prestasi",
                 value: <?php echo $all_prestasi; ?>
             },
             {
                 label: "Pelanggaran",
                 value: <?php echo $all_pelanggaran; ?>
             }
         ]
     });

     Morris.Donut({
         element: 'total-monitoring',
         data: [{
                 label: "Prestasi",
                 value: <?php echo $all_prestasi; ?>
             },
             {
                 label: "Pelanggaran",
                 value: <?php echo $all_pelanggaran; ?>
             }
         ]
     });
 </script>

 </body>

 </html>