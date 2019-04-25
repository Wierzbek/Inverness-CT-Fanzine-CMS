<?php  

   if(isset($_POST['create_user'])) 
   {
       		
            // create static variables
            $user_firstname    = escape($_POST['first_name']);
            $user_lastname     = escape($_POST['last_name']);
            $user_type         = escape($_POST['user_type']);
            $user_password     = escape($_POST['pass']);
            $user_email        = escape($_POST['email']);
            $reg_date		   = date(d-m-y);

            $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10));    
              
            $query = "INSERT INTO users(first_name, last_name, email, pass, reg_date, user_type) "; 
                 
            $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_email}','{$user_password}','{$reg_date}','{$user_type}')"; 
                 
            $create_user_query = mysqli_query($connection, $query);  
              
            confirmQuery($create_user_query); 
       
       		echo "User Created: " . " " . "<a href='users.php'>View Users</a> "; 
   }

?>

    <form method="post" enctype="multipart/form-data">  

      <div class="form-group">
         <label for="title">First Name</label>
          <input type="text" class="form-control" name="user_firstname">
      </div>

       <div class="form-group">
         <label for="post_status">Last Name</label>
          <input type="text" class="form-control" name="user_lastname">
      </div>
     
      <div class="form-group">       
       <select name="user_type" id="">
        <option value="subscriber">Select Options</option>
          <option value="Admin">Admin</option>
          <option value="user">User</option>
       </select>         
      </div>
      
      <div class="form-group">
         <label for="post_content">Email</label>
          <input type="email" class="form-control" name="user_email">
      </div>
      
      <div class="form-group">
         <label for="post_content">Password</label>
          <input type="password" class="form-control" name="user_password">
      </div>

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
      </div>

</form>
    