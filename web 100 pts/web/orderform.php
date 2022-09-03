
<?php
	include_once 'header1.php';
	if(isset($_POST['check'])){
		
        $na = $_POST['pro'];
		$sub = $_POST['sub'];
		$qty = $_POST['qty'];
		$tot = $_POST['tot'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$add = $_POST['add'];
		$mail = $_POST['mail'];
		$pay = $_POST['pay'];
		$comments = $_POST['comments'];



        $query = "INSERT INTO sales (code,price,qty,total,fname,lname,address,email,pay_method, product_specs) VALUES ('$na','$sub','$qty','$tot','$fname','$lname','$add','$mail','$pay','$comments')";
        $result = mysqli_query($conn, $query);
    	echo "<script>alert('Order Successful');window.location.href='index.php';</script>"; 

    }
?>

<html>
	<head>
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
       <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript">


		function price(){
		var pro = document.getElementById("pro").value;
		var na = document.getElementById("na").value;
		var sub=document.getElementById("sub");
		var qty=parseInt(document.getElementById("qty").value);
		var tot=document.getElementById("tot");
		var price=0;
		var name='';
 		 if(na=='1'){name='ZARA CT';price=150;}
		if(na=='2'){name='SHEIN PF';price=180;}
		if(na=='3'){name='MANGO BD';price=180;}
		if(na=='4'){name='BERSHKA LT';price=180;}
		if(na=='5'){name='ZARA OS';price=140;}
		if(na=='6'){name='ALEX N';price=350;}
		if(na=='7'){name='Niall B';price=250;}
		if(na=='8'){name='Marbella G';price=120;}
		if(na=='9'){name='Couple Ring';price=350;}
		if(na=='10'){name='Eliz';price=250;}
  
  var total=quantity(price,qty);
  tot.value=total+'.00';
  pro.value=name;
  sub.value=price;
}

var quantity=(n1,n2) => (n1*n2);
 </script>  

	</head>
	<body>
	<div class="divleft">
	<form  action="#" method="post">
	<h2><center> ORDER FORM</h2></center><br>
	
	First Name: <input type="text" placeholder="First Name" id="fname" name="fname" required><br>
	Last Name: <input type="text" placeholder="Last Name" id="lname" name="lname" required><br>
	Address: <input type="text"  placeholder="Address" id="address" name="add" required><br>
	Email: <input type="text"  placeholder="Contact Email" id="cmail" name="mail" required><br>
	Item Code: 
	<select name="na" id='na' onclick="price()" required>
          <option value='0' disabled selected>Select a product</option>
          <option value='1'>ZARA CT</option>
          <option value='2'>SHEIN PF</option>
           <option value='3'>MANGO BD</option>
           <option value='4'>BERSHKA LT</option>
           <option value='5'>ZARA OS</option>
           <option value='6'>ALEX N</option>
            <option value='7'>Niall Bangle</option>
           <option value='8'>Marbella G</option>
		   <option value='9'>Couple Ring</option>
           <option value='10'>Eliz</option>
    </select><br>
	<input type="hidden" id="pro" name="pro" value="ZARA CT">
	Price:<input name='sub' type="text" class="form-control" id="sub" placeholder="0.00"  readonly>
	Quantity:
	<select name="qty" id='qty' onclick="price()" required>
                                <option value='0' disabled selected>0</option>
                                <option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>
                                <option value='6'>6</option>
                                <option value='7'>7</option>
                                <option value='8'>8</option>
                            </select>
	<br>
	<br>Total Price:<input name='tot' type="text" class="form-control" id="tot" placeholder="0.00" readonly>

	<br>
	Payment:
	
	<select name ="pay" id='pay' required>
	<option value="" selected>Select payment</option>
	<option value="Gcash">Gcash</option>
	<option value="Cash on Delivery">Cash on Delivery</option></select>
	
	
	
	<br><br><span>Product Specifications</span><br>
	<br><textarea rows="8" cols="42" placeholder="eg.color, sizes, message to seller" name="comments"></textarea><br><br>

	
<center><input type="Submit" id='button' name='check' value="Submit" /></center>


</form>
 </div>
 <div class='divright'>
 <div class="small-container">
	 <br>

<h2 class="title"> Our Products </h2>

<div class="row">
	<div class="col-4">
		<img src="pic/prod_1.jpg">
		<h4>ALEX Layered Necklace</h4>
		<div class="rating">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star-o"></i>
		</div>
		<p>350 php</p>
	</div>
	<div class="col-4">
		<img src="pic/prod_2.jpg">
		<h4>Niall Bangle</h4>
			<div class="rating">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star-o"></i>
		</div>
		<p>250.00</p>
	</div>
	<div class="col-4">
		<img src="pic/prod_3.jpg">
		<h4>Marbella in Gold</h4>
			<div class="rating">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star-o"></i>
		</div>
		<p>120.00</p>
	</div>
	<div class="col-4">
		<img src="pic/ring.jpg">
		<h4>Couple Ring</h4>
			<div class="rating">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star-o"></i>
		</div>
		<p>350 php</p>
	</div>
	<div class="col-4">
		<img src="pic/mba1.jpg">
		<h4>ZARA One-Sided Top</h4>
			<div class="rating">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star-o"></i>
		</div>
		<p>140.00</p>
	</div>
	<div class="col-4">
		<img src="pic/mba2.jpg">
		<h4>BERSKA Lettuce Top</h4>
			<div class="rating">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star-o"></i>
		</div>
		<p>180.00</p>
	</div>
	<div class="col-4">
		<img src="pic/mba3.jpg">
		<h4>ZARA Racerback Top</h4>
			<div class="rating">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star-o"></i>
		</div>
		<p>150.00</p>
	</div>
	<div class="col-4">
		<img src="pic/mba4.jpg">
		<h4>MANGO Buttondown</h4>
	<div class="rating">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star-o"></i>
	</div>
		<p>180.00</p>
	</div>

</div>
</div>

	</body>


</html>