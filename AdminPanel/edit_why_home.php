<?php
include("shared/sidebar.php");
include("shared/header.php");
include("shared/connection.php");


$id = $_GET["why_id"];

$sql = "SELECT * FROM why_section_home WHERE why_section_id = '{$id}'";
$run = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($run);



?>



<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">UPDATE WHY SECTION</h5>
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="#" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Why Section ID</label>
                            <input type="hidden" class="form-control c_title" name="w_title" id="" aria-describedby="emailHelp" value="<?php echo $data["why_section_id"] ?>">
                            <span id="p1" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Why Section Title</label>
                            <input type="text" class="form-control c_title" name="w_title" id="" aria-describedby="emailHelp" value="<?php echo $data["why_section_title"] ?>">
                            <span id="p1" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Why Section Para</label>
                            <input type="text" class="form-control c_subtitle" name="w_para" id="" aria-describedby="emailHelp" value="<?php echo $data["why_section_para"] ?>">
                            <span id="p2" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Why Section Image</label>
                            <input type="file" class="form-control c_image" name="w_image" id="" aria-describedby="emailHelp">
                            <span id="p4" class="text-danger"></span>
                        </div>


                        <button type="submit" class="btn btn-primary" name="w_btn">Update Why Section</button>
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
if (isset($_POST["w_btn"])) {
    $why_section_title = $_POST["w_title"];
    $why_section_para = $_POST["w_para"];
    $why_section_img = $_FILES["w_image"];

    $filename = $_FILES["w_image"]["name"];
    $tmpname = $_FILES['w_image']['tmp_name'];
    $type = $_FILES["w_image"]["type"];
    $location = "../UserPanel/shared/upload/" . $filename;
    move_uploaded_file($tmpname, $location);

    // if ($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/JPG" || $type == "image/JPEG" || $type == "image/PNG") {
    //     move_uploaded_file($tmpname, $location);
    // } else {
    //     echo "<script>alert('File Format Could Not Be Supported')</script>";
    //     echo "<script>location.href = 'add_charasoul.php'</script>";
    //     return false;
    // }
    $update = "UPDATE why_section_home SET why_section_title = '{$why_section_title}' , why_section_para = '{$why_section_para}' , why_section_img = '{$location}' WHERE why_section_id = '{$id}'";
    $run = mysqli_query($conn, $update);

    if ($run) {
        echo "<script>
    alert('Why Section Updated Successful!');
    location.href='why_home.php';
    </script>";
    } else {
        echo "<script>
    alert('Some Thing Went Wrong');
    location.href='why_home.php';
    </script>";
    }
}










?>