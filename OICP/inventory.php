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
<body onContextmenu="return false;">
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
		<b>Current Time: <?php echo date("Y-m-d H:i"); ?> </b>
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
    <td width="80%" height="500px" align="left" valign="top" style="padding: 10px 10px 10px 10px; ">
    	<H2 style="padding-left: 30px; font-size:36px">Stock Entry Form</H2>
        <hr />
        <form name="inventory" method="post" action="">
    	<table width="600px" cellpadding="5" cellspacing="0" align="center" border="0">
        
        <tr>
        <td width="100px"  ><b>Date</b></td>
        <td ><input type="text" name="txtdate" size="30" value="<?php echo date('Y-m-d');?>" ></td>
        </tr>
        
        <tr>
        <td width="100px"  ><b>Block Type </b></td>
        <td  >
        <select name="blocktype">
        <option value="1190*390*190-Hollow">1190*390*190-Hollow</option>
        <option value="90*390*190-Hollow">90*390*190-Hollow</option>
        <option value="190*390*190-Solid">190*390*190-Solid</option>
        <option value="200*400*200-Insulation">200*400*200-Insulation</option>
        </select>
        </td>
        </tr>
        
        <tr>
        <td width="100px"  ><b>Quantity</b></td>
        <td  ><input type="text" name="txtqty" size="30"/></td>
        </tr>
        <tr>
          <td width="100px"  ><b>Damaged</b></td>
          <td  >    
          		<select name="damage">
                    <option value="Y">Yes</option>
                    <option value="N" selected="selected">No</option>
              </select>
              </td>
        </tr>
        <tr>
          <td width="100px"  ><b>Action</b></td>
          <td  >
               <select name="action">
                    <option value="N">New Order</option>
                    <option value="R">Return</option>
              </select>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center" ><input type="submit" name="save" value="Save Record" /></td>
        </tr>
        
        </table>
        
        </form>
    </td>
    
   <td width="20%" height="500px" align="left" valign="top" style="padding: 10px 10px 10px 10px; ">
   </td>

  </tr>


</table>

<?php 

	if(isset($_REQUEST["save"]))
	{
		
		$query=mysql_query("INSERT INTO inventory(Date, Type, Quantity, Damaged, Action) VALUES ('$_REQUEST[txtdate]','$_REQUEST[blocktype]','$_REQUEST[txtqty]','$_REQUEST[damage]','$_REQUEST[action]')");
	
		if($query)
			{
				echo "<script> alert('Record Inserted Successfully');</script>";
			}
		else
			{
				echo mysql_error();
			}
			
	}

?>
</body>
</html>
