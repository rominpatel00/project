<?php
        $server="localhost";
        $username="root";
        $pwd="rominpatel007";
        $database="collagepro";
    
        $course=$_POST['course'];
        $sem=$_POST['sem'];
        $subject=$_POST['subject'];
      
    
        $conn=new mysqli($server,$username,$pwd,$database);
        
    if($conn->connect_error){
        die("connection failed" . $conn->connect_error);
        }
            
            for($subindex=0; $subindex<sizeof($subject); $subindex++){
                $sub=$subject[$subindex];
                $sql="insert into course(course,sem,subject) values('$course','$sem','$sub')";
              $conn->query($sql);

              
            }
            
           // 
           /*   $target_dir="images/";
             $target_file=$target_dir . basename($_FILES["image"]["name"]); 
             move_uploaded_file ($_FILES["image"]["tmp_name"],$target_file);
                 */
           
                
          header("location:course.php");
        
            // echo "<a class='btn btn-primary' href='purchesadd.php'>ADD MORE</a>";
            // echo "<a class='btn btn-secondary ml-4' href='purches.php'>NO THANKS</a>";
    
           // }
           // else{
           // echo "looks not good " . $conn->error;
           // }
        //
    
        $conn->close();
?>