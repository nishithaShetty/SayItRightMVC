

    <div class="first">
           
        <?php echo form_open('profiles/profile_update') ?> 
          <fieldset class="fifth">
            <h3> Welcome to your profile</h3>
            <hr>

              <div class="seperate1">
    <img class="logo" src="<?php echo base_url();?>/assets/imgsay/user.jpg" alt="logo">
  </a>
  <div class="seperate2"> 
        
        <button type="button">Change Image</button>
       </div>
       </div>
            <div class="seperate1">
              <div class="seperate2"> 

          
          
          <input type="text" name="fname" value="<?php echo $userArray['fname']  ?>">
          <input type="text" name="lname" value="<?php echo $userArray['lname']  ?>"><br/>
          <input type="text" name="work" value="<?php echo $userArray['work']  ?>"><br/>
          <input type="text" name="school" value="<?php echo $userArray['school']  ?>" ><br/>  
          <input type="email" name="email" value="<?php echo $userArray['email']  ?>" >
          
          <br>
          <input type="password" name="password" value="<?php echo $userArray['password']  ?>" >
          <br>

          <input type="submit" name="submit" value="Save changes">

        </div>
      </div>
              </fieldset>
        </form>

        

    </div>




</body>
<footer>
  <div class="footer">
<hr>
  <p> Copyrigt &copy 2019 All rights reserved| The web is made  with &hearts;
    <span style="color:   #00FFFF">By DiazApps</span>
  </p>
</div>
</footer>
</div>
</html>