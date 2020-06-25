	<div class="decor1">
      <h3><?= $title ?></h3>
	</div>
    <div class="first">

            <?php echo form_open('Users/register1'); ?>

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
                <h3 class="text-center"> welcome to the Business log</h3>
                
                
                    <p>Type of business</p>
                <input type="radio" name="occupation"  value="University"> University

                 <input type="radio" name="occupation"  value="Company"> Company<br>

                   <?php echo form_error('occupation'); ?>
                <input type="text" name="fname"  placeholder="Enter your first name">
                <br>
                <?php echo form_error('fname'); ?>
                <input type="text" name="lname"  placeholder="Enter your last name">
                <br/>
                <?php echo form_error('lname'); ?>
                <input type="Email" name="email"   placeholder="Enter Email">
                <br/>
                <?php echo form_error('email'); ?>
                <input type="password" name="password" placeholder="Enter password">
                <br/>
                <?php echo form_error('password'); ?>
                <input type="submit" name="submit" value="submit">


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