<!-- Jika sudah login -->
<section>
    <h2>Hai, <?php echo $nama; ?></h2>
    <div class="12u$">
        <ul class="actions vertical">
            <li><a href="<?php echo site_url('page/new_article'); ?>" class="button big fit"><span class="fa fa-edit"></span> Create a New Article</a></li>
        </ul>
        <ul class="actions">
        <?php 
        	if ($this->session->userdata('level') == "1") {
        		echo "<li><a href=".site_url('dashboard')." class='button'><span class='fa fa-cog'></span> Dashboard</a></li>";
        	}
         ?>
            <li><a href="<?php echo site_url('logout'); ?>" class="button"><span class="fa fa-sign-out"></span> Logout</a></li>
        </ul>
    </div>
</section>