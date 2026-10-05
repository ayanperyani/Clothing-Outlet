
<div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">ADD ALBUMS</h5>
            <div class="card">
              <div class="card-body">
                <form method="POST" onsubmit="return validation()" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Album Name</label>
                    <input type="text" class="form-control aname" name="aname" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span id="p1" class="text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Album Image</label>
                    <input type="file" class="form-control image" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span id="p2" class="text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cover Image</label>
                    <input type="file" class="form-control image" name="cimage" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span id="p3" class="text-danger"></span>
                  </div>
                  <button type="submit" class="btn btn-primary" name="btn">Add</button>
                </form>
              </div>
            </div>
           
          </div>
        </div>
<?php
include("shared/footer.php");
?>

