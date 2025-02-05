<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<?php
$cn = new mysqli('localhost','root','','phpclass11_12_project','3317');
if(!$cn){
    die('Error db');
}
date_default_timezone_set('Asia/Phnom_Penh');
session_start();

function uploadFile($type){
    $filename= $_FILES[$type]['name'];
    $tmp_name= $_FILES[$type]['tmp_name'];
    $image = time().'-'.$filename;
    $path = 'assets/image/'.$image;
    move_uploaded_file($tmp_name,$path);

    return $image;
}

function register(){
    global $cn;
    if(isset($_POST['btn_register'])){
        $username = $_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $filename=$_FILES['profile'];
        $image= uploadFile('profile');
        $date = date('d/M/Y');
        if(!empty($username) && !empty($email) && !empty($password) && !empty($filename)){
            $passwordHash =md5($password);
            $sql ="INSERT INTO `users`( `username`, `email`, `password`, `profile`, `date`) 
            VALUES ('$username','$email','$passwordHash','$image','$date')";
            $rs = $cn->query($sql);
                if($rs){
                    $sql="SELECT `id` FROM `users` ORDER BY `id` DESC LIMIT 1";
                    $rs =$cn->query($sql);
                    $row=$rs->fetch_assoc();
                    $_SESSION['user'] =$row['id'];
                    header('location: login.php');
                }
        }
    }
}
register();

function login(){
    global $cn;
    if(isset($_POST['btn_login'])){
        $name_email =$_POST['name_email'];
        $password =$_POST['password'];
        if(!empty($name_email) && !empty($password)){
            $passwordHash =md5($password);
            $sql="SELECT `id` FROM `users` WHERE (`username` = '$name_email' || `email` = '$name_email')
                AND `password` = '$passwordHash'";
            $rs = $cn->query($sql);
            if($rs){
                $row = $rs ->fetch_assoc();
                $_SESSION['user'] = $row['id'];
                header('location: index.php');
            }
        }
    }
}
login();

function add_logo(){
    global $cn;
    if(isset($_POST['btn-add-logo'])){
        $status = $_POST['status'];
        $filename= $_FILES['image'];
        if(!empty($status) && !empty($filename)){
            $image = uploadFile('image');
            $sql="INSERT INTO `logos`(`image`,`status`)
                  VALUE ('$image','$status')";
            $rs =$cn->query($sql);
            if($rs){
                header('location: view-logo.php');
            }
        }
    }
}
add_logo();

function view_logo(){
    global $cn;
    $sql= "SELECT * FROM logos ORDER BY id DESC";
    $rs = $cn->query($sql);
    if($rs){
        while($row = $rs->fetch_assoc()){
            echo'<tr>
            <td>'.$row['status'].'</td>
            <td><img width="100" src="assets/image/'.$row['image'].'"/></td>
            <td width="150px">
                <a href="edit-logo.php?id='.$row['id'].'"class="btn btn-primary">Update</a>
                <button type="button" remove-id="'.$row['id'].'" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Remove
                </button>
            </td>
        </tr>';
        }
    }
}


function edit_logo(){
    global $cn;
    if(isset($_POST['btn-edit-logo'])){
        $id = $_GET['id'];
        $status = $_POST['status'];
        $filename = $_FILES['image']['name'];

        $image = '';
        if(!empty($filename)){
            $image = uploadFile('image');
        } else {
            $image = $_POST['old_logo'];
        }
        $sql = "UPDATE `logos` SET `image`=?, `status`=? WHERE `id`=?";
        $stmt = $cn->prepare($sql);
        $stmt->bind_param("ssi", $image, $status, $id);
        if($stmt->execute()){
            header('location: view-logo.php');
            exit();
        } else {
            echo "Error: " . $cn->error;
        }
        $stmt->close();
    }
}

edit_logo();

function delete_logo(){
    global $cn;
    if(isset($_REQUEST['btn-remove-logo'])){
        $remove_id=$_POST['remove_id'];
        $sql = "DELETE FROM logos WHERE id=$remove_id";
        $res = $cn->query($sql);
        if($res){
            echo'<script>
            jQuery(document).ready(()=>{
                swal("Good job!", "You clicked the button!", "success");})
        </script>';
        }
}
}
delete_logo();
 

function add_news(){
    global $cn;
    if(isset($_POST['btn-submit-news'])){
        $user_id = $_SESSION['user'];
        $date = date('d/M/Y');

        $title  = $_POST['title'];
        $type   = $_POST['type'];
        $category   =$_POST['category'];
        $fileBanner =$_FILES['banner']['name'];
        $fileThumbnail  =$_FILES['thumbnail']['name'];
        $description    =$_POST['description'];

        $banner='';
        $thumbnail='';
        if(!empty($fileBanner)){
            $banner = uploadFile('banner');
        }
        if(!empty($fileThumbnail)){
            $thumbnail=uploadFile('thumbnail');
        }
        if(!empty($title) && !empty($type) && !empty($category) && !empty($banner) && !empty($thumbnail) && !empty($description))
        {
            $sql ="INSERT INTO `news`(`user_id`, `title`, `date`, `description`, `banner`, `thumbnail`, `news_type`, `categories`) 
            VALUES ('$user_id','$title','$date','$description','$banner','$thumbnail','$type','$category')";
            $rs = $cn->query($sql);
            if($rs){
                header('location: view-news.php');
            }
        }else{
            echo '<script>
                jQuery(document).ready(function(){
                    swal({
                        text: "Please fill in information",
                        icon: "warning",
                      });
                    })
            </script>';
        }
    }
}
add_news();

