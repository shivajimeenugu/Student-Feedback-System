

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="style.css">



<div class="form">
<h2>Enter Your BIO-DATA</h2>
<br><br>

  Enter Your Name:<br>
  <input type="text" name="name"><br>
  <br><br><br>
  
  
  
  <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
  </form>

  Enter Your PIN No:<br><br>
  <input type="text" name="pin">
  <br><br>

  Select Your Branch:<br><br>
  <select>
  <option value="DCME">DCME</option>
  <option value="DECE">DECE</option>
  <option value="DEEE">DEEE</option>
  <option value="DME">DME</option>
  </select>
  <br><br>
  Enter Father/Gurdians Name:<br><br>
  <input type="text" name="guardian">
  <br><br>
  Enter Your Contact Number:<br><br>
  <input type="text1" name="con1">
  <input type="text1" name="con2"><br>
  Date Of Birth:<br><br>
  <input type="date" name="dob">
  <br><br>
  Enter Your Aadhar Number:<br><br>
  <input type="text" name="aadhar">
  <br><br>
  Enter Ration Card Number:<br><br>
  <input type="text" name="ration"><br>
  Enter Your Residential Adress:<br><br>
  <textarea> </textarea>

  <br><br>



  <input type="submit" value="Submit">
</div>

</head>


</html>