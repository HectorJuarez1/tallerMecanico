                                  
                    </div>
                </main>
               
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo constant('URL'); ?>public/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?php echo constant('URL'); ?>public/js/datatables-simple-demo.js"></script>
        
<script>
            //Autoclose
            window.setTimeout(function() {
                $(".alert").fadeTo(1500, 0).slideDown(1000, function() {
                    $(this).remove();
                });
            }, 1000); //1 segundos y desaparece
        </script>



</body>

</html>