function getPagination($tb,$limit){
    global $cn;
    $sql = "SELECT COUNT(`id`) AS total_id from `$tb`";
    $res = $cn->query($sql);
    $row = $res ->fetch_assoc();
    $page = ceil($row['total_id']/$limit);
    for($i=1;$i<=$page;$i++){
        echo '<li class="mx-2">
        <a href="?page='.$i.'">'.$i.'</a>
        </li>';
    }
}

function view_news($page,$limit){
    global $cn;
    $start=($page-1)*$limit;
    $sql="SELECT `t_new`.*,`t_user`.`username`
          FROM `news` AS `t_new` 
          JOIN `users` AS `t_user`
           ON `t_new`.`user_id` = `t_user`.`id`
          ORDER BY `id` DESC LIMIT $start,$limit";
    $rs =$cn->query($sql);
    while($row=$rs->fetch_assoc()){
        echo '
            <tr>
            <td>'.$row['title'].'</td>
            <td>'.$row['news_type'].'</td>
            <td>'.$row['categories'].'</td>
            <td>'.$row['date'].'</td>
            <td>'.$row['username'].'</td>
            <td>'.$row['viewer'].'</td>
            <td><img width="100" src="assets/image/'.$row['thumbnail'].'"/></td>
            <td width="150px">
                <a href="edit-news.php?id='.$row['id'].'"class="btn btn-primary">Update</a>
                <button type="button" remove-id="'.$row['id'].'" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Remove
                </button>
            </td>
            </tr>';
          }
    }
    
    function edit_news() {
        global $cn;
    
        if (isset($_POST['btn-edit-news'])) {
            // Retrieve form data
            $id = $_GET['id'];
            $title = $_POST['title'];
            $type = $_POST['type'];
            $category = $_POST['category'];
            $fileBanner = $_FILES['banner']['name'];
            $fileThumbnail = $_FILES['thumbnail']['name'];
            $description = $_POST['description'];
    
            // Default values for banner and thumbnail
            $banner = $_POST['old_banner'];
            $thumbnail = $_POST['old_thumbnail'];
    
            // Handle banner upload
            if (!empty($fileBanner)) {
                $banner = uploadFile('banner');
            }
    
            // Handle thumbnail upload
            if (!empty($fileThumbnail)) {
                $thumbnail = uploadFile('thumbnail');
            }
    
            // Check if required fields are not empty
            if (!empty($title) && !empty($type) && !empty($category) && !empty($description)) {
                // Update news article in the database
                $sql = "UPDATE `news` 
                        SET `title` = '$title', `description` = '$description', `banner` = '$banner', `thumbnail` = '$thumbnail', `news_type` = '$type', `categories` = '$category'
                        WHERE `id` = '$id'";
                $rs = $cn->query($sql);
    
                // Check if the query was successful
                if ($rs) {
                    header('location: view-news.php');
                    exit(); // Terminate script after redirection
                } else {
                    echo '<script>
                            jQuery(document).ready(function(){
                                swal({
                                    text: "Failed to update news",
                                    icon: "error",
                                });
                            });
                        </script>';
                }
            } else {
                echo '<script>
                        jQuery(document).ready(function(){
                            swal({
                                text: "Please fill in all fields",
                                icon: "warning",
                            });
                        });
                    </script>';
            }
        }
    }
    
    edit_news(); // Call the function to process form submission
  
    
    function delete_news(){
        global $cn;
        if(isset($_REQUEST['btn-remove-news'])){
            $remove_id=$_POST['remove_id'];
            $sql = "DELETE FROM `news` WHERE id=$remove_id";
            $res = $cn->query($sql);
            if($res){
                echo'<script>
                jQuery(document).ready(()=>{
                    swal("Good job!", "You clicked the button!", "success");})
            </script>';
            }
    }
    }
    delete_news();

    function get_feedback(){
        global $cn;
        $sql = "SELECT * FROM feedback ORDER BY id ASC";
        $rs = $cn->query($sql);
        if($rs){
            while($row = $rs->fetch_assoc()){
                echo '<tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['username'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['phone'].'</td>
                <td>'.$row['address'].'</td>
                <td>'.$row['description'].'</td>
                <td>'.$row['date'].'</td>
                <td width="150px">
                <button type="button" remove-id="'.$row['id'].'" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Remove
                </button>
            </td>
            </tr>';
            }
        }
    }

    function deleteFeedback(){
        global $cn;
        if(isset($_REQUEST['btn-remove-feedback'])){
          $remove_id=$_POST['remove_id'];
          $sql = "DELETE FROM `feedback` WHERE id=$remove_id";
          $res = $cn->query($sql);
          if($res){
              echo'<script>
              jQuery(document).ready(()=>{
                  swal("Good job!", "You clicked the button!", "success");})
          </script>';
        
        }
    }
}

