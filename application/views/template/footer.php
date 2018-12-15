</div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/popper.js/dist/umd/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>


    <script src="<?php echo base_url('assets/vendors/chart.js/dist/Chart.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/dashboard.js');?>"></script>
    <script src="<?php echo base_url('assets/js/widgets.js');?>"></script>
<!--     <script src="<?php echo base_url('assets/vendors/jqvmap/dist/jquery.vmap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js');?>"></script>
 -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/jszip/dist/jszip.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/pdfmake/build/pdfmake.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/pdfmake/build/vfs_fonts.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.print.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.colVis.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/init-scripts/data-table/datatables-init.js');?>"></script>
    <script>
    jQuery(document).ready(function($) {
      $('.modal').on('hidden.bs.modal', function () {
    $(this).find('input').val('');
    });
     $('#btn_faculty').on('click', function(){
              var ffname = $('#ffname').val();
              var fmname = $('#fmname').val();
              var flname = $('#flname').val();
              var fcontact = $('#fcontact').val();
              var fposition = $('#fposition').val();
              var fdepCode = $('#fdepCode').val();
              $.ajax({
                  type: 'post',
                  url: "<?php echo site_url('welcome_admin/addFaculty'); ?>",
                  data: {
                        fname: ffname,
                        mname: fmname,
                        lname: flname,
                        contact: fcontact,
                        position: fposition,
                        depCode: fdepCode
                  },
                dataType: 'JSON',
                success: function(data){
                    if (data.status) {
                        alert("Faculty successfully added!");
                        location.reload();
                        $('#addfaculty').modal('hide');
                    }else{
                        $('.alert').css('display', 'block');
                        $('.alert').html(data.notif);   
                    }
                },
                error: function(request, status, error){
                  alert(request.responseText);
                }
            });return false;
          });
     
     $('#btn_department').on('click', function(){
              var depName = $('#ddepname').val();
              var depCode = $('#ddepcode').val();
              $.ajax({
                  type: 'post',
                  url: "<?php echo site_url('welcome_admin/addDepartment'); ?>",
                  data: {
                        depname: depName,
                        depcode: depCode
                  },
                dataType: 'JSON',
                success: function(data){
                    if (data.status) {
                        alert("Department successfully added!");
                        location.reload();
                        $('#adddepartment').modal('hide');
                    }else{
                        $('.alert').css('display', 'block');
                        $('.alert').html(data.notif);   
                    }
                },
                error: function(request, status, error){
                  alert(request.responseText);
                }
            });return false;
          });
     $('#btn_subject').on('click', function(){
              var subj_code = $('#subcode').val();
              var subj_name = $('#subname').val();
              var units = $('#units').val();
              var hrs = $('#hrs').val();
              var type = $('#type').val();
              $.ajax({
                  type: 'post',
                  url: "<?php echo site_url('welcome_admin/addSubject'); ?>",
                  data: {
                        subj_code: subj_code,
                        subj_name: subj_name,
                        units: units,
                        hrs: hrs,
                        type: type
                  },
                dataType: 'JSON',
                success: function(data){
                    if (data.status) {
                        alert("Subject successfully added!");
                        location.reload();
                        $('#addsubjects').modal('hide');
                    }else{
                        $('.alert').css('display', 'block');
                        $('.alert').html(data.notif);   
                    }
                },
                error: function(request, status, error){
                  alert(request.responseText);
                }
            });return false;
          });
     $('#editsub').on('click', function(){
              alert($(this).val());
              var id = $(this).val(); 
              $.ajax({
                  type: 'post',
                  url: "<?php echo site_url('welcome_admin/getSubject'); ?>",
                  data: {
                        id: id
                  },
                dataType: 'JSON',
                success: function(data){
                    // if (data.status) {
                    //     alert("Subject successfully added!");
                    //     location.reload();
                    //     $('#addsubjects').modal('hide');
                    // }else{
                    //     $('.alert').css('display', 'block');
                    //     $('.alert').html(data.notif);   
                    // }
                    console.log(data);   
                },
                error: function(request, status, error){
                  alert(request.responseText);
                }
          });

      });
    });
    </script>
    
</body>

</html>
