<?php
	echo "<h4>CHECKDATE FORM</h4>";					
	echo "<form id=\"form1\" method=\"post\" action=\"datevalidation.php\" >"; 
		// Input month
		echo "<label for=\"givemonth\">Enter the MONTH</label><br /><br />"; 
		echo "<input id=\"inputtext1\" type=\"number\" name=\"formmonth\" placeholder=\"2 digits => 1 to 12\" required=\"required\"><br />"; 
		echo "<br /><br />";
		// Input day
		echo "<label for=\"giveday\">Enter the DAY</label><br /><br />"; 
		echo "<input id=\"inputtext2\" type=\"number\" name=\"formday\" placeholder=\"2 digits => 1 to 31\" required=\"required\"><br />"; 
		echo "<br /><br />";
		// Input year
		echo "<label for=\"giveyear\">Enter the YEAR</label><br /><br />"; 
		echo "<input id=\"inputtext3\" type=\"number\" name=\"formyear\" placeholder=\"4 digits => YYYY\" required=\"required\"><br />"; 
		echo "<br /><br />";
		// Send form		
		echo "<input id=\"inputsubmit1\" type=\"submit\" name=\"login\" value=\"CHECK DATE\" />"; 
	echo "</form>"; 
	echo "<br />";
	echo "<p>To end your session, <a href='login.php'> sign-out</a>!</p>";
	sleep(3);	
?>
