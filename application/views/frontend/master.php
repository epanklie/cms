<!DOCTYPE HTML>
<!--
    Future Imperfect by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
<?php 
    foreach ($website->result() as $key) {
 ?>
        <title><?php echo $title." | ".$key->website_name; ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="<?php echo base_url('res/dist/assets/css/main.css') ?>" />
    </head>
    <body>

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Header -->
                    <header id="header">
                        <h1><a href="<?php echo site_url(''); ?>"><?= $key->website_name ?></a></h1>
<?php } ?>
                        <nav class="links">
                            <ul>
                                <li><a href="<?php echo site_url(''); ?>"><span class="fa fa-home"></span> Home</a></li>
                                <li><a href="<?php echo site_url('page/contact'); ?>"><span class="fa fa-comment"></span> Contact</a></li>
                                <li><a href="<?php echo site_url('page/about'); ?>"><span class="fa fa-info-circle"></span> About</a></li>
                            </ul>
                        </nav>
                        <nav class="main">
                            <ul>
                                <li class="search">
                                    <a class="fa-search" href="#search">Search</a>
                                    <form id="search" method="get" action="<?php echo site_url('search'); ?>">
                                        <input type="text" name="q" placeholder="Search" />
                                    </form>
                                </li>
                                <li class="menu">
                                    <a class="fa-bars" href="#menu">Menu</a>
                                </li>
                            </ul>
                        </nav>
                    </header>
                    
                <!-- Menu -->
                <section id="menu">
                    <?php 
                        if ($nama) {
                            $this->load->view('frontend/body/kalo_login');
                        }
                        else{
                            $this->load->view('frontend/body/menu');
                        }
                     ?>
                </section>


               <!-- Set View -->
               <?php
                    $url = $this->uri->segment(2);
                    if ($url == "contact") {
                        $this->load->view('frontend/body/contact');
                    }
                    elseif ($url == "about") {
                        $this->load->view('frontend/body/about');
                    }
                    elseif ($url == "article") {
                        $this->load->view('frontend/body/view_article');
                    }
                    elseif ($url == "new_article") {
                        $this->load->view('frontend/body/bikin_article');
                    }
                    elseif ($this->uri->segment(1) == "search") {
                        $this->load->view('frontend/body/search');
                    }
                    else{
                        $this->load->view('frontend/body/home');
                    }
                ?>

            </div>

        <!-- Scripts -->
            <script src="<?php echo base_url('res/dist/assets/js/jquery.min.js'); ?>"></script>
            <script src="<?php echo base_url('res/ckeditor/ckeditor.js'); ?>"></script>
            <script src="<?php echo base_url('res/dist/assets/js/skel.min.js'); ?>"></script>
            <script src="<?php echo base_url('res/dist/assets/js/util.js'); ?>"></script>
            <script src="<?php echo base_url('res/dist/assets/js/main.js'); ?>"></script>
            <script src="<?php echo base_url('res/dist/assets/js/custom.js'); ?>"></script>
            <script type="text/javascript">
                CKEDITOR.replace( 'editor1' );
            </script>
    </body>
</html>