<?php include'includes/db.php'?>
<?php include'includes/header.php'?>


    <!-- Navigation -->
    <?php include'includes/navigation.php'?>

<style>
    body{
        padding-top: 0;
    }
</style>
<!--slider-->
<div class="container-fluid mt-0 p-0">
    <div class="row">
<!--        <div class=" ">-->
<!--            <img src="images/slide2.png" style="width:100%;">-->
<!--        </div>-->

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/slide1.png" style="width:100%;" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="images/slide2.png" style="width:100%;" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                ...
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

</div><br><br>


    <!-- Page Content -->
    <div class="container">
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php 

                $query = "SELECT * FROM posts ";
                $select_all_post_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_post_query)) {
                        $post_id = $row['post_id'];
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = substr($row['post_content'], 0,100);
                        $post_status = $row['post_status'];

                       if ($post_status !== 'posted') {
                           echo "";}
                       else{


                        ?>

                        <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr>
                <a href="post.php?p_id=<?php echo $post_id ?>">
                <img class="img-responsive" src="images/<?php echo $post_image?>" alt="img">
            </a>
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>


              <?php } } ?>


            
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
           <?php include'includes/Sidebar.php'?>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
      <?php include'includes/footer.php'?>

      