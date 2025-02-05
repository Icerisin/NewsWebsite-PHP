<?php include('header.php'); ?>
<main class="sport">
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                        Entertainment NEWS
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <?php 
                if(isset($_GET['page'])){
                    $page = $_GET ['page'];
                }else{
                    $page =1;
                }
                ListType('Entertainment','national')
                ?>

            </div>
            <div class="row pagination">
                <div class="col-12">
                    <ul>
                        <li>
                            <a href="">1</a>
                        </li>
                      
                       
                    </ul>   
                </div>
            </div>
        </div>
    </section>
</main>