<?php

function confirmQuery($result)
{
    global $connection;
    if(!create_post_query)
        {
            die("QUERY FAILED") . mysqli_error($connection);
        }
}

function insert_categories()
{
	global $connection;
	if(isset($_POST['submit']))
	{
		$cat_title = $_POST['cat_title'];
		if($cat_title == "" || empty($cat_title))
		{
			echo "You need to put some data in the box!";
		}
		else
		{
			$query = "INSERT INTO categories(cat_title)";
			$query .= "VALUE('{$cat_title}')";
			$create_category_query = mysqli_query($connection, $query);

			if(!$create_category_query)
			{
				die('QUERY FAILED' . mysqli_error($connection));
			}
		}
	}
}

?>