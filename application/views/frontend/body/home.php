<!-- Main -->
<div id="main">

        <?php 
            if ($this->session->flashdata('session_login')) {
                echo "<h2 class='session_fade'>".$this->session->flashdata('session_login')."</h2>";
            }
            else if ($this->session->flashdata('success_article')) {
                echo "<h2 class='session_fade'>".$this->session->flashdata('success_article')."</h2>";
            }
         ?>
    <!-- Post -->
    <?php 
        foreach ($post as $key) {
     ?>
        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="<?php echo site_url('page/article/id/'.$key->id); ?>"><?php echo $key->judul; ?></a></h2>
                    <p>Kategory: <a href="#"><?php echo $key->nama_kat; ?></a></p>
                    <p><sub>Tag: <i><?php echo $key->tag; ?></i></sub></p>
                </div>
                <div class="meta">
                    <p>Posted By:</p>
                    <a href="#" class="author"><span class="name"><?php echo $key->posted_by; ?></span></a>
                </div>
            </header>
            <a href="<?php echo site_url('page/article/id/'.$key->id); ?>" class="image featured"><img src="<?php echo $key->path; ?>" alt="<?php echo $key->image; ?>" width="840" height="341" /></a>
            <p><?php echo word_limiter(html_entity_decode($key->isi), 50); ?></p>
            <footer>
                <ul class="actions">
                    <li><a href="<?php echo site_url('page/article/id/'.$key->id); ?>" class="button big">Continue Reading</a></li>
                </ul>
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