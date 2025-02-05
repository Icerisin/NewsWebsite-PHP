    <footer>
        <div class="container">
        <div class="logo">
                <a href="">
                <img src="../admin/assets/image/<?php getLogo('footer') ?>" alt="" width="90px" height="90px">
                </a>
            </div>
            <div class="about">
                <?php getDescription() ?>
            </div>
            <div class="connect">
                <ul>
                <?php
                   $followData = getFollow('row5'); // Fetch follow data for row1
                   foreach ($followData as $follow) {
                       echo '<li>';
                       echo '<a><img src="../admin/assets/image/' . $follow['image'] . '" alt="" width="40px" height="40px"></a>';
                       echo '<a><span>' . $follow['label'] . '</span></a>'; // Output the label
                       echo '</li>';
                   }
                   $followData = getFollow('row7'); // Fetch follow data for row1
                   foreach ($followData as $follow) {
                       echo '<li>';
                       echo '<a><img src="../admin/assets/image/' . $follow['image'] . '" alt="" width="40px" height="40px"></a>';
                       echo '<a><span>' . $follow['label'] . '</span></a>'; // Output the label
                       echo '</li>';
                   }
                   $followData = getFollow('row2'); // Fetch follow data for row1
                   foreach ($followData as $follow) {
                       echo '<li>';
                       echo '<a><img src="../admin/assets/image/' . $follow['image'] . '" alt="" width="40px" height="40px"></a>';
                       echo '<a><span>' . $follow['label'] . '</span></a>'; // Output the label
                       echo '</li>';
                   }
                ?>
                </ul>
            </div>
        </div>
    </footer> 
</body>
<!-- @slick slider -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- @theme js -->
<script src="assets/script/theme.js"></script>
<!-- @funcy box -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>