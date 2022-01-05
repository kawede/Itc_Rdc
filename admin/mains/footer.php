   <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span style="color:black; font-family:candara; font-weight:bold;">ITC-RDC</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
  <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="_login.php">se deconnecter</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
    <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
   <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/form-component.js"></script>


    <script type="text/javascript" src="datatables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
   // This function is called from the pop-up menus to transfer to
   // a different page. Ignore if the value returned is a null string:
   function goPage(newURL) {

     // if url is empty, skip the menu dividers and reset the menu selection to default
     if (newURL != "") {

       // if url is "-", it is this page -- reset the menu:
       if (newURL == "-") {
         resetMenu();
       }
       // else, send page to designated URL            
       else {
         document.location.href = newURL;
       }
     }
   }

   // resets the menu selection upon entry to this page:
   function resetMenu() {
     document.gomenu.selector.selectedIndex = 2;
   }

   <?php
    if (isAuthenticated()) :
    ?>
       setTimeout(function() {
         var form = document.createElement("form");
         var element1 = document.createElement("input");
         form.method = "POST";
         form.action = "";

         element1.value = true;
         element1.name = "logout";
         form.appendChild(element1);

         document.body.appendChild(form);

         form.submit();
       }, 900000);
 <?php
    endif;
  ?>
 </script>

</body>

</html>

