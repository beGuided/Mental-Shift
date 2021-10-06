<?php include'includes/db.php'?>
<?php include'includes/header.php'?>


<!-- Navigation -->
<?php include'includes/navigation.php'?>

<style>
    body{

        padding-top: 0;
        /*background-color: #afd9ee;*/
        /*background: linear-gradient(to right, #b6effb , white);*/
    }
</style>
<!--slider-->
<div class="container-fluid mt-0 p-0">

        </div><br><br>


        <!-- Page Content -->
        <div class="container  ">
            <div class="row">

                <!-- Blog Entries Column -->
                <div class="col-md-8 ">

                    <?php

                    $query = "SELECT * FROM posts WHERE post_status='posted' ORDER BY post_id DESC LIMIT 8";
                    $select_all_post_query = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($select_all_post_query)) {
                        $post_id = $row['post_id'];
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = substr($row['post_content'], 0,200);
                        $post_status = $row['post_status'];

                        if ($post_status !== 'posted') {
                            echo "";}
                        else{


                            ?>

                            <div class="pt-4">
                            <p></p>
                            </div>

                            <!-- First Blog Post -->
                            <h2 class="pt-5">
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
                            <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id ?> ">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                            <hr>


                        <?php } } ?>




                </div>

                <!-- Blog Sidebar Widgets Column -->
                <?php include'includes/sidebar.php'?>
                <!-- /.row -->

                <hr>

                <!-- Footer -->
                <?php include'includes/footer.php'?>

      