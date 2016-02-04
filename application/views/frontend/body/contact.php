<article class="post">
	<h2>Contact Us</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<section>
        <!-- Register Form -->
        <form method="post" action="<?php echo site_url('page/message'); ?>">
            <div class="row uniform">    
                <?php 
                    if (!$level) {
                ?>
                    <div class="8u$">
                        <input type="text" name="nama" placeholder="Nama" required/>
                    </div>
                    <div class="8u$">
                        <input type="email" name="email" placeholder="Email" required/>
                    </div>
                <?php 
                    }
                    else{
                 ?>
                    <div class="8u$">
                        <input type="text" name="nama" value="<?php echo $nama; ?>" placeholder="Nama" required/>
                    </div>
                    <div class="8u$">
                        <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email" required/>
                    </div>
                <?php } ?>
                <div class="8u$">
                        <input type="text" name="subject" placeholder="Subject" required/>
                    </div>
                <div class="8u$">
                    <textarea name="pesan" placeholder="Pesan"></textarea>
                </div>
                <div class="4u$">
                    <ul class="actions vertical">
                        <li><button type="submit" class="button big fit">Send Message</button></li>
                    </ul>
                </div>
            </div>
        </form>
    </section>
</article>