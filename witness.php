<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Report a Crime!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">

<?php if(isset($_SESSION['validlogin'])&&$_SESSION['validlogin']=="failure") { ?> /* Your (php) way of checking that the form has been submitted */

            $(function() {                       // On DOM ready
                $('#myModal').modal('show');     // Show the modal
            });

<?php } ?>                                    /* /form has been submitted */

        </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
  <?php if(isset($_SESSION['loggedin'])) { ?>
    <?php
        require('commons/navigation.php');
    ?>
     <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Witness Form  </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Witness</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <p> <a href="http://startbootstrap.com/template-categories/unstyled"></a>.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr/>
        <div class="container">
            <form method="post" action="actions/doAddWitness.php">
                  <div class="form-group">
                    <?php if(isset($_SESSION['witnessmsg'])){
                      echo $_SESSION['witnessmsg'];
                      unset($_SESSION['witnessmsg']);
                    }?>
                  </div>
                  <div class="form-group">
                    <span class="reqspan">Important: * Are Required Fields!</span>
                  </div>
                  <div class="form-group">
                    <label for="firstname">First Name</label>
                    <span class="reqspan">*</span>
                    <input name="witnessfirstname" type="text" class="form-control" placeholder="Enter Your First Name" required>
                  </div>
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <span class="reqspan">*</span>
                    <input name="witnesslastname" type="text" class="form-control" placeholder="Enter Your Last Name" required>
                  </div>
                  <div class="form-group">
                    <label for="mobilenumber">Mobile Number</label>
                    <span class="reqspan">*</span>
                    <input name="witnessmobilenumber" type="number" class="form-control" placeholder="Enter Your Mobile Number(Leave Country Code)" required>
                  </div>
                  <div class="form-group">
                    <label for="permanentadddress">Permanent Address</label>
                    <span class="reqspan">*</span>
                    <textarea name="witnesspermanentaddress" type="text" class="form-control" placeholder="Enter Your Permanent Address" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="districtname">District</label>
                    <span class="reqspan">*</span>
                    <input name="witnessdistrict" type="text" class="form-control" placeholder="Enter District(Permanent Address)" required>
                  </div>
                    <div class="form-group">
                    <label for="crimelocation">Crime Location</label>
                    <span class="reqspan">*</span>
                    <input name="witnesscrimelocation" type="text" class="form-control" placeholder="Enter Address of Crime Location" required>
                  </div>
                   <div class="form-group">
                    <label for="crimedistrict">Crime District</label>
                    <span class="reqspan">*</span>
                    <input name="witnesscrimedistrict" type="text" class="form-control" placeholder="Enter District of Crime Location" required>
                  </div>
                   <div class="form-group">
                    <label for="crimedate">Date of Crime</label>
                    <span class="reqspan">*</span>
                    <input name="witnesscrimedate" type="text" class="form-control" placeholder="Enter Date of Crime in the format YYYY-MM-DD"  required>
                  </div>
                  <div class="form-group">
                    <label for="crimetime">Time of Crime</label>
                    <span class="reqspan">*</span>
                    <input name="witnesscrimetime" type="text" class="form-control" placeholder="Enter Time of Crime in 24 hour format HH:MM:SS" required>
                  </div>
                  <div class="form-group">
                    <label for="crimedescription">Offense Description</label>
                    <span class="reqspan">*</span>
                    <input name="witnesscrimedescription" type="text" class="form-control" placeholder="Enter Crime Description" required>
                  </div>
                  <div class="form-group">
                    <label for="victiminformation">Victim Information</label>
                  </div>
                  <div class="form-group">
                    <label for="victimname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name of Victim</label>
                    <input style="margin-left: 30px" name="witnessvictimname" type="text" class="form-control" placeholder="Enter Name of Victim" >
                  </div>
                   <div class="form-group">
                    <label for="criminaladdress">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address of Criminal</label>
                    <input style="margin-left: 30px" name="witnessvictimaddress" type="text" class="form-control" placeholder="Enter Address of Victim">
                  </div>
                  <div class="form-group">
                    <label for="criminalcontact">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Number of Criminal</label>
                    <input style="margin-left: 30px" name="witnessvictimcontact" type="number" class="form-control" placeholder="Enter Contact Number of Victim">
                  </div>
                  <div class="form-group">
                    <label for="criminalinformation">Criminal Information</label>
                  </div>
                  <div class="form-group">
                    <label for="criminalname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name of Criminal</label>
                    <input style="margin-left: 30px" name="witnesscriminalname" type="text" class="form-control" placeholder="Enter Name of Criminal" >
                  </div>
                   <div class="form-group">
                    <label for="criminaladdress">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address of Criminal</label>
                    <input style="margin-left: 30px" name="witnesscriminaladdress" type="text" class="form-control" placeholder="Enter Address of Criminal">
                  </div>
                  <div class="form-group">
                    <label for="criminalcontact">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Number of Criminal</label>
                    <input style="margin-left: 30px" name="witnesscriminalcontact" type="number" class="form-control" placeholder="Enter Contact Number of Criminal">
                  </div>
                  <div class="form-group">
                    <input name="witnesssubmit" type="submit" class="btn btn-default btn-primary" value="Submit"></input>
                  </div>
               </form>
        </div>
        
    </div>

    <!-- /.container -->
     <?php }
      else
      {
        header('Location: 404.php');die;
      }
    ?>

</body>