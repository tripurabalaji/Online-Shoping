<!-- Modal -->
<div class="modal fade" id="checkout_modal" role="dialog">
    <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-shopping-cart text-success fa-lg"></i> Check Out<small class='text-primary'> Billing Information</small></h4>
      </div>
      <div class="modal-body">
        <form action="cart/data.php?q=checkout" method="POST">
            <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="fname" class="form-control" placeholder="(ex. John)" pattern="[a-zA-Z' ']*$" title="Plz Enter Characters Only" required>
            </div>
            <div class="form-group">
                <label>Lastname</label>
                <input type="text" name="lname" class="form-control" placeholder="(ex. Doe)" pattern="[a-zA-Z' ']*$" title="Plz Enter Characters Only" required>
            </div>
            <div class="form-group">
                <label>Contact #</label>
                <input type="text" name="contact" class="form-control" placeholder="(ex. 0946 579 5229)" pattern="[6-9]{1}[0-9]{9}" title="Phone number with 6-9 and remaining 9 digit with 0-9" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="(ex. info@yourdomain.com)" class="form-control" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" title="Plz Enter valid email Address" required>
            </div>
            <div class="form-group">
                <label>Complete Address</label>
                <input type="text" name="address" class="form-control" placeholder="(ex. 2/F San Jose St., Brgy. Banga, Syudad City)" required>
            </div>
            <div class="form-group">
		<label>Modesof Payment</label>
		<input type="radio" name="payment" value="1" class="form-control">net banking<br />
		<input type="radio" name="payment" value="2" class="form-control">visa card<br />
		<input type="radio" name="payment" value="3" class="form-control">cash on delivery<br />
             </div>
	   <div class="alert alert-info">
              	 <strong>Only within 30Days Return & refund is Done!</strong>
            </div>   
            
           <div class="alert alert-warning">
                *** Please wait for our call/text or email for confirmation. Thank You! ***
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
          </form>
      </div>
    </div>
  </div>
</div>