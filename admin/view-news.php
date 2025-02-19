<?php 
    include('sidebar.php');
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>All Sport News</h3>
                        </div>
                        <div class="bottom view-post">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <table class="table align-middle bg-secondary text-light" border="1px" style="table-layout: fixed;" >
                                        <tr>
                                            <th width="200px">Title</th>
                                            <th>Post Type</th>
                                            <th>Categories</th>
                                            <th>Publish Date</th> 
                                            <th>Username</th>                                             <th>Viewers</th>
                                            <th>Thumbnail</th>
                                            <th>Action</th>
                                        </tr>
                                       <?php
                                       if(isset($_GET['page'])){
                                        $page = $_GET['page'];
                                       }else{
                                        $page =1;
                                       }
                                       view_news($page,5);
                                       ?>
                                    </table>
                                    <ul class="pagination">
                                        <?php getPagination('news',5);?>
                                    </ul>

                                    <div class="modal fade" id="exampleModal" id="Modal_Delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to remove this post?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="" method="post">
                                                        <input type="hidden" class="value_remove" name="remove_id">
                                                        <button type="submit" class="btn btn-danger btn-remove-news" name="btn-remove-news" class="btn btn-danger">Yes</button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>  
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
</script>