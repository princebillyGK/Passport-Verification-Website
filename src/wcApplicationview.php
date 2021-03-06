<?php include 'config/init.php' ?>
<?php 
  session_start();
  if(isset($_SESSION['wcloggedin'])){
    extract($_SESSION['wcloggedin']);
  }else{
    header('location: index.php');
  }
 ?>
<button type="button" id="user-logged-button" class="btn btn-primary m-2 pt-2 pb-2" data-toggle="popover" title="<?php echo 'logged in as '.$userid ?>" data-html=true data-content="Name: <?php echo $Name ?><br>Contact: <?php echo $ContactNo ?>"><i class="fas fa-user"></i></button>
<!--============================================
=            contents intialization            =
=============================================-->

  <?php 
    $header = new Templete('admin\header');
    $footer= new Templete('admin\footer'); 
    $genaralInfo= new Templete('applicant\genaralInfo');
    $nidBirth= new Templete('applicant\nidBirth');
    $address= new Templete('applicant\address');
  ?>


  <?php
  /*===================================================
  =            fetching Data from database            =
  ===================================================*/
  //getting id
  $applicantId=$_GET['app_id'];
  $db= new Database();
  $db->query('SELECT `isSBpermited`, `ispresentWCverified`, `ispermanentWCverified`,`isSBverified`,`presentPost`,`permanentPost` FROM `application` WHERE `applicationNo`=?');
  $db->execute([$applicantId]);
  $applicant=$db->fetchArray();
  extract($applicant);  

  $postcode=$_GET['postcode'];
 ?>

<!--====  End of contents intialization  ====-->

 <!--============================
 =            Header            =
 =============================-->
  <?php  
    $header->user='wc';
    $header->pageTitle='WC view/Applicant Information';
    echo $header;
  ?>
  
 <!--====  End of header  ====-->  

  <?php  
    $genaralInfo->appID=$_GET['app_id'];
   echo $genaralInfo;
  ?>
  <br>
  <?php  
    $address->appID=$_GET['app_id'];
   echo $address;
  ?>

  <div class="container d-flex justify-content-center w-100">
    <?php if ($isSBpermited==1 && $ispresentWCverified==0 &&  $presentPost==$postcode): ?>
      <div class='p-2'>
        <a href="_verification.php?do=preWC&app_id=<?php echo $applicantId ?>" class="w-100 btn btn-primary m-2 text-light">Verify Present Address</a>
       </div>
    <?php endif ?>
   

    <?php if ($isSBpermited==1 && $ispermanentWCverified==0 && $permanentPost==$postcode): ?>
      <div class='p-2'>
        <a href="_verification.php?do=perWC&app_id=<?php echo $applicantId ?>" class="m-2 w-100 btn btn-primary text-light">Verify Permanent Address</a>
       </div>
    <?php endif ?>
  </div>

  <?php  
    $nidBirth->appID=$_GET['app_id'];
   echo $nidBirth;
  ?>

  
  
  
  <!--============================
  =            footer            =
  =============================-->
    <?php echo $footer ?> 
  
  <!--====  End of footer  ====-->
  
