<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>OICP - Inventory</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body,td,th {
	font-family: "Trebuchet MS";
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EBEBEB;
}
</style>
</head>
<body>
<?php 
	include "connect.php";
	connect();
?>

<table width="1000px" border="1" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
  <tr>					<!-- Row for Header-->
    <td colspan="2" width="60%" height="100px"><h1 style="color:#300; padding-left: 10px">Omania International Cement Production<br />
    </h1>      
    <h3 style="color:#300; padding-left: 50px">Inventory & Order Management System</h3>
    <div name="time" align="right" style="padding-right:10px">
		<?php echo date("Y-m-d H:i:s"); ?>
    </div>
    </td>
  </tr>


    <tr>				<!-- Row for Menu-->
    <td colspan="2" width="100%" height="50px">
		<script type='text/javascript' src='scripts/exmplmenu_var.js'></script>
		<script type='text/javascript' src='scripts/menu_com.js'></script>
</td>
  </tr>


    <tr>				<!-- Row for Data Entry-->
    <td width="800px" align="left" valign="top" style="padding: 10px 10px 10px 10px; ">
		    <div align="center" style="padding: 10px 10px 10px 10px;">
    	      	<form name="dwsrch" method="post" action="">
        			Block Type: <input type="text" name="blocktype" /> &nbsp;
                    <input type="submit" name="report" value="Show Report"  /> <br /> 
                    
		        </form>
        	</div>
    	<hr />
    	<H2 style="padding-left: 30px; font-size:36px" align="center">Inventory Report</H2>
 
        <hr />
       
       
       <table width="100%" border="1">
    	   	<tr>
                <td align="center">Inv No.</td>
                <td align="center">Date</td>
                <td align="center">Block Type</td>
                <td align="center">Quantity</td>
                <td align="center">Damaged</td>
                <td align="center">Action</td>
                <td align="center">OrderID</td>
	       </tr>

                   
             <?php
            
				if(isset($_REQUEST["report"]))
				{
					$query=mysql_query("SELECT * FROM inventory where type =  '$_REQUEST[blocktype]'");
				
				if(!$query)
				//echo mysql_error()."<BR><BR><BR><BR>";
				echo "<script> alert('error');</script>";
				
				while($row=mysql_fetch_array($query))
				{
             ?>
              
           <tr>
               <td align="center"><?php echo $row['ProductID'];?></td>
               <td align="center"><?php echo $row['Date'];?></td>
               <td align="center"><?php echo $row['Type'];?></td>
               <td align="center"><?php echo $row['Quantity'];?></td>
               <td align="center"><?php echo $row['Damaged'];?></td>
               <td align="center"><?php echo $row['Action'];?></td>
               <td align="center"><?php if (!$row['OrderID']) echo "New Stock"; else echo $row['OrderID'];	?></td>
	       </tr>
			
		<?php
        	    }
			}
        ?>
          
          </table>   
    </td>
    
   <td width="200px" height="500px" align="left" valign="top" style="padding: 10px 10px 10px 10px; ">
   </td>

  </tr>


</table>

</body>
</html>
