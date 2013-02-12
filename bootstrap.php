
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>bootstap</title>
    </head>
    <?php
            $strURL = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING'];
            //$strURL = $_SERVER['PHP_SELF'];
            //var_dump($strURL);
           /*for($i=0;$i<strlen($strURL);$i++){
               $arr[$i]= $strURL[$i];               
           }          
           print_r($arr);
            */
            $arr=  explode('/', $strURL);
            //Komplettes Array
            print_r($arr);
            //nur Array Ausgabe
            echo "</br>Richtige Ausgabe :$arr[2]</br>";
            
            
            
    echo "Ausgabe URL komlpett :.$strURL.</br>";
    
    ?>
 </body>
</html>