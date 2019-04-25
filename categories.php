<?php include "includes/header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Categories
                            <small>Author</small>
                        </h1>
                        <div class="col-xs-6">

                        <?php insert_categories(); ?>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title">Category</label>
                                    <input class="form-control" type="text" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>
							
							<?php
								if(isset($_GET['edit']))
								{
									$cat_id = $_GET['edit'];
									include "includes/update_categories.php";
								}
							?>
							
                        </div>
                        
                        <!-- Add category form -->
                        <div class="col-xs-6">

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category title</th>
                                    </tr>
                                </thead>
                                <tbody>                                    
                                    
                                    <!-- Display the dynamic data (navbar options) from the database -->
                                    <?php // FIND ALL CATEGORIES QUERY
									//<!-- Load the menu options from the database -->
									$query = "SELECT * FROM categories";
									$select_categories = mysqli_query($connection, $query);
									
                                    while($row = mysqli_fetch_assoc($select_categories))
                                    {
                                        $cat_title = $row['cat_title'];
                                        $cat_id = $row['cat_id'];
                                        echo "<tr>";
                                        echo "<td>{$cat_id}</td>";    
                                        echo "<td>{$cat_title}</td>";
										echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
										echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>

									
									<?php // DELETE THE QUERY
									if(isset($_GET['delete']))												
									{
										$get_cat_id = $_GET['delete'];
										$query = "DELETE FROM categories WHERE cat_id = {$get_cat_id}";
										$delete_query = mysqli_query($connection, $query);
										header("Location: categories.php");
									}									
									
									?>
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes/footer.php"; ?>