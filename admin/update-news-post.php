<?php 
    include('sidebar.php');
    include('function.php');
    // echo $_SESSION['users'];
    $news_id = $_GET['id'];
    $sql = "SELECT * FROM `news` WHERE id='$news_id'";
    $rs = $connection->query($sql);
    $row = mysqli_fetch_assoc($rs);
    $selete_national = '';
    $selete_international = '';
    $selete_sport = '';
    $selete_social = '';
    $selete_entertainment = '';

    if ($row['type'] == 'National') {
        $selete_national = 'selected';
    } else {
        $selete_international = 'selected';
    }

    if ($row['category'] == 'Sport') {
        $selete_sport = 'selected';
    } else if ($row['category'] == 'Social') {
        $selete_social = 'selected';
    } else {
        $selete_entertainment = 'selected';
    }
?>
<div class="col-10">
    <div class="content-right">
        <div class="top">
            <h3>Add News</h3>
        </div>
        <div class="bottom">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="news_title" value="<?php echo $row['title'] ?>">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <select class="form-select" name="news_type">
                        <option value="National" <?php echo $selete_national ?>>National</option>
                        <option value="International" <?php echo $selete_international ?>>International</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-select" name="news_category">
                        <option value="Sport" <?php echo $selete_sport ?>>Sport</option>
                        <option value="Social" <?php echo $selete_social ?>>Social</option>
                        <option value="Entertainment" <?php echo $selete_entertainment ?>>Entertainment</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Thumbnail <p>(Thumbnail size 350x200)</p> </label>
                    <input type="file" class="form-control" name="news_thumbnail">
                </div>
                <img src="./assets/image/<?php echo $row['thumbnail']; ?>" width="120px" alt="">
                <!-- hidden Thumbnail -->
                <input type="hidden" name="old_thumbnail" value="<?php echo $row['thumbnail']; ?>">
                <div class="form-group">
                    <label>Banner <p>(Banner size 750x415)</p> </label>
                    <input type="file" class="form-control" name="news_banner">
                </div>
                <img src="./assets/image/<?php echo $row['banner'] ?>" width="120px" alt="">
                <!-- hidden banner -->
                <input type="hidden" name="old_banner" value="<?php echo $row['banner'] ?>">
                <div class="form-group mt-2">
                    <label>Description</label>
                    <textarea class="form-control" name="news_description"><?php echo $row['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <button name="accept_update_news" type="submit" class="btn btn-success">Update</button>
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</main>
</body>
</html>
