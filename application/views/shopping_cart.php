

  <div class="decor">
     
   </div>
  <div>
   <h3 align ="center">BUY FROM US</h3>
   
    <?php foreach($product as $row) : ?>
    <div class="col-md-4">
    	
              
                  
                 <div style ="border:1px solid #333; background-color:#f1f1f1; border-radius: 5px; padding:14px; float:left; " >
                  <div class="gallery">
                   <?php echo '
                  <img src="'.base_url().'./assets/imgsay/'.$row['image'];?>" class="img-responsive"/>';
                   <div class="desc">
                  <h4 class="text-info" name="name"><?php echo $row['name'] ?></h4>
                  <h4 class="text-danger" name="price">$<?php echo $row['price'] ?></h4>
                  <input type="text" name="quantity" class="form-control quantity" id="<?php echo $row['id']?>" >
                  
                  <button type="button" name="add_cart" id="add_cart" class="btn btn-success add_cart" data-productname =<?php echo $row['name'];?> data-price=<?php echo $row['price'];  ?>  data-productid = <?php echo $row['id']; ?> >ADD TO CART</button>

                  </div>
                  </div>
                  </div>             
          </div>
             <?php endforeach; ?> 
            

            <div class="col-lg-6 col-md-6">
              <div id="cart_details">
                <h3 align="center">Cart is empty</h3>
              </div>
            </div>
       
</div>
</body>
</div>
</html>


<script type="text/javascript">
$(document).ready(function(){

$('.add_cart').click(function(){
  
  var product_id = $(this).data('productid');
  var product_name = $(this).data('productname');
  var product_price = $(this).data('price');
  var quantity = $('#' + product_id).val();
if(quantity != '' && quantity > 0)
{
  $.ajax({
  url:"<?php echo base_url(); ?>shopping_cart/add",
  method: "POST",
  data:{product_id: product_id,
        product_name:product_name,
        product_price:product_price,
        quantity:quantity },
  success: function(data)
  { alert("product added");
    $('#cart_details').html(data);
  }
});

}

else
{
alert(" Please enter quantity value");

}


});

$('#cart_details').load("<?php echo base_url(); ?>shopping_cart/load");

$(document).on('click', '.remove_inventory', function()
{
var row_id  = $(this).attr("id");

if(confirm("Are you sure you want to remove this?"))
{
$.ajax({
 url:"<?php echo base_url(); ?>shopping_cart/remove",
 method:"POST",
 data: {row_id : row_id},
 success:function(data)
 {
alert("product removed from cart");
$('#cart_details').html(data);
 
 }

});
}

else
{
  return false;
}


});

});

</script>