<article class="post">
	<header>
        <div class="title">
            <h2><?php echo $data['judul']; ?></h2>
            <p>Kategory: <a href="#"><?php echo $data['nama_kat']; ?></a></p>
            <p><sub>Tag: <i><?php echo $data['tag']; ?></i></sub></p>
        </div>
        <div class="meta">
            <p>Posted By:</p>
            <a href="#" class="author"><span class="name"><?php echo $data['posted_by']; ?></span></a>
        </div>
    </header>
    <a href="#" class="image featured"><img src="<?php echo base_url($data['path']); ?>" alt="<?php echo $data['image']; ?>" width="840" height="400"/></a>
    <p><?php echo html_entity_decode($data['isi']); ?></p>
    <footer>
        <ul class="stats">
            <li><span class="icon fa-cogs"><?php echo $data['nama_kat']; ?></span></li>
            <li><span class="icon fa-user"><?php echo $data['posted_by']; ?></span></li>
            <li><span class="icon fa-hourglass-half"><?php echo $data['update_at']; ?></span></li>
            <?php 
                if ($nama == $data['posted_by']) {
             ?>
            <li><a href="#"><span class="fa fa-edit fa-2x"> Edit</span></a></li>
            <li><a href="#"><span class="fa fa-trash fa-2x"> Delete</span></a></li>
            <?php } ?>
        </ul>
    </footer>
</article>
