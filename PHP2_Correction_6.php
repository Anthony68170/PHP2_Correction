
  
<head>
    <h1>Exercie 6 PHP2</h1>
</head>

<body>
    <form id="listderoule" name="listderoule" method="post"> 
        <select>  
  <option value="Select">Select</option>
  <option value="Monsieur">Monsieur</option>  
  <option value="Madame">Madame</option> 
  <option value="Mademoiselle">Mademoiselle</option> 

        <?php
        $elements = array(
        "Monsieur",
        "Madame",
        "Mademoiselle"
    );
    function alimenterListeDeroulante { 
        foreach($elements as $element){
        echo"<form>";
        echo "<option value> ".$elements." ".$element." </option>";
        echo "</form>";
        
        echo alimenterListeDeroulante($elements);
        }
    }
        ?>

        </select>
    </form>
</body>
</html>

<!-- https://stackoverflow.com/questions/1643227/get-selected-text-from-a-drop-down-list-select-box-using-jquery -->