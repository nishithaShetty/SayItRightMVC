<div class="decor1">
         <h3><?= $title ?></h3>
         <h3><?php echo status['msg'] ?></h3>
	</div>

     <div class="first">
        <?php echo validation_errors(); ?>
         <?php echo form_open('contacts/create') ?>
         	<fieldset class="full">
         	<input type="text"  name="fname" placeholder="Enter your name" required >
             	<input type="text"  name="message"  placeholder="Enter Message">
         	<br>

         	<input type="text"  name="lname" placeholder="Enter last name" >
             <br>
             <input type="email"  name="email" placeholder="Enter email" >
             <br>
            <input type="tel"  name="telephone"  placeholder="Telephone" >
             <br>

            <input type="submit" name="submit" value="Send Message" >


              
              </fieldset>

         </form>

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