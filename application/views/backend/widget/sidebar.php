<section class="sidebar">
           
<!--                     <form action="#" method="get" class="sidebar-form"> -->
<!--                         <div class="input-group"> -->
<!--                             <input type="text" name="q" class="form-control" placeholder="Search..."/> -->
<!--                             <span class="input-group-btn"> -->
<!--                                 <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button> -->
<!--                             </span> -->
<!--                         </div> -->
<!--                     </form> -->
            
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Quản lý danh mục</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('admincp/listcate_img');?>"><i class="fa fa-angle-double-right"></i>Danh sách danh mục</a></li> 
                                 <li><a href="<?php echo site_url('admincp/addcate_img');?>"><i class="fa fa-angle-double-right"></i>Thêm mới danh mục</a></li> 
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Quản lý Nội dung</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Danh sách Nội dung</a></li> 
                                 <li><a href="#"><i class="fa fa-angle-double-right"></i>Thêm mới Nội dung</a></li> 
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Quản lý Album</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Danh sách Album</a></li> 
                                 <li><a href="#"><i class="fa fa-angle-double-right"></i>Thêm mới Album</a></li> 
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Quản lý Hình ảnh</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Danh sách hình ảnh</a></li> 
                                 <li><a href="#"><i class="fa fa-angle-double-right"></i>Thêm mới hình ảnh</a></li> 
                            </ul>
                        </li>
                         
                          <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Cấu hình website</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Thông tin website</a></li> 
                                 <li><a href="#"><i class="fa fa-angle-double-right"></i>SEO Tool</a></li> 
                            </ul>
                        </li>
                       
                        <li>
                            <a href="<?php echo site_url('admincp/logout');?>">
                                <span>Thoát</span>
<!--                                 <small class="badge pull-right bg-yellow">12</small> -->
                            </a>
                        </li>
                        
                    </ul>
                </section>