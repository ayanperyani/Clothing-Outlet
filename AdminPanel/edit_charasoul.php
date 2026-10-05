<?php
include("shared/sidebar.php");
include("shared/header.php");
include("shared/connection.php");


$id = $_GET["chara_id"];

$sql = "SELECT * FROM   charasoul WHERE charasoul_id = '{$id}'";
$run = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($run);



?>



<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">UPDATE CHARASOUL</h5>
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="#" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Charasoul ID</label>
                            <input type="hidden" class="form-control c_title" name="c_id" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data["charasoul_id"] ?>">
                            <span id="p1" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Charasoul Title</label>
                            <input type="text" class="form-control c_title" name="c_title" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data["charasoul_title"] ?>">
                            <span id="p1" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Charasoul Sub Title</label>
                            <input type="text" class="form-control c_subtitle" name="c_subtitle" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data["charasoul_subtitle"] ?>">
                            <span id="p2" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Charasoul Paragraph</label>
                            <input type="text" class="form-control c_para" name="c_para" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data["charasoul_para"] ?>">
                            <span id="p3" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Charasoul Image</label>
                            <input type="file" class="form-control c_image" name="c_image" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <span id="p4" class="text-danger"></span>
                        </div>


                        <button type="submit" class="btn btn-primary" name="c_btn">Update Charasoul</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<?php
include("shared/footer.php");
?>
<?php
if (isset($_POST["c_btn"])) {
    $charasoul_title = $_POST["c_title"];
    $charasoul_subtitle = $_POST["c_subtitle"];
    $charasoul_para = $_POST["c_para"];
    $charasoul_img = $_FILES["c_image"];

    $filename = $_FILES["c_image"]["name"];
    $tmpname = $_FILES['c_image']['tmp_name'];
    $type = $_FILES["c_image"]["type"];
    $location = "../UserPanel/shared/upload/" . $filename;
    move_uploaded_file($tmpname, $location);

    // if ($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/JPG" || $type == "image/JPEG" || $type == "image/PNG") {
    //     move_uploaded_file($tmpname, $location);
    // } else {
    //     echo "<script>alert('File Format Could Not Be Supported')</script>";
    //     echo "<script>location.href = 'add_charasoul.php'</script>";
    //     return false;
    // }
    $update = "UPDATE charasoul SET charasoul_title = '{$charasoul_title}' , charasoul_subtitle = '{$charasoul_subtitle}' , charasoul_para = '{$charasoul_para}' , charasoul_img = '{$location}' WHERE charasoul_id = '{$id}'";
    $run = mysqli_query($conn, $update);

    if ($run) {
        echo "<script>
    alert('Charasoul Updated Successful!');
    location.href='charasoul.php';
    </script>";
    } else {
        echo "<script>
    alert('Some Thing Went Wrong');
    location.href='charasoul.php';
    </script>";
    }
}










?>