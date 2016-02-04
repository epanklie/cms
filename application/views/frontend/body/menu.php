<section>
    <div id="form-login">
        <h3 id="title-login">Login</h3>
        <form method="post" action="<?php echo site_url('login/auth'); ?>">
            <div class="row uniform">
                <div class="12u$">
                    <input type="text" name="username" value="" placeholder="Username" />
                </div>
                <div class="12u$">
                    <input type="password" name="password" value="" placeholder="Password" />
                </div>
                <div class="12u$">
                    <ul class="actions vertical">
                        <li><button type="submit" class="button big fit">Login</button></li>
                        <li><strong><center>OR</center></strong></li>
                        <li><a href="#" class="button big fit" id="id-register">Register</a></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
    <!-- Register Form -->
    <div id="form-register">
        <form method="post" action="<?php echo site_url('register'); ?>" id="form-register-submit">
            <h3 id="title-register">Register</h3>
            <h4 style="color: red;" id="title-register-error"><center>Password Not Match</center></h4>
            <div class="row uniform">    
                <div class="12u$">
                    <input type="text" name="nama" value="" placeholder="Nama" required/>
                </div>
                <div class="12u$">
                    <input type="email" name="email" value="" placeholder="Email" required/>
                </div>
                <div class="12u$">
                    <input type="text" name="username" value="" placeholder="Username" required/>
                </div>
                <div class="12u$">
                    <input type="password" name="password" value="" placeholder="Password" id="pass" required/>
                </div>
                <div class="12u$">
                    <input type="password" name="conf_pass" value="" placeholder="Confirm Password" id="conf_pass" required/>
                </div>
                <div class="12u$">
                    <ul class="actions vertical">
                        <li><button type="submit" class="button big fit" id="btn-register">Register</button></li>
                        <li><strong><center>OR</center></strong></li>
                        <li><a href="#" class="button big fit" id="id-login">Login</a></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>