<?php 
    include('sidebar.php');
    include('function.php');
    $id = $_GET['id'];
    $sql="SELECT * FROM `logos` WHERE id='$id'";
    $rs = $connection->query($sql);
    $row = mysqli_fetch_assoc($rs);
    $thumbnial=$row ['thumbnial'];
        $header='';
        $footer='';
            if($row['status']=='Header'){
                $header='selected';
            }else{
                $footer='selected';
            }
   

?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Add Page Logo</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                   
                                    <div class="form-group">
                                        <label>Show On </label>
                                        <select name="showon" class="form-select">
                                            <option value="Header" <?php echo $header ?> > Header</option>
                                            <option value="Footer"<?php echo $footer ?> >Footer </option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>File</label>
                                        <input name="thumbnial" type="file" class="form-control">
                                        <img src="../admin/assets/image/<?php echo $thumbnial; ?>"  width="200" height="100" style="margin-top: 10px;"   alt="">
                                        <input type="hidden" value="<?php echo $thumbnial ?>" name="old_logo" >
                                    </div> 
                                    
                                    <div class="form-group " style="margin-top: 5px;">
                                        <button name="accept_updata_logo" type="submit" class="btn btn-success">Updata</button>
                                        <a href="./index.php" type="submit" class="btn btn-danger">Cancel</a>
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