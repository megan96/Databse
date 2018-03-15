<!DOCTYPE html>
<html>
<head>
 <title>Home-E-Journal,Papers & Conference Info.</title>
 <link rel="stylesheet" href="SignedInStyle.css">
</head>
<body>
<div id="fileNavigator">	
 <a href="profilePg.php" id="PersonalInfo" style="font-weight:bold">ME</a>
 <a href="displayJournalPg.php" id="EJournals" style="font-weight:bold">E-Journals</a>
 <a href="displayPapersPg.php" id="Papers" style="font-weight:bold">Papers</a>
 <a href="displayConferencesPg.php" id="Conferences" style="font-weight:bold">Conferences</a>
 <a href="displayOthersPg.php" id="Others" style="font-weight:bold">Others</a> 
 <a href="displayViewAllPg.php" id="ViewAll" style="font-weight:bold">View All</a>
 <a href="#" id="AdvancedSearch" style="font-weight:bold">Advanced Search</a>
 <a href="#" id="Favorites" style="font-weight:bold">Favorites</a>
 <a href="#" id="Help" style="font-weight:bold">Help</a>
</div>
<div class="AddNew">
 <h3><center>Add New Resource</h3>
 <div class="tab">
  <button class="tabLinks" onclick="goTo(event,'Journals')" id="defaultResource">Journals</button>
  <button class="tabLinks" onclick="goTo(event,'EPapers')">Papers</button>
  <button class="tabLinks" onclick="goTo(event,'EConferences')">Conferences</button>
  <button class="tabLinks" onclick="goTo(event,'EOthers')">Others</button>
 </div>
<div id="Journals" class="addNew">
 <form class="formStyle" method="post">
    <label>User_ID</label>
    <input type="text" name="user">
    <label>Title</label>
    <input type="text" name="journalTitle" required>
    <label>JID</label>
    <input type="text" name="journalID">
    <label>Publication</label>
    <input type="text" name="journalPublication">
    <label>Field</label>
    <select name="Field">
     <option value="AI01">Artificial Intelligence</option>
     <option value="AL01">Algorithms</option>
     <option value="I01">Internet of Things</option>
    </select><br>
    <button type="reset" class="formReset">Reset</button>
    <button type="submit" class="formSubmit" name="Journal">Submit</button>
 </form> 
 <?php
  require "Connect.php";
  $juserid=$_POST['user'];
  $jtitle=$_POST['journalTitle'];
  $jid=$_POST['journalID'];
  $jpub=$_POST['journalPublication'];
  $jfield=$_POST['Field'];
  $query0="INSERT INTO Journal VALUES('$juserid','$jtitle','$jid','$jpub','$jfield')";
  if(isset($_POST['Journal'])) {
   $result0=mysqli_query($conn,$query0);
   if(!$result0) {
    echo("<script>alert('Unable to Submit')</script>");
   } else {
    echo("<script>alert('Journal Info. updated')</script>");
   }
  }
 ?>
</div>
<div id="EPapers" class="addNew">
 <form method="post">
  <label>UserID</label>
  <input type="text" name="user">
  <label>Title</label>
  <input type="text" name="paperTitle" required>
  <label>Author</label>
  <input type="text" name="paperAuthor" required>
  <label>PID</label>
  <input type="text" name="paperID">
  <label>JID</label>
  <input type="text" name="journalID">
  <label>Field</label>
  <select name="Field">
   <option value="AI01">Artificial Intelligence</option>
   <option value="AL01">Algorithms</option>
   <option value="I01">Internet of Things</option>
  </select><br>
  <label name="status">Status</label>
  <select>
   <option value="Ongoing">Ongoing</option>
   <option value="Complete">Complete</option>
  </select><br>
  <label>Date</label>
  <input type="date" name="Date" value="" style="width:15%">
  <label>URL</label>
  <input type="url" name="url">
  <button type="reset" class="formReset">Reset</button>
  <button type="submit" class="formSubmit" name="paperSub">Submit</button>
 </form>
 <?php
  require "Connect.php";
  $puserid=$_POST['user'];
  $ptitle=$_POST['paperTitle'];
  $pauthor=$_POST['paperAuthor'];
  $pid=$_POST['paperID'];
  $jid=$_POST['journalID'];
  $pfield=$_POST['Field'];
  $pstat=$_POST['status'];
  $pdate=$_POST['Date'];
  $purl=$_POST['url'];*/
  $file = $_FILES['paper']['name'];
  $storeInDir = "/var/www/html/DBPro/uploads/";
  $fileStore = $storeInDir.basename($file);
  //$fileType=pathinfo($fileStore,PATHINFO_EXTENSION);
  $tempFile = $_FILES['paper']['tmp_name'];
  if(isset($_POST['paperSub'])) {
 
 
   //$upload = move_uploaded_file($tempFile,$fileStore);
   if(move_uploaded_file($tempFile,$fileStore)) { 
    echo("<script>alert('File Uploaded')</script>");	
