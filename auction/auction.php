<!DOCTYPE html>
<!-- Do not edit this file, copy the code to use it in your module-->
<html>
<head>
	<meta charset="utf-8">
    <title>Template</title>
	<link rel="stylesheet" href="../css/bootstrap.css"  type="text/css"/>
	<link rel="stylesheet" type="text/css" href="../css/smoothness/jquery-ui.css">
	
</head>
<body>
	<div class="container-fluid">
		<div class="row" role="header">
			<?php include_once "header.php";?> 
		</div>
	
		<div class="container"><!-- you can delete this div if you don't want the side bar-->
				<!--Navigation sidebar-->
				<div class="col-sm-3 col-md-2 sidebar">
	                <ul class="nav nav-sidebar">
		                <li class="active"><a href="#">Search</a></li>
		                <li><a href="#">Profile</a></li>
		                <li><a href="#">Bulk Order</a></li>
		                <li><a href="#">Sell</a></li>
	                </ul>
                </div>
				<!--Main Content area--> 
		        <div class="container-fluid">
		           <!--
						Write all
						your code
						here...
						It will appear in the content 
						section of webpage
		           
                     
                     -->
                     <div class="control-group">
		            <label calss="control-label" for="select01">Base Price</label>
		            <div class= "formSmallTextbox">
		            <input type = "text" class="formTextbox" name="a_number"  >
		            
		            </div>

		            <div class="control-group">
		            <label calss="control-label" for="select07">Start Date</label>
		            <div class= "formSmallTextbox">
		            <input type = "text" class="formTextbox" name="a_number"  >
		            
		            </div>

		             <div class="control-group">
		            <label calss="control-label" for="select07">Close Date</label>
		            <div class= "formSmallTextbox">
		            <input type = "text" class="formTextbox" name="a_number"  >
		            
		            </div>


		             <div><input type="submit" name="submit" class="controls" value="Submit" onClick="x=document.getElementById('sel').value;">
                      </div>




		           

                <!--alert(document.getElementById('sel').value);-->
                

                    
		        
	    		</div>
		</div>
	</div>
	<script type="text/javascript">
	function f(){
		alert("test");
		//alert(document.getElementById("select02").value);
		//<?php if($_REQUEST['category'] == 'Electronics'){ echo(' selected ');
	}
	</script>
	<!--All javascript placed at the end so that the page loads faster-->
    <script src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/custom/search_suggestions.js"></script>

</body>
</html>
