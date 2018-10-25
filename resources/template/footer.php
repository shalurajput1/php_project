</div>
    <!--END MAIN WRAPPER -->
<?php if($active!="login"){?> 
    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  HighVirality &nbsp;2017 &nbsp;</p>
    </div>
    <!--END FOOTER -->
<?php  } ?>


    <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo $path ; ?>shared/plugins/jquery-2.0.3.min.js"></script>
     <script src="<?php echo $path ; ?>shared/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $path ; ?>shared/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS for dashboard -->
    <?php if($active==1){ ?>
    <script src="<?php echo $path ; ?>shared/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo $path ; ?>shared/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo $path ; ?>shared/plugins/flot/jquery.flot.time.js"></script>
     <script  src="<?php echo $path ; ?>shared/plugins/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo $path ; ?>shared/js/for_index.js"></script>
   <?php } ?>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!--Campaign Page-->
<?php if($active==2){ ?>
    <script src="<?php echo $path; ?>shared/plugins/jquery.fancybox-1.3.4/jquery-1.4.3.min.js"></script> <!--important for gallery-->
     <script src="<?php echo $path; ?>shared/plugins/jquery.fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js"></script> 
    <script src="<?php echo $path; ?>shared/plugins/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.js"></script>
     <script src="<?php echo $path; ?>shared/js/image_gallery.js"></script>
<?php } ?>
    <!-- end campaign page-->

      <!-- PAGE LEVEL SCRIPTS for my links -->
      <?php if($active==3){ ?>
    <script src="<?php echo $path ; ?>shared/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo $path ; ?>shared/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
    <?php } ?>
     <!-- END PAGE LEVEL SCRIPTS -->

 <!-- PAGE LEVEL SCRIPTS admin login -->
 <?php if($active=="login"){ ?>
      <script src="<?php echo $path;?>shared/plugins/jquery-2.0.3.min.js"></script>
      <script src="<?php echo $path;?>shared/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="<?php echo $path;?>shared/js/login.js"></script>
   <?php } ?>
      <!--END PAGE LEVEL SCRIPTS -->

 <!-- PAGE LEVEL SCRIPTS for article-->
 <?php if($active==4){ ?>
     <script src="<?php echo $path; ?>shared/plugins/wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="<?php echo $path; ?>shared/plugins/bootstrap-wysihtml5-hack.js"></script>
    <script src="<?php echo $path; ?>shared/plugins/CLEditor1_4_3/jquery.cleditor.min.js"></script>
    <script src="<?php echo $path; ?>shared/plugins/pagedown/Markdown.Converter.js"></script>
    <script src="<?php echo $path; ?>shared/plugins/pagedown/Markdown.Sanitizer.js"></script>
    <script src="<?php echo $path; ?>shared/plugins/Markdown.Editor-hack.js"></script>
    <script src="<?php echo $path; ?>shared/js/editorInit.js"></script>
    <script>
        $(function () { formWysiwyg(); });
        </script>
<?php } ?>
     <!--END PAGE LEVEL SCRIPTS -->

     <!-- PAGE LEVEL SCRIPTS for admin_payments -->
<?php if($active==6){ ?>
     <script src="<?php echo $path; ?>shared/plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="<?php echo $path; ?>shared/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="<?php echo $path; ?>shared/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
    <script src="<?php echo $path; ?>shared/js/validationInit.js"></script>
    <script>
        $(function () { formValidation(); });
        </script>
        <?php } ?>
     <!--END PAGE LEVEL SCRIPTS -->

        <!-- PAGE LEVEL SCRIPT for requested payments-->
<?php if($active==7){ ?>
 <script src="<?php echo $path; ?>shared/js/jquery-ui.min.js"></script>
 <script src="<?php echo $path; ?>shared/plugins/uniform/jquery.uniform.min.js"></script>
<script src="<?php echo $path; ?>shared/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="<?php echo $path; ?>shared/plugins/chosen/chosen.jquery.min.js"></script>
<script src="<?php echo $path; ?>shared/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="<?php echo $path; ?>shared/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="<?php echo $path; ?>shared/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="<?php echo $path; ?>shared/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo $path; ?>shared/plugins/daterangepicker/moment.min.js"></script>
<script src="<?php echo $path; ?>shared/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo $path; ?>shared/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo $path; ?>shared/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="<?php echo $path; ?>shared/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="<?php echo $path; ?>shared/plugins/autosize/jquery.autosize.min.js"></script>
<script src="<?php echo $path; ?>shared/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="<?php echo $path; ?>shared/js/formsInit.js"></script>
        <script>
            $(function () { formInit(); });
        </script>
        <?php } ?>
     <!--END PAGE LEVEL SCRIPT-->


     <!-- PAGE LEVEL STYLES for faculty house rules -->
    <?php if($active==10){ ?>
<script src="<?php echo $path; ?>shared/plugins/wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="<?php echo $path; ?>shared/plugins/bootstrap-wysihtml5-hack.js"></script>
    <script src="<?php echo $path; ?>shared/plugins/CLEditor1_4_3/jquery.cleditor.min.js"></script>
    <script src="<?php echo $path; ?>shared/plugins/pagedown/Markdown.Converter.js"></script>
    <script src="<?php echo $path; ?>shared/plugins/pagedown/Markdown.Sanitizer.js"></script>
    <script src="<?php echo $path; ?>shared/plugins/Markdown.Editor-hack.js"></script>
    <script src="<?php echo $path; ?>shared/js/editorInit.js"></script>
    <script>
        $(function () { formWysiwyg(); });
        </script>

    <?php } ?>
   
    <!-- END PAGE LEVEL  STYLES -->

</body>

    <!-- END BODY -->
</html>
