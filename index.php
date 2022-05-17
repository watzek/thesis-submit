<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="styles.css" rel="stylesheet">
    <title>Thesis Submission Portal</title>
  </head>
  <body>
    <h1>Thesis Submission Portal</h1>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!-- basic bootstrap form -->
 <div class="container">
 <form>

   <!-- first name -->
   <div class="form-group mb-3 my-5">
     <label for="lname">First Name</label>
     <input type="text" class="form-control" id="fname" aria-describedby="fnameHelp" placeholder="Enter First Name">
     <small id="fnameHelp" class="form-text text-muted">>more details about what first name should be provided(legal or chosen etc.)<</small>
   </div>

   <!-- last name -->
   <div class="form-group mb-3">
     <label for="lname">Last Name</label>
     <input type="text" class="form-control" id="lname" aria-describedby="lnameHelp" placeholder="Enter Last Name">
     <small id="lnameHelp" class="form-text text-muted">>option for adding more details about last name<</small>
   </div>

   <!-- email address -->
   <div class="form-group mb-3">
     <label for="email">Email Address</label>
     <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
     <small id="emailHelp" class="form-text text-muted">Please use your lclark email</small>
   </div>

   <!-- birth year  -->
   <div class="form-group mb-3">
     <label for="birthYear">Birth Year</label>
     <input type="text" class="form-control" id="birthYear" aria-describedby="birthYearHelp" placeholder="Enter Birth Year">
     <small id="birthYearHelp" class="form-text text-muted">Please enter your birth year</small>
   </div>

   <!-- department -->
   <div class="form-group mb-3">
     <label for="dept">Department</label>
     <select name="department" class="form-control" id="dept" aria-describedby="deptHelp" placeholder="Enter Department">
       <!-- disabled option -->
       <option value="none" selected disabled hidden>Select Department</option>
       <?php
       // load in list of department strings
       $dummyData = ['math','computer science', 'psychology', 'more departments...'];
       foreach ($dummyData as $datum){ // read through list of strings and append html options to option tag
         echo "<option value='$datum'>$datum</option>";
       }
        ?>
      </select>
     <small id="deptHelp" class="form-text text-muted">Please select supervising department</small>
   </div>

   <!-- project advisor email address -->
   <div class="form-group mb-3">
     <label for="projectAdvisorEmail">Project Advisor Email Address</label>
     <input type="email" class="form-control" id="projectAdvisorEmail" aria-describedby="projectAdvisorEmailHelp" placeholder="Enter Project Advisor Email">
     <small id="projectAdvisorEmailHelp" class="form-text text-muted">Please use their lclark email, if possible</small>
   </div>

   <!-- thesis title -->
   <div class="form-group mb-3">
     <label for="thesisTitle">Thesis Title</label>
     <input type="text" class="form-control" id="thesisTitle" aria-describedby="thesisTitleHelp" placeholder="Enter Thesis Title">
     <small id="thesisTitleHelp" class="form-text text-muted">As it will appear in the archives</small>
   </div>

   <!-- abstract -->
   <div class="form-group mb-3">
     <label for="abstract" class="form-label">Abstract</label>
     <textarea class="form-control" id="abstract" rows="10" aria-describedby="abstractHelp" placeholder="Type Abstract Here..."></textarea>
     <small id="abstractHelp" class="form-text text-muted">As it will appear in the archives</small>
   </div>

   <!-- non-lc email address -->
   <div class="form-group mb-3">
     <label for="nonLCemail">Non-LC Email Address</label>
     <input type="email" class="form-control" id="nonLCemail" aria-describedby="nonLCemailHelp" placeholder="Enter Non-LC Email">
     <small id="nonLCemailHelp" class="form-text text-muted">Please use a NON-lclark email</small>
   </div>

   <!-- Visibility -->
   <div class="form-check form-check-inline mb-3">
     <input class="form-check-input" type="radio" name="inlineRadioOptions" id="visPublic" value="visPublic">
     <label class="form-check-label" for="visPublic">Visible to the public</label>
   </div>
   <div class="form-check form-check-inline mb-3">
     <input class="form-check-input" type="radio" name="inlineRadioOptions" id="visLCONly" value="visLCONly">
     <label class="form-check-label" for="visLCONly">Visible to LC Only</label>
   </div>

   <div class="form-check form-switch mb-3">
     <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" unchecked>
     <label class="form-check-label" for="flexSwitchCheckChecked">Delayed Release</label>
   </div>

   <!-- Delayed Release Date -->
   <div class="form-group mb-3 d-none" id="delayedReleaseDateDiv">
     <label class="form-check-label" for="delayedReleaseDate">Delayed Release Date</label>
     <input type="date" id="delayedReleaseDate" name="delayedReleaseDate"><small id="delayedReleaseDateHelp" class="form-text text-muted">Please enter delayed release date</small>
   </div>

   <!-- file upload -->
   <div class="mb-3">
     <label for="uploadFile" class="form-label">Upload Thesis</label>
     <input class="form-control form-control-md" id="uploadFile" type="file">
     <small id="uploadFileHelp" class="form-text text-muted">Formats Accepted: PDF, >filetype<, >filetype<...</small>
   </div>

   <!-- submission button -->
   <button type="submit" action="_blank" class="btn btn-primary mb-3">Submit</button>
 </form>
</div>

    <!-- jquery for adding and removing date input div for user feedback -->
    <script>
    $( window ).on( "load", function() {
      $('#flexSwitchCheckChecked').on('change.bootstrapSwitch', function(e) {
          // console.log(e.target.checked);
          if(e.target.checked == true) $('#delayedReleaseDateDiv').removeClass('d-none').addClass('d-flex');
          if(e.target.checked == false) $('#delayedReleaseDateDiv').addClass('d-none').removeClass('d-flex');
      });
    });
    </script>
    
</body>
</html>
