 <div class="col-md-4">


                <!-- Blog Search Well -->
                <div class="well bg-dark">
                    <h4>Blog Search</h4>
                    <form action = "./search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control" >
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form><!-- search form -->
                    <!-- /.input-group -->
                </div>


 <!-- login -->
                <div class="well">
                    <h4>sign in</h4>
                    <form action = "includes/login.php" method="post">
                    <div class="for-group">
                        <input name="username" type="text" class="form-control" placeholder="Eneter username" required="required">
                    </div>
                     <div class="input-group">
                        <input name="password" type="Password" class="form-control" placeholder="Eneter password" required="required">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" name="login" type="submit" >login
                                
                            </button>
                            

                        </span>
                        
                    </div>
                    </form><!-- search form -->
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                         <?php 

              $query = 'SELECT * FROM categories LIMIT 5';
            $select_categories_query = mysqli_query($connection, $query);
                     ?>

                    <h4>Blog Categories</h4>
                    <div class="row">

                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                            <?php
                    while ($row = mysqli_fetch_array($select_categories_query)) {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];

                        echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>"; 
                    }
                    ?>
                            </ul>
                        </div>
                      
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
               <?php include"widget.php"?>

            </div>

        </div>