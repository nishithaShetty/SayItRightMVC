
	<div class="decor1">
     <h3>Login</h3>
	</div>

    <div class="first">
    	
    		<?php echo form_open('Users/login_validation'); ?>
    			<fieldset class="second">
                
    			<input type="email" name="email" placeholder="enter email"><br>
                <?php echo form_error('email'); ?>
    			<br>
                <div class="form-gorup">
    			<input type="password" name="password" placeholder="enter password"><br/>
                <?php echo form_error('password'); ?>
                <br>

    			<input type="submit" name="submit" value="SEND">
    			
              </fieldset>
    		<?php echo form_close(); ?>


        

		</div>





</body>
<footer>
	<div class="footer">
<hr>
	<p> Copyrigt &copy 2019 All rights reserved| The web is made  with &hearts;
	  <span style="color: 	#00FFFF">By DiazApps</span>
	</p>
</div>
</footer>
</div>
</html>