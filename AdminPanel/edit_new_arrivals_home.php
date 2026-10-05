<?php
include("shared/sidebar.php");
include("shared/header.php");
include("shared/connection.php");


$id = $_GET["nrh_id"];

$sql = "SELECT * FROM   new_arrival_home WHERE new_arrival_id= '{$id}'";
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
                            <input type="hidden" class="form-control c_title" name="nrh_id" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data["new_arrival_id"] ?>">
                            <span id="p1" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">New Arrival Home Title</label>
                            <input type="text" class="form-control c_title" name="nrh_title" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data["new_arrival_title"] ?>">
                            <span id="p1" class="text-danger"></span>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">New Arrival Home Paragraph</label>
                            <input type="text" class="form-control c_para" name="nrh_para" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data["new_arrival_para"] ?>">
                            <span id="p3" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">New Arrival Home Image</label>
                            <input type="file" class="form-control c_image" name="nrh_image" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <span id="p4" class="text-danger"></span>
                        </div>


                        <button type="submit" class="btn btn-primary" name="nrh_btn">Update Charasoul</button>
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
if (isset($_POST["nrh_btn"])) {
    $nrh_title = $_POST["nrh_title"];
    $nrh_para = $_POST["nrh_para"];
    $nrh_img = $_FILES["nrh_image"];

    $filename = $_FILES["nrh_image"]["name"];
    $tmpname = $_FILES['nrh_image']['tmp_name'];
    $type = $_FILES["nrh_image"]["type"];
    $location = "../UserPanel/shared/upload/" . $filename;
    move_uploaded_file($tmpname, $location);

    // if ($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/JPG" || $type == "image/JPEG" || $type == "image/PNG") {
    //     move_uploaded_file($tmpname, $location);
    // } else {
    //     echo "<script>alert('File Format Could Not Be Supported')</script>";
    //     echo "<script>location.href = 'add_charasoul.php'</script>";
    //     return false;
    // }
    $update = "UPDATE new_arrival_home SET new_arrival_title = '{$nrh_title}' , new_arrival_para = '{$nrh_para}' , new_arrival_img = '{$location}' WHERE new_arrival_id = '{$id}'";
    $run = mysqli_query($conn, $update);

    if ($run) {
        echo "<script>
    alert('New Arrival Home Successful!');
    location.href='new_arrival_home.php';
    </script>";
    } else {
        echo "<script>
    alert('Some Thing Went Wrong');
    location.href='new_arrival_home.php';
    </script>";
    }
}










?>