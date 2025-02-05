<?php
 include('sidebar.php');
     $id =$_GET['id'];
     $sql = "SELECT * FROM `logos` WHERE `id`=$id";
     $res = $cn->query($sql);
     $row= $res->fetch_assoc();
     
 ?>
   <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Edit Description</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label><Strong>Text</Strong></label>
                                        <textarea name="text" id="" cols="30" rows="10" value=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <a href="view-text.php" class="btn btn-danger">Cancel</a>
                                        <Button type="submit" name="btn-edit-text" class="btn btn-primary">Submit</Button>
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