deleteFeedback();
    
function add_social() {
    global $cn;
    
    if(isset($_POST['btn-add-social'])) {
        $label = $_POST['label'];
        $fileimage = $_FILES['image']['name'];
        $url = $_POST['url'];
        $status = $_POST['status'];
        if(!empty($label) && !empty($fileimage) && !empty($url) && !empty($status)){
            $image = uploadFile('image');
            
            if($image !== false) { 
                $sql = "INSERT INTO `follow_us`(`label`, `image`, `url`, `status`) 
                        VALUES (?, ?, ?, ?)";
                $stmt = $cn->prepare($sql);
                $stmt->bind_param("ssss", $label, $image, $url, $status);
                $stmt->execute();
            }
           }   if($stmt->affected_rows > 0){
                    header('location: view-social.php');
                    exit;
                } else {
                    echo 'Failed to add social data.';
                }
                
                $stmt->close();
            } 
        }


add_social();

    function view_social(){
        global $cn;
        $sql="SELECT * FROM `follow_us` ORDER BY id DESC";
        $rs=$cn->query($sql);
        if($rs){
            while($row = $rs->fetch_assoc()){
                echo'<tr>
                <td>'.$row['label'].'</td>  
                <td><img width="100" src="assets/image/'.$row['image'].'"/></td>
                <td>'.$row['url'].'</td>
                <td>'.$row['status'].'</td>
                <td width="150px">
                    <a href="edit-social.php?id='.$row['id'].'"class="btn btn-primary">Update</a>
                    <button type="button" remove-id="'.$row['id'].'" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Remove
                    </button>
                </td>
            </tr>';
            }
        }
    }
    function edit_social(){
        global $cn;
        if(isset($_POST['btn-edit-social'])){
            $id = $_GET['id']; // Check if id is received correctly
        
            $label = $_POST['label'];
            $url = $_POST['url'];
            $status = $_POST['status'];
            
            if(!empty($_FILES['image']['name'])){
                $image = uploadFile('image');
            } else {
                $image = $_POST['old_social'];
            }
            
            $sql = "UPDATE `follow_us` SET `label`=?, `url`=?, `image`=?, `status`=? WHERE `id`=?";
            $stmt = $cn->prepare($sql);
            $stmt->bind_param("ssssi", $label, $url, $image, $status, $id); // Check if types and order match
            if($stmt->execute()){
                header('location: view-social.php');
                exit();
            } else {
                echo "Error: " . $cn->error;
            }
            $stmt->close();
        }
    }
    
    edit_social();
    
    function delete_social(){
        global $cn;
        if(isset($_REQUEST['btn-remove-social'])){
            $remove_id=$_POST['remove_id'];
            $sql = "DELETE FROM follow_us WHERE id=$remove_id";
            $res = $cn->query($sql);
            if($res){
                echo'<script>
                jQuery(document).ready(()=>{
                    swal("Good job!", "You clicked the button!", "success");})
            </script>';
            }
    }
    }
    delete_social();

    function add_text(){
        global $cn;
        if(isset($_POST['btn-add-text'])){
            $description =$_POST['text'];

            if(!empty($description)){
                $sql ="INSERT INTO `about_us`(`description`) 
                VALUES ('$description')";
                $rs = $cn->query($sql);
                if($rs){
                    header('location: view-text.php');
                }
            }
            
        }
    }
 add_text();
 
 function view_text(){
        global $cn;
        $sql= "SELECT * FROM about_us ORDER BY id DESC";
        $rs = $cn->query($sql);
        if($rs){
            while($row = $rs->fetch_assoc()){
                echo'<tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['description'].'</td>
                   
                </td> 
                <td width="150px">
                <a href="edit-text.php?id='.$row['id'].'"class="btn btn-primary">Update</a>
                <button type="button" remove-id="'.$row['id'].'" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Remove
                </button>
                </td>
            </tr>';
            }
        }
    }

    function edit_text(){
        global $cn;
        if(isset($_POST['btn-edit-text'])){
            $id = $_GET['id'];
            $description = $_POST['text'];
            if(!empty($description)){
                $sql = "UPDATE `about_us` SET `description`=? WHERE `id`=?";
                $stmt = $cn->prepare($sql);
                $stmt->bind_param("si", $description, $id); // Assuming `id` is an integer
                $stmt->execute(); // Execute the SQL statement
                header('location: view-text.php');
                exit; // Ensure script stops execution after redirection
            } else {
                echo 'Text description is empty.';
            }
        }
    }
    
    edit_text();
    function delete_text(){
        global $cn;
        if(isset($_REQUEST['btn-remove-text'])){
            $remove_id=$_POST['remove_id'];
            $sql = "DELETE FROM about_us WHERE id=$remove_id";
            $res = $cn->query($sql);
            if($res){
                echo'<script>
                jQuery(document).ready(()=>{
                    swal("Good job!", "You clicked the button!", "success");})
            </script>';
            }
    }
    }
    delete_text();
    
?>
