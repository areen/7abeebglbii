<html>
  
  <head>
        <meta charset=utf-8 />
         <title></title>
          <link rel="stylesheet" type="text/css" href="http://areen.dc7.us/tst.css">
         
                <script src="http://code.jquery.com/jquery-latest.js"></script>
                <script src="http://areen.dc7.us/ajax.js"></script>
		
    </head>
	    <body> 
		
            <select id="myList" class="styled-select" name="hihi" >
                 <option>Select..</option>
                <option>first_2013</option>
                <option>second_2013</option>  
                <option>summer_2013</option>  
            </select>
			
        <div id="output2">
        </div>
 <?php
 			echo"hiiiiiii ";

        include_once('http://areen.dc7.us/confg.php') ;
          $sql_filter_01= mysql_real_escape_string($_POST["hihi"]);
          $sql_filter_02 = mysql_real_escape_string($_POST["my_name"]);
        
        $sql_txt_01  = "SELECT course_name, mark_first, mark_second,mark_other,mark_final,(mark_first+mark_second+mark_other) mark FROM stdinfo
                        WHERE course_semester = '" . $sql_filter_01 . "' AND student_id = '" . $sql_filter_02 . "'";
            $sql_result_01 =  mysql_query($sql_txt_01);

                if($sql_result_01 === FALSE)
                    {
                       die(mysql_error()); // TODO: better error handling
                   }
					
					while (   $row2 = mysql_fetch_array($sql_result_01))	
					{
						$sum = $row2["mark_first"]+$row2["mark_second"]+$row2["mark_other"];
						echo"helloooooooo";
					}
?>   
    </body>
</html>
