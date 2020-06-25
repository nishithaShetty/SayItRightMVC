<div class="decor1">
         <h3>Edt conference</h3>

	</div>
     <div class="first">
        <?php echo validation_errors(); ?>
         <?php echo form_open('conferences/update') ?>
         <input type="hidden" name="id" value="<?php echo $userArray['id']; ?>">
         	<fieldset class="full">
            <label>Event name:</label>
         	<input type="text"  name="name" placeholder="Enter your name" value="<?php echo $userArray['conference_name'];?>" required ><br/>
            <label>Description:</label>
            <input type="text"  name="description" rows="3" cols="20" placeholder="Enter description" value="<?php echo $userArray['description'];?>"><br>
            <label>Date</label>
         	<input type="text"  name="date" placeholder="Enter date" value="<?php echo $userArray['date'];?>">
             <br>
             <label>Location</label>
             <input type="text"  name="sede" placeholder="Enter place" value="<?php echo $userArray['sede'];?>">
             <br>
             <label>Confirmation:</label>
            <input type="text"  name="confirmation"  placeholder="confirmation" value="<?php echo $userArray['confirmation'];?>">
             <br>

            <input type="submit" name="submit" value="EDIT" >


              
              </fieldset>

         </form>

     </div>





</body>

</div>
</html>