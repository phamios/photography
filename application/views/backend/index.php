<!DOCTYPE html>
<html>
   <?php $this->load->view('backend/widget/header');?>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="#" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
               Admin Cpanel
            </a> 
            <nav class="navbar navbar-static-top" role="navigation">
         
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas"> 
                <?php $this->load->view('backend/widget/sidebar');?> 
            </aside>
 
            <aside class="right-side"> 
                <section class="content">
 					<?php if ($this->router->fetch_method() == 'index'): ?>
		            	<?php $this->load->view("backend/home"); ?> 
		          <?php endif; ?> 
		          <?php if ($this->router->fetch_method() == 'listcate'): ?>
		            	<?php $this->load->view("backend/cate_image"); ?> 
		          <?php endif; ?> 
                </section> 
            </aside> 
        </div> 

       <?php $this->load->view('backend/widget/js_footer');?>
    </body>
</html>