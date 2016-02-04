<!-- Main -->
<div id="main">
    <!-- Post -->
    <?php 
    if ($this->session->flashdata('hasil_cari')) {
        echo "<h2>".$this->session->flashdata('hasil_cari')."</h2>";
    }
    ?>
    
    <?php
        foreach ($hasil_search as $key) {
     ?>
        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="#"><?php echo $key->judul; ?></a></h2>
                    <p>Kategory: <?php echo $key->nama_kat; ?></p>
                </div>
                <div class="meta">
                    <p>Posted By:</p>
                    <a href="#" class="author"><span class="name"><?php echo $key->posted_by; ?></span></a>
                </div>
            </header>
            <a href="#" class="image featured"><img src="<?php echo $key->path; ?>" alt="<?php echo $key->image; ?>" width="840" height="341" /></a>
            <p><?php echo $key->isi; ?></p>
            <footer>
                <ul class="stats">
                    <li><span class="icon fa-cogs"><?php echo $key->nama_kat; ?></span></li>
                    <li><span class="icon fa-user"><?php echo $key->posted_by; ?></span></li>
                    <li><span class="icon fa-hourglass-half"><?php echo $key->update_at; ?></span></li>
                </ul>
            </footer>
        </article>
    <?php } ?>
</div>


<?php 
    $this->load->view('frontend/body/sidebar');
 ?>