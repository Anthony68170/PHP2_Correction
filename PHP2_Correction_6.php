
<html>  
<head>
    <h1>Exercie 6 PHP2</h1>
</head>  
 
<select>  
  <option value="Select">Select</option>
  <option value="Monsieur">Monsieur</option>  
  <option value="Madame">Madame</option> 
  <option value="Mademoiselle">Mademoiselle</option> 
</select>   
</body>  
</html>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");
    foreach($elements as $element){
    echo"'<select><option value>'" ".$elements.".$element."";
    }
    }
alimenterListeDeroulante($elements);

?>