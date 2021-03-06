<!-- Header Element start -->
<!DOCTYPE html>
<html lang="en">
<head>
	
  <meta charset="UTF-8">
  <meta name="viewport" content= "width=device-width, initial-scale=1.0">
	<meta name="title" content="Passport Verification">
	<link rel="stylesheet" href="css/style.css">
	<title><?php echo (isset($pageTitle))?$pageTitle:'Passport Application system'?></title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#"><i class="fas fa-passport"></i> <?php echo (isset($pageTitle))?'PAS-'.$pageTitle:'Passport Application system'?> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="applyOnline.php">Apply for passport</a>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" data-toggle="modal" data-target="#checkPassportStatus">
            Check Passsport Status
          </button>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <button type="button" class="dropdown-item" data-toggle="modal" data-target="#sblogin">
            SB Login
          </button>
          <button type="button" class="dropdown-item" data-toggle="modal" data-target="#wardCommissioner">
            Ward Commisioner Login
          </button>

        </div>
      </li>
  </div>
</nav>
</header>




<!-- Modal -->
<div class="modal fade" id="sblogin" tabindex="-1" role="dialog" aria-labelledby="sbloginLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sbloginLabel">SBlogin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action='authentication.php?user=police' method='POST'>
          <div class="form-group">
            <label for="exampleInputEmail1">User ID</label>
            <input name='userid' type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter User ID" required>
            <small id="textHelp" class="form-text text-muted">You has to be registered from Passport Office</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" >Password</label>
            <input name='password' type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
          </div>
  
          <input type="submit"value="login" class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
        <input type="button" value='submit' class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="wardCommissioner" tabindex="-1" role="dialog" aria-labelledby="wardCommissionerLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="wardCommissionerLabel">Ward Commissioner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action='authentication.php?user=wc' method='POST'>
          <div class="form-group">
            <label for="exampleInputEmail1">User ID</label>
            <input name='userid' type="userid" class="form-control" id="exampleInputuserid1" aria-describedby="useridHelp" placeholder="Enter User ID" required="true">
            <small id="useridHelp" class="form-text text-muted">You has to be registered from Passport Office</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name='password' type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="true">
          </div>
  
          <input type="submit" value="login" class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="checkPassportStatus" tabindex="-1" role="dialog" aria-labelledby="checkPassportStatusLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="checkPassportStatusLabel">Check Passport Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action='checkStatus.php' method="POST">
          <div class="form-group">
            <label for="checkpassinput">Enter your Track ID:</label>
            <input  type="text" name='app_id' class="form-control" id="checkpassinput" aria-describedby="emailHelp" placeholder="Enter Passport Number" required="true">
            <small id="emailHelp" class="form-text text-muted">Please check twice</small>
          </div>
          <button type="submit" class="btn btn-primary">Check Status</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Header element finshed -->