<?php 
    include('sidebar.php');
?>
<div class="col-10">
    <div class="content-right">
        <div class="top">
            <h3>Add Social Media Link</h3>
        </div>
        <div class="bottom">
            <figure>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label><strong>Label</strong></label>
                        <input type="text" placeholder="Social media name" class="form-control" name="label">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Icon</strong></label>
                        <span><font color="red">(Choose icon in formats 40 x 40)</font></span>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>URL</strong></label>
                        <input type="text" name="url" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>STATUS</strong></label>
                        <select class="form-control" name="status">
                            <option value="header">Header</option>
                            <option value="footer">Footer</option>
                            <option value="row1">row1</option>
                            <option value="row2">row2</option>
                            <option value="row3">row3</option>
                            <option value="row4">row4</option>
                            <option value="row5">row5</option>
                            <option value="row6">row6</option>
                            <option value="row7">row7</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <a href="view-social.php" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="btn-add-social" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </figure>
        </div>
    </div>
</div>
</div>
</div>
</main>
</body>
</html>
