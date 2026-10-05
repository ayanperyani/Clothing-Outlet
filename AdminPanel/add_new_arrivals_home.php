<?php
include("shared/sidebar.php");
include("shared/header.php");
include("shared/connection.php");
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">ADD New Arrivals Home</h5>
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="#" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">New Arrival Title</label>
                            <input type="text" class="form-control c_title" name="nrh_title" id="" aria-describedby="emailHelp">
                            <span id="p1" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">New Arrival Para</label>
                            <input type="text" class="form-control c_subtitle" name="nrh_para" id="" aria-describedby="emailHelp">
                            <span id="p2" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">New Arrival Image</label>
                            <input type="file" class="form-control c_image" name="nrh_image" id="" aria-describedby="emailHelp">
                            <span id="p4" class="text-danger"></span>
                        </div>


                        <button type="submit" class="btn btn-primary" name="nrh_btn">Add New Arrival Home</button>
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

    $sql = "INSERT INTO new_arrival_home (new_arrival_title , new_arrival_para , new_arrival_img ) VALUES('{$nrh_title}' , '{$nrh_para}' , '{$location}')";
    $run = mysqli_query($conn, $sql);

    if ($run) {
        echo "<script>
    alert('New Arrival Home  Add Successful!');
    location.href='new_arrival_home.php';
    </script>";
    }
}









?>
