

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">




            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-white" href="index.php"><b>Mental Shift blog</b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>

                    </li>

                    <li>
                        <a href="#">Contact</a>
                    </li>

<!--                    echo out all the categoriesas in the nav bar-->
<!--                    --><?php
//                    $query = 'SELECT * FROM categories LIMIT 3';
//                    $select_all_categories_query = mysqli_query($connection, $query);
//                    while ($row = mysqli_fetch_array($select_all_categories_query)) {
//                        $cat_title = $row['cat_title'];
//                        echo "<li><a href='#'>{$cat_title}</a></li>";
//                    }?>
<!--
   -->
                     <li>
                        <a href="admin">Admin</a>
                    </li>

                    <li>
                        <a href="registration.php">Registration</a>
                    </li>



<?php 


if(isset($_GET['p_id'])){
    $the_post_id=$_GET['p_id'];

//$query = "SELECT * FROM posts WHERE post_id ={$the_post_id}";
//                $select_all_post_query = mysqli_query($connection, $query);
                // while ($row = mysqli_fetch_assoc($select_all_post_query)) {
                //      $post_id = $row['post_id'];
    echo "<li><a href='admin/posts.php?source=edit_post&p_id={$the_post_id}'>Edit post</a></li>";
                  
};

// if (isset($_SESSION['user_role'])) {

//     if(isset($_GET['p_id'])){

//        echo $the_post_id=$_GET['p_id'];

//         //echo "<li><a href='admin/post.php?source=edit_post&p_id={$the_post_id}'>Edit post</a></li>";

//     };

//     }


 ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>