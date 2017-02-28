 </div> <!---.container -->   
  </div> <!----#page --->
  
 <footer class="site-footer" role="contentinfo">
     
      <nav id="footer-navigation" class="footer-navigation" role="navigation">
               
               
               <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
               
           </nav>
     
     <hr>
     <div class="copyright">
         <p>TorontoOnline <?php echo date('Y'); ?></p>
     </div>
     
     <?php wp_footer(); ?>
 </footer>
 
</body>
</html>