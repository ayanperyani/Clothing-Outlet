<?php
include("shared/sidebar.php");
include("shared/header.php");
include("shared/connection.php");
?>

<div class="container-fluid">
            <h5 class="card-title text-dark fw-semibold mb-4" >USERS</h5>
            <div class="card">
                <div class="card-body">
                
                  <?php
$sql = "SELECT * FROM users";
$run = mysqli_query($conn,$sql);
if(mysqli_num_rows($run)>0){
?>
    <table class="table table-bordered">
        <tr>
            <th>User_Name</th>
            <th>User_Email</th>
            <th>User_Phone</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        <?php
        while($data = mysqli_fetch_assoc($run)){
        ?>
            <tr>
                <td><?php echo $data["user_name"] ?></td>
                <td><?php echo $data["user_email"] ?></td>
                <td><?php echo $data["user_phone"] ?></td>
                <td><?php echo $data["role"] ?></td>
                <td><a href="delete_user.php?user_id=<?php echo $data["user_id"] ?>" class="btn btn-danger">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
<?php
} else {
    echo "No Record Found";
}
?>
                                                                 
                </div>
            </div>
</div>
<?php
include("shared/footer.php");
?>
