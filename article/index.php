<?php include('header.php'); ?>
<main class="home">
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            TRENDING NOW
                        </div>   
                        <div class="content-right">
                            <marquee behavior="" direction="left">
                                <div class="text-news">
                                    <?php getTrading() ?>
                                </div>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-6 content-left">
                    <?php getViewer('trending') ?>
                </div>
                <div class="col-6 content-right">
                    <div class="col-12">
                        <?php getViewer('') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            SPORT NEWS
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
            <?php getListType('sport',3) ?>
            </div>
        </div>
    </section>

    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            SOCIAL NEWS
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="news">
        <div class="container">
            <div class="row">
               <?php getListType('social',3) ?>
        </div>
    </section>
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            ENTERTAINMENT NEWS
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="news">
        <div class="container">
            <div class="row">
                <?php getListType('entertainment') ?>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>