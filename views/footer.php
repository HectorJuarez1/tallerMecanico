</div>
</div>
</div>

<!-- jQuery -->
<script src="<?php echo constant('URL'); ?>public/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo constant('URL'); ?>public/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo constant('URL'); ?>public/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo constant('URL'); ?>public/js/startmin.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo constant('URL'); ?>public/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?php echo constant('URL'); ?>public/js/dataTables/dataTables.bootstrap.min.js"></script>

<!-- sweetalert2 JavaScript -->
<script src="<?php echo constant('URL'); ?>public/sweetalert/dist/sweetalert2.all.min.js"></script>
<script src="<?php echo constant('URL'); ?>public/js/mensajes.js"></script>


<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
            language: {
                url: 'public/js/Spanish.json'
            }
        });
    });
</script>

</body>

</html>