<!-- Sidebar -->
<section id="sidebar">

    <!-- Intro -->
        <section id="intro">
            <a href="#" class="logo"><img src="<?php echo base_url('res/dist/images/logo.jpg'); ?>" alt="" /></a>
            <?php
                foreach ($website->result() as $key) {
             ?>
            <header>
                <h2><?php echo $key->website_name; ?></h2>
                <p><?php echo $key->website_description; ?></p>
            </header>
            <?php } ?>
        </section>

    <!-- Mini Posts -->
        <section>
            <div class="mini-posts">

                <!-- Mini Post -->
                <?php 
                    foreach ($post_rand as $key) {
                 ?>
                    <article class="mini-post">
                        <header>
                            <h3><a href="<?php echo site_url('page/article/id/'.$key->id); ?>"><?php echo $key->judul; ?></a></h3>
                            <p>Posted By: <?php echo $key->posted_by; ?></p>
                            <time class="published"><?php echo $key->update_at; ?></time>
                        </header>
                        <a href="<?php echo site_url('page/article/id/'.$key->id); ?>" class="image"><img src="<?php echo $key->path ?>" alt="<?php echo $key->image; ?>" width="351" height="176" /></a>
                    </article>
                <?php } ?>
                
            </div>
        </section>

    <!-- About -->
        <section class="blurb">
            <h2>About</h2>
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
            <ul class="actions">
                <li><a href="<?php echo site_url('page/about'); ?>" class="button">Learn More</a></li>
            </ul>
        </section>

    <!-- Footer -->
        <section id="footer">
            <ul class="icons">
                <?php 
                    foreach ($sosmed->result() as $key) {
                 ?>
                <li><a href="<?php echo $key->url; ?>" class="<?php echo $key->icon; ?>" title="<?php echo $key->title; ?>"><span class="label"><?php echo $key->title; ?></span></a></li>
                <?php } ?>
            </ul>
        </section>

</section>