<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['odmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {


    $lssemsaid=$_SESSION['lssemsaid'];
    $name=$_POST['name'];
    $mobnum=$_POST['mobilenumber'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $category=$_POST['category'];
    $propic=$_FILES["propic"]["name"];
    $extension = substr($propic,strlen($propic)-4,strlen($propic));
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    if(!in_array($extension,$allowed_extensions))
    {
    echo "<script>alert('Profile Pics has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    }
    else
    {
    
    $propic=md5($propic).time().$extension;
     move_uploaded_file($_FILES["propic"]["tmp_name"],"images/".$propic);
    $sql="insert into tblServicetype(Category,Name,Picture,MobileNumber,Address,City)values(:cat,:name,:pics,:mobilenumber,:address,:city)";
    $query=$dbh->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':pics',$propic,PDO::PARAM_STR);
    $query->bindParam(':cat',$category,PDO::PARAM_STR);
    $query->bindParam(':mobilenumber',$mobnum,PDO::PARAM_STR);
    $query->bindParam(':address',$address,PDO::PARAM_STR);
    $query->bindParam(':city',$city,PDO::PARAM_STR);
     $query->execute();
    
       $LastInsertId=$dbh->lastInsertId();
       if ($LastInsertId>0) {
        echo '<script>alert("Person Detail has been added.")</script>';
    echo "<script>window.location.href ='add-event-type.php'</script>";
      }
      else
        {
             echo '<script>alert("Something Went Wrong. Please try again")</script>';
        }
    
      
    }
    }

?>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>Online Banquet Booking System - Add Event Type</title>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

</head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
     

             <?php include_once('includes/sidebar.php');?>

          <?php include_once('includes/header.php');?>

            <!-- Main Container -->
            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Person</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"><h4>Service Category</h4></label>
                    <select type="text" name="category" id="category" value="" class="form-control" required="true">
<option value="">Choose Category</option>
                                                        <?php 

$sql2 = "SELECT * from   tblservice ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row)
{          
    ?>  
<option value="<?php echo htmlentities($row->Servicename);?>"><?php echo htmlentities($row->Servicename);?></option>
 <?php } ?> 
            
                                                        
                                                    </select>
                  </div>
                     <div class="form-group">
                    <label for="exampleInputEmail1"><h4>Name</h4></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="true">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"><h4>Profile Pics</h4></label>
                    <input type="file" class="form-control" id="propic" name="propic" required="true">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"><h4>Mobile Number</h4></label>
                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" maxlength="10" pattern="[0-9]+" required="true">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1"><h4>Address</h4></label>
                    <textarea type="text" class="form-control" id="address" name="address" placeholder="Address" required="true"></textarea>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1"><h4>City</h4></label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required="true">
                  </div>  
                </div>
              
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Add</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

          <?php include_once('includes/footer.php');?>
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>
    </body>
</html>
<?php }  ?>