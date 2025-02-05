<?php 
    include('sidebar.php');
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Description</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Description</label>
                                      <textarea name="text" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <a href="view-text.php" class="btn btn-danger">Cancel</a>
                                        <button type="submit" name="btn-add-text" class="btn btn-primary">Submit</button>
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