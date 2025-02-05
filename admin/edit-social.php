<?php
 include('sidebar.php');
     $id =$_GET['id'];
     $sql = "SELECT * FROM `follow_us` WHERE `id`=$id";
     $res = $cn->query($sql);
     $row= $res->fetch_assoc();
     
 ?>
   <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Edit Social Icon</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                                         <div class="form-group">
                                        <label>Image</label>
                                        <input type="file"  name="image" class="form-control mb-3">
                                        <input type="hidden" name="old_social" value="<?php echo $row['image'] ?> ">  
                                        <img width="50" src="assets/image/<?php echo $row['image'] ?>" alt="" name="" id="img_social">
                                    </div>
                                     <div class="form-group">
                                        <label>Label</label>
                                       <input type="text" class="form-control" name="label"value="<?php echo $row['label']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Url</label>
                                       <input type="text" class="form-control" name="url" value="<?php echo $row['url']; ?>">
                                    </div>
                                    <div class="form-group"> 
                                        <label>status</label>
                                       <select name="status" class="form-select">
                                        <option value="header" <?php echo ($row['status'] === 'header') ? 'selected' : ''; ?>>Header</option>
                                        <option value="footer" <?php echo ($row['status'] === 'footer') ? 'selected' : ''; ?>>Footer</option>
                                        <option value="row1"<?php echo ($row['status'] === 'row1') ? 'selected' : ''; ?>>row1</option>
                                        <option value="row2"<?php echo ($row['status'] === 'row2') ? 'selected' : ''; ?>>row2</option>
                                        <option value="row3"<?php echo ($row['status'] === 'row3') ? 'selected' : ''; ?>>row3</option>
                                        <option value="row4"<?php echo ($row['status'] === 'row4') ? 'selected' : ''; ?>>row4</option>
                                        <option value="row5"<?php echo ($row['status'] === 'row5') ? 'selected' : ''; ?>>row5</option>
                                        <option value="row6"<?php echo ($row['status'] === 'row6') ? 'selected' : ''; ?>>row6</option>
                                        <option value="row7"<?php echo ($row['status'] === 'row7') ? 'selected' : ''; ?>>row7</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <a href="view-social.php" class="btn btn-danger">Cancel</a>
                                        <Button type="submit" name="btn-edit-social" class="btn btn-primary">Submit</Button>
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
<script>
       $(document).ready(function(){
        $('#image').change(function(){
            $("img").hide();
        });
    })
</script>