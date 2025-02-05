<?php
include('sidebar.php');
$id = $_GET['id'];
$sql = "SELECT * FROM `news` WHERE `id`=$id";
$res = $cn->query($sql);
$row = $res->fetch_assoc();
?>

<div class="col-10">
    <div class="content-right">
        <div class="top">
            <h3>Edit Sport News</h3>
        </div>
        <div class="bottom">
            <figure>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $row['title']; ?>" class="form-control" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-select" name="type">
                            <option value="sport" <?php echo ($row['news_type'] == 'sport') ? 'selected' : ''; ?>>SPORT</option>
                            <option value="social" <?php echo ($row['news_type'] == 'social') ? 'selected' : ''; ?>>SOCIAL</option>
                            <option value="entertainment" <?php echo ($row['news_type'] == 'entertainment') ? 'selected' : ''; ?>>ENTERTAINMENT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Categories</label>
                        <select class="form-select" name="category">
                            <option value="national" <?php echo ($row['categories'] == 'national') ? 'selected' : ''; ?>>NATIONAL</option>
                            <option value="international" <?php echo ($row['categories'] == 'international') ? 'selected' : ''; ?>>INTERNATIONAL</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Thumbnail <font color="red">(size 350 x 200)</font></label>
                        <input type="file" name="thumbnail" class="form-control">
                        <img width="120px" src="assets/image/<?php echo $row['thumbnail']; ?>" alt="">
                        <input type="hidden" name="old_thumbnail" value="<?php echo $row['thumbnail']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Banner <font color="red">(size 730 x 415)</font></label>
                        <input type="file" name="banner" class="form-control">
                        <img width="120px" src="assets/image/<?php echo $row['banner']; ?>" alt="">
                        <input type="hidden" name="old_banner" value="<?php echo $row['banner']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"><?php echo $row['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <a href="view-news.php" class="btn btn-success">Back</a>
                        <button type="submit" name="btn-edit-news" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </figure>
        </div>
    </div>
</div>
