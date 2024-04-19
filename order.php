<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"><meta 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
font-family:Arival;
font-size:17px;
padding:30px;
}

*{
bx-sizing:border-box;
}


.row {
display:-ms-flexbox; /*IE10*/
display:flex;
-ms-flex-wrap:wrap; /*IE10*/
flex-wrap:wrap;
margin:0 -16px;
}

.col-25  {
-ms-flex:25%; /*IE10*/
flex:25%;
}

.col-50  {
-ms-flex:50%; /*IE10*/
flex:50%;
}

.col-75 {
-ms-flex:75%; /*IE10*/
flex:75%;
}

.col-25,
.col-50,
.col-75,  {
padding:0 16px;
}

.container  {
background-color:#f2f2f2;
padding:5px 20px 15px 30px;
border:1px solid lightgrey;
border-redius:3px;
width:100%;
}

input[type=text]  {
width:100%;
margin-bottom:20px;
padding:12px;
border:1px solid #ccc;
border-redius:3px;
}

label {
margin-bottom:10px;
display:block;
}

.icon-container  {
margin-bottom:20px;
padding:7px 0;
font-size:20px;
}

.btn {
background-color:#2f4f4f;
color:white;
padding:12px;
margin:10px 0;
border:none;
width:100%;
border-redius:3px;
cursor:pointer;
font-size:17px;
}

.btn:hover  {
background-color:#5f9FA0;
}

div {
margin-bottom:15px;
padding:4px 12px;
}



</head>
</style>

<body>
<h2 style="color:darkBlue; text-align:center;">Customer Order</h2>
<div class="row">
<div class="col-75">
<div class="container">


 
  
    <h3><br>Choose a Product<b></h3>
	<select id="Type of Product" name="product"  required>
	<option value="Eaing">Earing</option>
	<option value="Pendent">Pendent</option>
	<option value="Bridal Necklace">Bridal Necklace</option>
	<option value="Ring">Ring</option>
	<option value="Chain">Chain</option>
	<option value="Bangle">Bangle</option>
	<option value="Bracelet">Bracelet</option>
	</select><br><br>
	
	<h3><b>Choose a Metal</b></h3>
	<select id="Metal" name="metal" required>
	<option value="Yellow Gold">Yellow Gold</option>
	<option value="white Gold">white Gold</option>
	</select><br><br>
	
	<label for="weight"></i><h3>Weight</h3></label>
    <input type="text" placeholder="Enter Weight" name="weight" required><br>
	
	<h3><b>Choose a Karatage</b></h3>
	<input type="checkbox" id="Karatage" name="karatage" value="22K">
    <label for="Karatage"> 22K</label>
    <input type="checkbox" id="Karatage" name="karatage" value="24K">
    <label for="Karatage">24K</label><br><br>
	
	
	<label for="sdetails"></i><h3>Stone Details</h3></label>
    <input type="text" placeholder="Enter Stone Details" name="sdetails" required><br>
	
	
	<label for="size"></i><h3>Size</h3></label>
    <input type="text" placeholder="Enter Size/Length" name="size" required><br>
	
	<h3><b>Image of the Design</b></h3>
	<input type="file"  id ="myFile" name="filename">
	<br><br>
	
    <h3><b>Expected Date</b></h3>
    <input type="date"  id="myDate"  name="date" required><br><br>
	</div>
	</div>
	</div><b><br>
	
	   
	   <div class="row">
	   <div class="col-50">
	   <div class="container">
	<h3 style="color:Blue">Custom Details</b></h3>
    <label for="fname"><i class="fa fa-user"></i>Full Name </label>
	<input type="text" placeholder="Enter Name" name="fname" required><br>
	
	<label for="tel"><i class="fa fa-mobile"></i>Contact No </label>
    <input type="tel" placeholder="Enter tel" name="tel" required><br><br>
	
     <label for="email"><i class="fa fa-envelope"></i>Email </label>
    <input type="text" placeholder="Enter Email" name="email" required><br>
	
	<label for="cmnt"><b>Other Comment</b></label>
    <input type="text" placeholder="Please enter your message here" name="cmnt" row="4" required><br>

    <!--label for="comment"><i class="fa fa-comment"></i>Other Comments </label>
    <textarea name="comment"   rows="4">Please enter your message here</textarea></br-->	   

    <label for="Engraving"><i class="fa fa-hand"></i>Engraving </label>
	<p><em>For engraving, please contact Sigiri Jewellers via Whatsapp to give the special instructions and select a font from a range of cursive and block letters.</em></p>
	<br>
	
	<label for="Terms"><i class="fa fa-terms"></i>Terms & Conditions </label><br>
	<input type="checkbox"  checked="checked" name="samebar"><em>I have read and agree to the Terms and Conditions.</em>
	
	</div>
	</div>
	</div>
	
	<div class="Note">
	<p><strong>Note:</strong> <small>An advance payment is required to place the order. Pay the advance amount to the account number provided by our employee who will contact you via WHATSAPP. Kindly whatsapp that slip.</small></p>

    <p><strong>Note:</strong> <small>You will be notified when the jewelery is made and you can come and pick it up at our shop. <mark>No Delivery.</mark></p></small>	
	
	</div>
	
	<input type="submit" value="Continue to checkout" class="btn">
	</form>
	
<a href="shop.html</a>	


	
</body>
</html>