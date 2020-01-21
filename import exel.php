<html>
    <body>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
            <!--exel file-->
            <label for="Exel file">Exel file:</label>				
            <input type="file" name="file" value=""><br>
            <!--Submit button-->
			<input type="submit" name="submit" value="Upload"><br>
        </form>
    </body>
</html>

<?php
    //include require files
    require 'db_connection.php';    // database connection
    require 'Classes/PHPExcel/IOFactory.php';   // input output file

    if(isset($_POST["submit"])){
        $filename = $_FILES['file']['tmp_name'];    //'file' will be name of file from html code (used) and 'tmp_name' will be temporary name of file from $_FILES which you have not used in code
        $exeldata = array();

        //
        try{
            $inputfiletype = PHPExcel_IOFactory::identify($filename);   // identify the type of input file
            $objReader = PHPExcel_IOFactory::createReader($inputfiletype);   // Create a new Reader of the type defined in $inputFileType (you can use the IO Factory's createReader() method to instantiate the reader object for you, simply telling it the file type of the reader that you want instantiating.)
            $objPHPExel = $objReader -> load($filename);    // Load $FileName to a PHPExcel Object
        }
        catch(Exception $e){
            die('Error loading file'.pathinfo($filename,PATHINFO_BASENAME).': '.$e->getMessage());
        }

        $sheet = $objPHPExel->getSheet(0);
        //echo "$sheet";
        $highestRow = $sheet->getHighestRow();
        //echo "$highestRow<br>";
        $highestColumn = $sheet->getHighestColumn();
        //echo "$highestColumn<br>";

        for($row = 1 ; $row <= $highestRow ; $row++)
        {
            //echo"$row<br>";
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
            //print_r($rowData);
            //echo"<br>";
            $query = "INSERT INTO exel_data(`first_name`, `last_name`, `email`) VALUES ('".$rowData[0][0]."','".$rowData[0][1]."','".$rowData[0][2]."')";
            $result = mysqli_query($conn,$query);
            if($result){
                $exeldata [] = $rowData[0];
                // print_r($exeldata);
                // echo"$row<br>";
                //echo "file uploaded";
            }
            else{
                echo "Error : ". $sql . "<br>" . $mysqli_error($conn);
            }
        }

        if($result){
            echo "File uploaded.<br>";
            echo "File data is =>";
        }

        echo "<table border='1'>";
        foreach($exeldata as $index => $exelraw)
        {
            echo "<tr>";
            foreach($exelraw as $exelcolumn)
            {
                echo "<td>".$exelcolumn."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    
?>

