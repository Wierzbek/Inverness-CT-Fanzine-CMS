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
							Standings table
							<small><?php echo $_SESSION['first_name'] ?></small>
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
								case 'add_team';
								include "includes/add_team.php";
								break;

								case 'fixtures';
								include "includes/fixtures.php";
								break;

								case 'add_fixture';
								include "includes/add_fixture.php";
								break;
								
								case 'live';
								include "includes/live_update.php";
								break;

								default:
								include "includes/view_standings.php";
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
<?php include "includes/footer.php"; ?>