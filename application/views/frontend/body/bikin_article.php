<?php 
if (!$username) {
	redirect(site_url(''));
}
 ?>
<article class="post">
	<?php 
		if ($this->session->flashdata('error_upload')) {
			echo "<h2 class='session_fade'><center>".$this->session->flashdata('error_upload')."</center></h2>";
		}
	 ?>
	<h2 style="font-size: 2.5em;">bikin article</h2>
    <form method="post" action="<?php echo site_url('page/proses_article'); ?>" enctype="multipart/form-data">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="row uniform">    
            <div class="8u$">
                <input type="text" name="judul" value="" placeholder="Judul" required/>
            </div>
            <div class="8u$">
            	<div class="select-wrapper">
	                <select name="kategory" required>
	                	<option disabled="" selected="">--Pilih Kategory--</option>
                        <?php 
                            foreach ($data as $key) {
                         ?>
	                	<option value="<?php echo $key->id; ?>"><?php echo $key->nama; ?></option>
                        <?php } ?>
	                </select>
	            </div>
            </div>
            <div class="8u$">
                <textarea name="isi" id="editor1" placeholder="Isi" required></textarea>
            </div>
            <div class="8u$">
            	<label>Input Foto: </label>
                <input type="file" name="userfile" accept="image/*" required/>
            </div>
            <div class="8u$">
                <label>Tag &nbsp; <i>(You can select multiple)</i></label>
                <select multiple="" name="tag" required style="height: 10em;">
                    <?php 
                        foreach ($tag->result() as $key) {   
                     ?>
                    <option value="<?= $key->tag_seo ?>"><?= $key->tag_title ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="4u$">
                <ul class="actions vertical">
                    <li><button type="submit" class="button big fit"><span class="fa fa-send"></span> Create</button></li>
                </ul>
            </div>
        </div>
    </form>
</article>