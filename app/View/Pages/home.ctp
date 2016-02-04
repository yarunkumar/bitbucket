<?php
$background_color = "#FF9966";
echo "<!DOCTYPE html>\n"; 
echo "<html>\n"; 
echo "\n"; 
echo "<head>\n";
echo "</head>\n"; 
echo "<body >\n";
echo "\n"; 
echo "<div align=\"center\">
<img src=\"http://www.unomaha.edu/news/2014/04/media/cec-h.jpg\" alt=\"Eagle Image\" align=\"middle\" width=\"404\" \n";
echo "height=\"242\"></div>\n";

echo "  <h2><center><FONT COLOR=\"#0080FF\">Community Engagement Center</FONT></center></h2>\n";
echo "  <h3><center><FONT COLOR=\"#08088A\">Service Volunteer HomePage</FONT></center></h3>\n";
echo "  <h4><center><FONT COLOR=\"#886A08\"></FONT></center></h4>\n";
echo "<br>\n"; 
echo "<br>\n"; 
echo "<br>\n"; 
echo "<br>\n";
echo "<h1><center><FONT COLOR=\"8A0829\">Portfolio Planning Options</FONT></h1>\n";
echo "<center><select name=\"menu1\" id=\"menu1\">\n";
echo "<option value=\"\">Select an option</option>\n";
echo "<option value=\"http://localhost/eagle/customers\">Check Volunteers</option>\n";
echo "<option value=\"http://localhost/eagle/customers/add\">Add a new Volunteer</option>\n";
echo "<option value=\"http://localhost/eagle/stocks\">Add Volunteer Service</option>\n";
echo "<option value=\"http://localhost/eagle/investments\">Check Volunteer Services</option>\n";
echo "\n"; 
echo "</select>\n"; 
echo "<script type=\"text/javascript\">\n"; 
echo " var urlmenu = document.getElementById( 'menu1' );\n"; 
echo " urlmenu.onchange = function() {\n"; 
echo "      window.open( this.options[ this.selectedIndex ].value );\n"; 
echo " };\n"; 
echo "</script>\n"; 
echo "\n"; 
echo "</body>\n"; 
echo "</html>\n"; 
echo "\n";
?>