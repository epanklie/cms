<!DOCTYPE html>
<html>
<head>
        <?php 
            foreach ($website->result() as $key) {
         ?>
        <title><?php echo $title." | ".$key->website_name." Dashboard"; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/back_end/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/back_end/dist/css/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/back_end/dist/css/ionicons.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/back_end/plugins/select2/select2.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/back_end/dist/css/AdminLTE.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/back_end/dist/css/skins/_all-skins.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/back_end/plugins/iCheck/flat/blue.css'); ?>">
        <script type="text/javascript" src="<?php echo base_url('res/back_end/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script>
</head>
<body class="skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
                <a href="<?php echo site_url('dashboard'); ?>" class="logo">
                    <span class="logo-lg"><strong>Dashboard</strong> Admin</span>
                    <span class="logo-mini"><strong>DA</strong></span>
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu" style="right: 35px;">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url('res/back_end/dist/img/user2-160x160.jpg'); ?>" class="user-image" alt="User Image" />
                                    <span class="hidden-xs"><?php echo $nama; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src="<?php echo base_url('res/back_end/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image" />
                                        <p>
                                            <?php echo $nama; ?>
                                            <small>Admin of <?php echo $key->website_name; ?></small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <form action="<?php echo site_url('logout'); ?>">
                                            <div class="pull-left">
                                                <a href="<?php echo site_url(''); ?>" class="btn btn-default"><?php echo $key->website_name; ?></a>
                                            </div>
                                            <div class="pull-right">
                                                <button type="submit" class="btn btn-primary">Logout</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
       
            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url('res/back_end/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $nama; ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-newspaper-o"></i><span>Content</span><i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('dashboard/content'); ?>"><i class="fa fa-list-alt"></i><span> List Content</span></a></li>
                                <li><a href="<?php echo site_url('dashboard/new_content'); ?>"><i class="fa fa-plus"></i><span> Add New Content</span></a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo site_url('dashboard/contact_admin'); ?>"><i class="fa fa-send-o"></i><span>Contact</span></a></li>
                                                
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-tag"></i><span>Tag</span><i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('dashboard/tag'); ?>"><i class="fa fa-tags"></i><span> List Tag</span></a></li>
                                <li><a href="#"><i class="fa fa-plus"></i><span> Add New Tag</span></a></li>
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-comments-o"></i><span>Social Media</span><i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('dashboard/sosmed'); ?>"><i class="fa fa-th-list"></i><span>List Social Media</span></a></li>
                                <li><a href="<?php echo site_url('dashboard/new_sosmed'); ?>"><i class="fa fa-plus"></i><span>Add New Social Media</span></a></li>
                            </ul>
                        </li>
                        
                        <li><a href="<?php echo site_url('dashboard/about'); ?>"><i class="fa fa-archive"></i><span>About</span></a></li>

                        <li class="header">APPEARANCE</li>

                        <li><a href="<?php echo site_url('dashboard/user'); ?>"><i class="fa fa-users"></i><span>User</span></a></li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-gear"></i><span>Settings</span><i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('dashboard/detail'); ?>"><i class="fa fa-info-circle"></i><span>Detail</span></a></li>
                            </ul>
                        </li>

                    </ul>
                </section>
            </aside>
       
            <div class="content-wrapper">
                    <section class="content-header">
                        <h1><?php echo $title; ?></h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active"><?php echo $title; ?></li>
                        </ol>
                    </section>
                    
                    <section class="content">
                        <!-- <asp:ContentPlaceHolder ID="InBody" runat="server">
                        </asp:ContentPlaceHolder> -->
                        <?php 
                            if($this->uri->segment(2)=='user'){
                                $this->load->view('backend/body/user');
                            }
                            else if($this->uri->segment(2)=='content'){
                                $this->load->view('backend/body/content');
                            }
                            else if($this->uri->segment(2)=='contact_admin'){
                                $this->load->view('backend/body/contact');
                            }
                            else if($this->uri->segment(2)=='search_content'){
                                $this->load->view('backend/body/search');
                            }
                            else if($this->uri->segment(2)=='detail'){
                                $this->load->view('backend/body/detail');
                            }
                            else if($this->uri->segment(2)=='sosmed'){
                                $this->load->view('backend/body/sosmed');
                            }
                            else if($this->uri->segment(2)=='menu'){
                                $this->load->view('backend/body/menu');
                            }
                            else if ($this->uri->segment(2)=='edit_sosmed') {
                                $this->load->view('backend/body/edit_sosmed');
                            }
                            else if ($this->uri->segment(2)=='tag') {
                                $this->load->view('backend/body/tag');
                            }
                            else if ($this->uri->segment(2)=='about') {
                                $this->load->view('backend/body/about');
                            }

                            /*All Link's New*/
                            else if ($this->uri->segment(2)=="new_sosmed") {
                                $this->load->view('backend/body/new_sosmed');
                            }
                            else if ($this->uri->segment(2)=="new_user") {
                                $this->load->view('backend/body/new_user');
                            }
                            else if ($this->uri->segment(2)=="new_content") {
                                $this->load->view('backend/body/new_content');
                            }
                            else{
                                $this->load->view('backend/body/dashboard');
                            }
                         ?>
                    <div class="row">&nbsp;</div>
                    </section>
                </div>
                <footer class="main-footer">
                    <strong>Copyright © <?php echo date("Y"); ?> <a href="<?php echo site_url(''); ?>"><?php echo $key->website_name; ?></a>.</strong> All rights reserved.
                    <?php } ?>
                </footer>
    </div>
    <script type="text/javascript" src="<?php echo base_url('res/back_end/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('res/back_end/plugins/select2/select2.full.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('res/ckeditor/ckeditor.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('res/back_end/plugins/fastclick/fastclick.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('res/back_end/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('res/back_end/dist/js/app.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('res/back_end/dist/js/demo.js'); ?>"></script>
    <script>
        $(function () {
            $(".select2").select2();
        });
        CKEDITOR.replace('editor1');
    </script>
</body>
</html>