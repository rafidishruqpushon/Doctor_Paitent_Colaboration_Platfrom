<!--Name: Nazmul Islam
	Institution: CUET,Cittagong,Bangladesh
	Dept.CSE
	Level:3
	Term:1
-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>User Login</title>
	<link href="stylesheet/UserLogin.css" rel="stylesheet" type="text/css" />

<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body bgcolor="#FFFFFF">
<div id="label">
    	<img src="image/logo3.png" alt="LOGO" width="500" height="193" align="middle" />
    	<hr>
</div>
<div id="apDiv2"></div>
<div id="apDiv3">
  <ul id="MenuBar2" class="MenuBarVertical">
	<li><a class="MenuBarItemSubmenu" href="#">Sign Up</a>
      <ul>
        <li><a href="#">Sign Up as a Doctor</a></li>
		<li><a href="SignUpasPatient.html">Sign Up as a Patient</a></li>
      </ul>
    </li>
  </ul>
</div>
<div id="contact_ifo">Copy right:CUET Contact   About the    developer	</div>
<form >
	<table border="0">
        	        
            <tr>
            	<td>Username</td>
   				<td><input type="text" name="username" class="FormElement" maxlength="45" required></td>
            </tr>
   
            <tr>
            	<td>Password</td>
    			<td><input type="password" name="password" class="FormElement" maxlength="45" required></td>
            </tr>
            
           
            <tr>
            	<td>
                </td>
                <td>
                  	<input type="submit" value="Log in" class="button">
                </td>
            </tr>
  </table>
</form>
<div class="WantSignUp">
      <p><a href="adminlogin.php">forgot password</a> ?         
        <script type="text/javascript">
			var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
        </script>
        <br>
        <br>
        Go to <a href="adminlogin.php">Admin Panel</a>
        <br>
        <br>
  </p>
</div>
<script type="text/javascript">
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
    </script>
</body>
</html>
