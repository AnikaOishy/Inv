<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <FORM NAME ="form1" METHOD =" " ACTION = "">

            <INPUT TYPE = "TEXT" Name ="Querry">
            <INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Submit">
            
            
       
        </FORM>
        <?php
        $host    = "127.0.0.1";
        $user    = "root";
        $pass    = "";
        $db_name = "dbms019";
        
        $querry=$_GET["Querry"];//querry
        //create connection
        $connection = mysqli_connect($host, $user, $pass, $db_name);
        
        //test if connection failed
        if(mysqli_connect_errno()){
            die("connection failed: ".mysqli_connect_error(). " (" 
                    . mysqli_connect_errno(). ")");
        }
        show_table_fromQuerry($connection,$querry);
        function show_table_fromQuerry($connection,$querry){
            //get results from database
            $result = mysqli_query($connection,$querry);
            $all_property = array();  //declare an array for saving property

            //showing property
            echo '<table class="data-table">
                <tr class="data-heading">';  //initialize table tag
            while ($property = mysqli_fetch_field($result)) {
                echo '<td>' . $property->name . '</td>';  //get field name for header
            array_push($all_property, $property->name);  //save those to array
            }
            echo '</tr>'; //end tr tag

            //showing all data
            while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            foreach ($all_property as $item) {
                echo '<td>' . $row[$item] . '</td>'; //get items using property value
            }
            echo '</tr>';
            }
            echo "</table>";
            }
    ?>
    </body>
</html>
