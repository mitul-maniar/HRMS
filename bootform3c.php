  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <p><font face="Verdana" size="1.5px">*All fields are mandatory</font></p>
  <form class="form-horizontal" >

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Title:</label>
    <div class="col-sm-10">
       <input type="text" style="width:500px ; height:19" placeholder="" id="title"> 
</div>
</div>

<div class="form-group">  
    
<label class="control-label col-sm-2" style=" text-align: left">Type:</label>
    <label class="radio-inline" style="padding-left: 160px">
      <input type="radio" id="type" value="final">Final
    </label>
    <label class="radio-inline">
      <input type="radio" id="type" value="provisional">Provisional
    </label>   

</div>
<div class="form-group" style="width: 1500px">  
      
    <div class="col-sm-10">
    <label  style=" text-align: left">Status:</label>
       <select id="status" style="width:225; height:19">
          <option value="submitted">Submitted</option>
          <option value="processing">Processing</option>
          <option value="granted">Granted</option>
          <option value="published">Published</option>
       </select>
</div>
</div>

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Brief Description:</label>
    <div class="col-sm-10">
       <input type="text" style="width:500px; height:19" placeholder="" id="desc"> 
</div>
</div>

<div class="form-group"> 
    <div class=" col-sm-10">
      <button type="submit" class="btn btn-default" id="submit" name="submit">Add</button>
      
  </div>

<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
var title = $("#title").val();
var type = $("#type").val();
var status = $("#status").val();
var desc = $("#desc").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'title='+ title + '&type='+ type+ '&status='+ status+ '&desc='+ desc ;

if(title==''||type==''||status==''||desc=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "confirm_bootform3c.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
// Find a <table> element with id="myTable":
var table = document.getElementById("myTable");
var row = table.insertRow(1);

// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);



// Add some text to the new cells:
cell1.innerHTML = ''+title+'';
cell2.innerHTML = ''+type+''; 
cell3.innerHTML = ''+status+''; 
cell4.innerHTML = ''+desc+''; 


}
});
}
return false;
});
});
</script>
</form>
</div>

 <div class="table-responsive">
 
    <table border="3" style="font-family:Verdana; font-size:12px " class="table" id="myTable" >
    <caption>Details</caption>
   
                <td>Title</td>
                <td>Type</td>
                <td>Status</td>
                <td>Brief Description</td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="button" value="Edit"></td>
                <td><input type="button" value="Edit"></td> 



  </table>
</div>

<center>
   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <a type="submit" class="btn btn-default" href="bootform3d.php">Save & Next</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="submit" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center>
</body>
</html>