<div class="first">
		
       <h3 align ="center"> My eventsEvents</h3>
       
         <div class="table-responsive">
              <table class="table table-bordered">
            <tr>
                 <th>Event</th>
                 <th width="40%">Description</th>
                 <th>date</th>
                 <th>sede</th>
                 <th>confirmation</th>
                 <th>Action</th>
                 
                 </tr>
                 <?php
              foreach ($userArray as $key => $value) {
      echo "
                 <tr>
                  <td>".$value['events_name']."</td>
                  <td>".$value['description']."</td>
                  <td>".$value['date']."</td>
                  <td>".$value['sede']."</td> 
                  <td>".$value['confirmation']."</td>
                   <td>
                  
                 <a  class='btn btn-danger' href = '/project5/events/delete/".$value['id']."'>DELETE</a>
                  

                  
                   </td>
                 </tr>";
       }         
?>
       


       

                  
             </table>
             </div>
            

  
	</div>


</body>
<div>
	<div class="footer">
<hr>
	<p> Copyrigt &copy 2019 All rights reserved| The web is made  with &hearts;
	  <span style="color: 	#00FFFF">By DiazApps</span>
	</p>
</div>
</footer>
</div>
</html>