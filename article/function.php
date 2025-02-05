
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
// @Connection database
$cn = new mysqli('localhost','root','','phpclass11_12_project','3317');
date_default_timezone_set('Asia/Phnom_Penh');

function getLogo($status){
    global $cn;
    $sql = "SELECT * FROM `logos` WHERE status ='$status' ORDER BY `id` DESC LIMIT 1";
    $rs = $cn->query($sql);
    $row = $rs->fetch_assoc();
    echo $row['image'];
}

function getTrading(){
    global $cn;
    $sql ="SELECT * FROM `news` ORDER BY id DESC LIMIT 3";
    $rs = $cn->query($sql);
    while($row=$rs->fetch_assoc()){
        echo'
        <i class="fas fa-angle-double-right"></i>
        <a href="news-detail.php?id='.$row['id'].'">'.$row['title'].'</a> &ensp;';
        
    }
}

function getDetail($id){
    global $cn;
    $sql = "SELECT * FROM `news` WHERE `id` = $id";
    $rs=$cn->query($sql);
    $row =$rs->fetch_assoc();
    echo'
        <div class="thumbnail">
            <img width="740" height="400" src="../admin/assets/image/'.$row['banner'].'">
        </div>
        <div class="detail">
            <h3 class="title">'.$row['title'].'</h3>
            <div class="date">'.$row['date'].'</div>
            <div class="description">'.$row['description'].'</div>
        </div>';
    $cn->query("UPDATE `news` SET `viewer` = `viewer` +1 WHERE `id` = $id");
}

function get_type($id){
    global $cn;
    $sql ="SELECT `news_type` FROM `news` WHERE `id` = $id";
    $rs = $cn->query($sql);
    $row= $rs->fetch_assoc();
    return $row['news_type'];
}

function getRelated($id){
    global $cn;
    $type = get_type($id);
    $sql = "SELECT * FROM `news` WHERE  `news_type` = '$type'
            AND `id` NOT IN($id) ORDER BY `id` DESC LIMIT 2";
    
    $rs=$cn->query($sql);
    while($row = $rs->fetch_assoc()){
        echo ' <figure>
        <a href="news-detail.php?id='.$row['id'].'">
            <div class="thumbnail">
                <img width="350" height="250" src="../admin/assets/image/'.$row['thumbnail'].'" alt="">
            </div>
            <div class="detail">
                <h3 class="title">'.$row['title'].'</h3>
                <div class="date">'.$row['date'].'</div>
                <div class="description">
                  '.$row['description'].'
                </div>
            </div>
        </a>
    </figure>';
    }
}

function getViewer($type){
    global $cn;
    if($type == 'Trending'){
        $sql = "SELECT * FROM `news` ORDER BY `viewer` DESC LIMIT 1";
        $rs=$cn->query($sql);
        $row=$rs->fetch_assoc();
        echo '<figure>
        <a href="news-detail.php">
        <div class="thumbnail">
        <img width="730" height="400" src="../admin/assets/image/'.$row['banner'].'" alt="">
        <div class="title">
        '.$row['title'].'
        </div>
        </div>
        </a>
        </figure>';
    }else{
        $sql="SELECT * FROM `news` WHERE `id` != (SELECT `id` FROM `news` ORDER BY `viewer` DESC LIMIT 1)ORDER BY `viewer`  DESC LIMIT 2";
        $rs=$cn->query($sql);
        while($row=$rs->fetch_assoc()){
            echo '<figure>
            <a href="news-detail.php?id='.$row['id'].'">
            <div class="thumbnail">
            <img width="550" height="200" src="../admin/assets/image/'.$row['thumbnail'].'" alt="" object-fit: cover;>
            <div class="title">
            '.$row['title'].'
            </div>
            </div>
            </a>
            </figure>';
        }
    }
}

function getListType($type){
    global $cn;
    $sql ="SELECT * FROM `news` WHERE `news_type` ='$type' ORDER BY `id` DESC LIMIT 3";
    $rs= $cn->query($sql);
    while($row=$rs->fetch_assoc()){
        echo '
        <div class="col-4">
            <figure>
            <a href="news-detail.php?id='.$row['id'].'">
            <div class="thumbnail">
            <img width="730" height="400" src="../admin/assets/image/'.$row['thumbnail'].'" alt="">
            <div class="title">
            '.$row['title'].'
            </div>
            </div>
            </a>
            </figure>
        </div>';
    }
}

