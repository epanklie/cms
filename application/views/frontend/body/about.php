<article class="post">
	<h2 style="font-size: 2.5em;">About - Jelly</h2>
    <?php 
    	foreach ($website->result() as $key) {
    		echo html_entity_decode($key->page_about);
    	}
     ?>
</article>