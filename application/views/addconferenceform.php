<div class="decor1">
         <h3>Add conference</h3>

	</div>
     <div class="first">
        
         <?php echo form_open('conferences/a1') ?>
         	<fieldset class="full">
            <label>Event name:</label>
         	<input type="text"  name="name" placeholder="Enter your name" required ><br/>
            <?php echo form_error('name'); ?>
            <label>Description:</label>
            <textarea  name="description" rows="3" cols="20" placeholder="Enter description"></textarea><br/>
            <label>Date</label>
         	<input type="text"  name="date" placeholder="Enter date" >
             <br>
             <?php echo form_error('date'); ?>
             <label>Location</label>
             <input type="text"  name="sede" placeholder="Enter place" >
             <br>
             <?php echo form_error('sede'); ?>
             <label>Confirmation:</label>
            <input type="text"  name="confirmation"  placeholder="confirmation" >
             <br>

            <input type="submit" name="submit" value="ADD" >


              
              </fieldset>

         </form>

     </div>





</body>

</div>
</html>