<?php get_header(); ?>

<div class="container-fluid py-3">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h2 class="display-3">Register</h2>
      <p>Please Register here to be a member at <strong>SGEWS</strong> and start raising money.</p>
    </div>
    <div class="col-md-6">
      <form action="" id="register-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your name" name="name" id="name-input">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email-input">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter Strong Password" name="password"
            id="password-input">
        </div>
        <div class="form-group">
          <input type="tel" class="form-control" placeholder="Enter your phone number" name="phone" id="phone-input">
        </div>
     
    </div>
    <!-- First Column ends -->
    <div class="col-md-6 border border-1 p-2">
 
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter street address" name="street-address"
            id="street-address-input">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter city" name="city-address" id="city-address-input">
        </div>
        <div class="form-group">
          <input type="number" class="form-control" placeholder="Enter pincode" name="pincode-address"
            id="pincode-address-input">
        </div>
        <div class="form-group">
          <select class="form-control" name="state" id="state-select">
            <option value="" disabled selected>Select State</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
            <option value="Lakshadweep">Lakshadweep</option>
            <option value="Delhi">Delhi</option>
            <option value="Puducherry">Puducherry</option>
          </select>

        </div>
    </div>
    <div class="py-2">
      <button type="submit">Register</button>
    </div>
    </form>
    <!-- Second Column ends -->
  </div>
</div>

<?php get_footer(); ?>