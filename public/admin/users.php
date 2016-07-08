<?php require_once('../../includes/boot.php'); ?>
<?php include_layout_template("admin_header.php") ?>
<?php
    
    $users = User::findAll();
   /* echo'<pre>';
    var_dump($users);
    echo'</pre>';
  */
?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <?php include_layout_template("admin_top_nav.php") ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include_layout_template("admin_side_nav.php") ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
          <div class="container-fluid">
              <!-- Page Heading -->
              <div class="row">
                  <div class="col-lg-12">
                      <h1 class="page-header">Users</h1>
                      <table class="table">
                          <?php foreach ($users as $user ):?>
                              <tr>
                                  <td><?= $user->attr('id') ?></td>
                                  <td><?= $user->attr('firstName') ?></td>
                                  <td><?= $user->attr('lastName') ?></td>
                              </tr>     
                          <?php endforeach ?>       
                      </table>
                      <ol class="breadcrumb">
                          <li>
                              <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                          </li>
                          <li class="active">
                              <i class="fa fa-file"></i> Blank Page
                          </li>
                      </ol>
                  </div>
              </div>
              <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
  <?php include_layout_template("admin_footer.php") ?>
