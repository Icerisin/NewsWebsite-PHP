<?php include('header.php'); ?>
    <div class="content contact">
        <section class="trending">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-trending">
                            <div class="content-left">
                                CONTACT US
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="wrap-follow">
                            <h4 class="title">FOLLOW US</h4>
                            <ul>
                            <a href="">
                            <ul>
                                <?php
                                $followData = getFollow('row1'); // Fetch follow data for row1
                                foreach ($followData as $follow) {
                                    echo '<li>';
                                    echo '<img src="../admin/assets/image/' . $follow['image'] . '" alt="" width="40px" height="40px">';
                                    echo '<span>' . $follow['label'] . '</span>'; // Output the label
                                    echo '</li>';
                                }   $followData = getFollow('row2'); // Fetch follow data for row1
                                foreach ($followData as $follow) {
                                    echo '<li>';
                                    echo '<img src="../admin/assets/image/' . $follow['image'] . '" alt="" width="40px" height="40px">';
                                    echo '<span>' . $follow['label'] . '</span>'; // Output the label
                                    echo '</li>';
                                }
                                $followData = getFollow('row3'); // Fetch follow data for row1
                                foreach ($followData as $follow) {
                                    echo '<li>';
                                    echo '<img src="../admin/assets/image/' . $follow['image'] . '" alt="" width="40px" height="40px">';
                                    echo '<span>' . $follow['label'] . '</span>'; // Output the label
                                    echo '</li>';
                                }
                                $followData = getFollow('row4'); // Fetch follow data for row1
                                foreach ($followData as $follow) {
                                    echo '<li>';
                                    echo '<img src="../admin/assets/image/' . $follow['image'] . '" alt="" width="40px" height="40px">';
                                    echo '<span>' . $follow['label'] . '</span>'; // Output the label
                                    echo '</li>';
                                }   $followData = getFollow('row5'); // Fetch follow data for row1
                                foreach ($followData as $follow) {
                                    echo '<li>';
                                    echo '<img src="../admin/assets/image/' . $follow['image'] . '" alt="" width="40px" height="40px">';
                                    echo '<span>' . $follow['label'] . '</span>'; // Output the label
                                    echo '</li>';
                                }   $followData = getFollow('row6'); // Fetch follow data for row1
                                foreach ($followData as $follow) {
                                    echo '<li>';
                                    echo '<img src="../admin/assets/image/' . $follow['image'] . '" alt="" width="40px" height="40px">';
                                    echo '<span>' . $follow['label'] . '</span>'; // Output the label
                                    echo '</li>';
                                }   $followData = getFollow('row7'); // Fetch follow data for row1
                                foreach ($followData as $follow) {
                                    echo '<li>';
                                    echo '<img src="../admin/assets/image/' . $follow['image'] . '" alt="" width="40px" height="40px">';
                                    echo '<span>' . $follow['label'] . '</span>'; // Output the label
                                    echo '</li>';
                                }
                                ?>
                            </ul>

                            </a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="wrap-contact">
                            <h4 class="title">FEEDBACK TO US</h4>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="label">Username</div>
                                        <input type="text" class="box" placeholder="Username" name="name" required> 
                                    </div>
                                    <div class="col-6">
                                        <div class="label">Email</div>
                                        <input type="email" class="box" placeholder="Email" name="email"required>
                                    </div>
                                    <div class="col-6">
                                        <div class="label" name="phone" >Telephone</div>
                                        <input type="tel" class="box" placeholder="Telephone" name="phone" required minlength="9" maxlength="10">
                                    </div>
                                    <div class="col-6">
                                        <div class="label">Address</div>
                                        <input type="text" class="box" placeholder="Address" name="address" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="label">Message</div>
                                        <textarea cols="30" rows="10" placeholder="Message Here" name="description" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="wrap-btn">
                                            <button type="submit" name="btn_message"><i class="fab fa-telegram-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php include('footer.php'); ?>