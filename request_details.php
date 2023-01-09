<?php 
include("connection/connect.php");
      if(isset($_POST['submit']))          
        { 
          if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['message']))
                    { 
                        $error = '<div class="alert alert-danger alert-dismissible fade show">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>All fields Must be Fillup!</strong>
                                  </div>'; 


                  }
          else{                    
                $sql = "INSERT INTO request_details(rd_name,rd_email,rd_message) VALUE('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";  // store the submited data ino the database :images
                  mysqli_query($conn, $sql); 
                 
                  header("Location: index.php");
              }
      }
  ?>