	<div class="decor1">
      <h3><?= $title ?></h3>
	</div>
    <div class="first">

            <?php echo form_open('Users/register'); ?>

         	<fieldset class="third">
         		<h3 class="text-center"> Select the Type of Users</h3>
                        <a href="<?php echo base_url(); ?>users/register2">

            <button type="button">Individual</button>
          </a>

          <a href="<?php echo base_url(); ?>users/register">
            <button type="button">Event</button>
          </a>
          <a href="<?php echo base_url(); ?>users/register1">
            <button type="button">Business</button>
                   </a>
                <hr>
                <h3 class="text-center"> welcome to the Event log</h3>
                
                  
                   <input type="text" class="form-cntrol" name="fname1"  placeholder="Enter your name">
                    <br/>
                   <?php echo form_error('fname1'); ?>
                
                   <input type="text" name="lname1"   placeholder="Enter your last name">
                   <br/>
                   <?php echo form_error('lname1'); ?>
                   <input type="Email" name="email1"  placeholder="Enter Email">
                   <br/>
                   <?php echo form_error('email1'); ?>
                   <input type="password" name="password1"   placeholder="Enter password">
                <br/>
                <?php echo form_error('password1'); ?>
                <input type="submit" name="submit" value="SEND">

         	</fieldset>


         <?php echo form_close(); ?>
       
		</div>

</body>
<footer>
	<div class="footer">
<hr>
	<p> Copyrigt &copy 2019 All rights reserved| The web is made  with &hearts; by DiazApps</p>
</div>
</footer>
</div>
</html>