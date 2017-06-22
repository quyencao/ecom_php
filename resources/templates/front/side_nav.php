<div class="col-md-3">
    <p class="lead">Shop Name</p>
    <div class="list-group">
        <?php
            $query = "SELECT cat_title FROM category";

            $result = mysqli_query($connection, $query);

            if(!$result) {
                die('QUERY FAILED: ' . mysqli_error($connection));
            }

            while($category = mysqli_fetch_assoc($result)) {
                echo "<a href='#' class='list-group-item'>{$category['cat_title']}</a>";
            }
        ?>
    </div>
</div>