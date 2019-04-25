<?php include "includes/header.php" ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
						<h1 class="page-header">
							Welcome to the admin panel
						</h1>
						<?php
							if(isset($_GET['source']))
							{
								$source = $_GET['source'];
							}
				            else
							{
								$source = '';
							}
							 
							switch($source)
							{
								case 'add_player';

								include "includes/add_player.php";
								break;

								default:
						
								include "includes/view_players.php";
								
								break;
							}
						?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>

        <!-- /#page-wrapper -->
<?php include "includes/footer.php" ?>
