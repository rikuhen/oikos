    <!-- Footer -->
    <footer id="footer" class="main-color py-4">
        <div class="container">
            <div class="row">
                <?php if(is_active_sidebar( 'sidebar-footer-1' ))  : ?>
                    <div class="col-md-6 col-12">
                        <?php dynamic_sidebar( 'sidebar-footer-1' )  ?>
                    </div>
                <?php endif; ?>
                
                <?php if(is_active_sidebar( 'sidebar-footer-1' ))  : ?>
                    <div class="col-md-6 col-12">
                        <?php dynamic_sidebar( 'sidebar-footer-2' ) ?>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>
    </footer>
    <?php wp_footer() ?>
    </body>
</html>