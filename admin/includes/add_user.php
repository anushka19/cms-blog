
<?php
   

   if(isset($_POST['create_user'])) {



            //$user_id = $_POST['user_id'];
            $user_firstname= $_POST['user_firstname'];
            $user_lastname= $_POST['user_lastname'];
            $user_role= $_POST['user_role'];
    
           // $post_image= $_FILES['image']['name'];
            //$post_image_temp=$_FILES['image']['tmp_name'];
    
    
            $username = $_POST['username'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];

            //$post_date = date('d-m-y');
        

       
    //     move_uploaded_file($post_image_temp, "../images/$post_image" );
       
       
      $query = "INSERT INTO users(user_firstname,user_lastname,user_role,username,user_email,user_password) ";
             
      $query .= "VALUES ('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}') "; 
             
      $create_user_query = mysqli_query($connection, $query); 
      
      confirmQuery($create_user_query);
          
    //   confirmQuery($create_post_query);

    //   $the_post_id = mysqli_insert_id($connection);


    //   echo "<p class='bg-success'>Post Created. <a href='../posts.php?p_id={$the_post_id}'>View Post </a> or <a href='posts.php'>Edit More Posts</a></p>";
       


   }
    

    
    
?>

    <form action="" method="post" enctype="multipart/form-data">    
     
     
    <div class="form-group">
       <label for="fname">First Name</label>
       <input type="text" class="form-control" name="user_firstname">
    </div>
    <div class="form-group">
       <label for="post_status">Last Name</label>
          <input type="text" class="form-control" name="user_lastname">
      </div>

        <!-- <div class="form-group">
       <label for="post_category">Post Category Id</label>
       <input type="text" class="form-control" name="post_category_id">
       </div> -->

       <div class="form-group">

    <select name="user_role" id="">


    <option value="subscriber">Select Options</option>
    <option value="admin">Admin</option>
    <option value="subscriber">Subscriber</option>

    </select> 
    </div>
           
        
      
      
     


       
           
<?php

        // $users_query = "SELECT * FROM users";
        // $select_users = mysqli_query($connection,$users_query);
        
        // confirmQuery($select_users);


        // while($row = mysqli_fetch_assoc($select_users)) {
        // $user_id = $row['user_id'];
        // $username = $row['username'];
            
            
        //     echo "<option value='{$username}'>{$username}</option>";
         
            
        // }

?>
           
        
    
      
    





      <!-- <div class="form-group">
         <label for="title">Post Author</label>
          <input type="text" class="form-control" name="author">
      </div> -->
      
      

      
      
      
      
    <!-- <div class="form-group">
         <label for="post_image">Post Image</label>
          <input type="file"  name="image">
      </div> -->

      <div class="form-group">
         <label for="username">Username</label>
          <input type="text" class="form-control" name="username">
      </div>
      
      <div class="form-group">
         <label for="post_content">Email</label>
         <input type="email" class="form-control" name="user_email">
         </textarea>
      </div>

      <div class="form-group">
         <label for="post_content">Password</label>
         <input type="password" class="form-control" name="user_password">
         </textarea>
      </div>
      
      

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
      </div>


</form>
    