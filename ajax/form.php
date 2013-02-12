<a href="#" id="formClose" onclick="formClose()" >Close</a>

  <div class="registration_form">
  <fieldset class="pro">
    <legend>Join Our Party</legend>

    <p id="topLine">It's free and always will be. <span style="background:#EAEAEA none repeat scroll 0 0;line-height:1;float:right;margin-right:10px;padding:5px 7px;">Already a member? <a href="../alumini/loginform.php">Log in</a></span> </p>
    
    <div class="elements">
      <label for="name">Name :</label>
      <input type="text" id="name" name="name" size="25" />
    </div>
	<div class="elements">
      <label for="fName">Father/Husband's Name :</label>
      <input type="text" id="fName" name="fName" size="25" />
    </div>
    <div class="elements">
      <label for="sex">Gender :</label>
      <input type="radio" id="sex" name="sex" style="width:10px;" checked="true"/>Male  <input type="radio" id="sex" style="width:10px;" name="sex" />Female
    </div>
    <div class="elements">
      <label for="age">Age :</label>
      <input type="text" id="age" name="age" size="25" />
    </div>
	<div class="elements">
      <label for="batch">Address :</label>
      <textarea rows="5" columns="80" id="address" name="address"></textarea>
    </div>
	<div class="elements">
      <label for="state">State :</label>
      <input type="text" id="state" name="state" size="25" />
    </div>
	<div class="elements">
      <label for="district">District :</label>
      <input type="text" id="district" name="district" size="25" />
    </div>
	<div class="elements">
      <label for="number">Phone Number :</label>
      <input type="text" id="number" name="number" size="25" />
    </div>
	<div class="elements">
      <label for="captcha">Type <strong>HUMAN</strong> in the box to prove that you are a human, not a robot :</label>
      <input type="text" id="captcha" name="captcha" size="25" />
    </div>
	<div class="submit">
     <input type="hidden" name="formsubmitted" value="TRUE" />
      <input type="submit" onclick="submitForm()" value="Register" />
    </div>
  </fieldset>
</div>
