<?php require_once('../../includes/boot.php'); ?>
<?php include_layout_template("admin_header.php") ?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php include_layout_template("admin_top_nav.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include_layout_template("admin_side_nav.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
          <?php include_layout_template("admin_content.php"); ?>
        </div>
        <!-- /#page-wrapper -->
  <?php include_layout_template("admin_footer.php"); ?>