function Post_feedback(){
    global $cn;
    if(isset($_POST['btn_message'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $description = $_POST['description'];
        $Date = date('Y-m-d'); 

        if(!empty($name) && !empty($email) && !empty($phone) && !empty($address) && !empty($description)){
            $rs = $cn->prepare("INSERT INTO `feedback` (`username`, `email`, `phone`, `address`, `description`, `date`) VALUES (?, ?, ?, ?, ?, ?)");
            $rs->bind_param("ssssss", $name, $email, $phone, $address, $description, $Date);
            $rs->execute();
            $rs->close();
            
            echo '<script>
                    jQuery(document).ready(()=>{
                        swal("Good job!", "Data inserted successfully!", "success");
                    });
                  </script>';
        } else {
            echo '<script>
                    jQuery(document).ready(()=>{
                        swal("Empty", "Please fill all fields!", "error");
                    });
                  </script>';
        }
    }
}
Post_feedback();

function getFollow($status){
    global $cn;
    $sql = "SELECT * FROM `follow_us` WHERE status ='$status' ORDER BY `id` DESC LIMIT 7";
    $rs = $cn->query($sql);
    $output = array(); // Store image URL and label
    while ($row = $rs->fetch_array()) {
        $output[] = array(
            'image' => $row['image'],
            'label' => $row['label']
        );
    }
    return $output; // Return array of image URLs and labels
}

function getFooter_follow($status){
    global $cn;
    $sql = "SELECT * FROM `follow_us` WHERE status ='$status' ORDER BY `id` DESC LIMIT 7";
    $rs = $cn->query($sql);
    $output = array(); // Store image URL and label
    while ($row = $rs->fetch_array()) {
        $output[] = array(
            'image' => $row['image'],
            'label' => $row['label']
        );
    }
    
}
function getDescription(){
    global $cn;
    $sql ="SELECT * FROM `about_us` ORDER BY `id` ASC LIMIT 1"; 
    $rs=$cn->query($sql);
    if($rs && $rs->num_rows > 0) { // Check if the query was successful and if there are any rows returned
        $row = $rs->fetch_assoc(); // Fetch the data from the result set
        echo '<div class="description"><p>'.$row['description'].'</p></div>';
    } else {
        echo 'No description found.';
    }
}

function Search(){
    global $cn;
    if(isset($_GET['btn_search'])){
        $search = $_GET['query'];
        $sql = "SELECT * FROM `news` WHERE `title` LIKE '%$search%' ORDER BY `title` DESC LIMIT 1";

        $rs= $cn->query($sql);
        if($row = mysqli_fetch_assoc($rs)){
            echo '
                <div class="col-4">
                    <figure>
                        <a href="news-detail.php?id='.$row['id'].'&category='.$row['categories'].'">
                            <div class="thumbnail">
                                <img src="../admin/assets/image/'.$row['thumbnail'].'" width="350px" height="200px" style="object-fit:cover" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">'.$row['title'].'</h3>
                                <div class="date">'.$row['date'].'</div>
                                <div class="description">
                                '.$row['description'].'
                                </div>
                            </div>
                        </a>
                    </figure>
                </div>
            ';
        }
    }
}
function ListType( $type,$category){
    global $cn;
    $sql = "SELECT * FROM news WHERE categories='$category' && news_type = '$type' ORDER BY id DESC LIMIT 2";
    $rs = $cn->query($sql);
    while($row= $rs->fetch_assoc()){
       echo' <div class="col-4">
       <figure>
                <a href="news-detail.php?id='.$row['id']. '&category=' . $row['categories'] . ' ">
               <div class="thumbnail">
               <img width="350" height="200" src="../admin/assets/image/'.$row['thumbnail'].'" alt="">
               <div class="title">'.$row['title'].'</div>
               <div class="date">' . $row['date'] . '</div>
                            <div class="description">
                                ' . $row['description'] . '
                            </div>
               
               </div>
           </a>
       </figure>
   </div>';
    }
    

}
    