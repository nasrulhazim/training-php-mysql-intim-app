<?php 

  $title = 'My Web Application';
  require_once '_include_.php';
  require_once 'controller/check-authorization.php';

?>

  <link href="css/dashboard.css" rel="stylesheet">

  <div class="btn-group pull-right">
    <a href="users.php" class="btn btn-primary">Users</a>
    <a href="logout.php" class="btn btn-primary" >Logout</a>
  </div>
  
  <?php message();  ?>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#uploadPhoto">
    Upload Photo
  </button>

  <div class="row">
      <div class="profile-header-container">   
          <div class="profile-header-img">
              <img class="img-circle" src="https://lh4.googleusercontent.com/-YF39bjtIc1M/AAAAAAAAAAI/AAAAAAAAAAA/8buvW6AS-bk/s96-c-mo/photo.jpg" />
              <!-- badge -->
              <div class="rank-label-container">
                  <span class="label label-default rank-label"><?= $_SESSION['user']['username']; ?></span>
              </div>
          </div>
      </div> 
  </div>

  <!-- Modal -->
  <div class="modal fade" id="uploadPhoto" tabindex="-1" role="dialog" aria-labelledby="uploadPhotoLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="uploadPhotoLabel">Upload Photo</h4>
        </div>
        
        <!-- Upload form -->
        <form method="post" enctype="multipart/form-data" action="upload.php">
            <div class="modal-body">
                  <label for="photo">Choose</label>
                  <input type="file" class="form-control" name="photo" id="photo">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form> <!-- end upload form -->

      </div>
    </div>
  </div>

  <?php require_once 'templates/footer.php'; ?>