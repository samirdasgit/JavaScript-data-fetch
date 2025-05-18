<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JavaScript Data Fetch</title>
</head>
<body>
  <div style="text-align: center;">
    <table style="width: 600px;">
      <tr>
        <td style="width: 30%;">Name</td>
        <td style="width: 70%;"><input type="text" id="full_name"></td>
      </tr>
      <tr>
        <td>Mobile</td>
        <td><input type="text" id="mobile_no"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: right;"><button onclick="getData()">Fetch Data</button></td>
      </tr>
    </table>
  </div>
  <script>
    function getData(){
      var full_name=document.getElementById("full_name").value;
      var mobile_no=document.getElementById("mobile_no").value;
      if(full_name==''){
        alert("Please enter name");
      }
      else if(mobile_no==''){
        alert("Please enter mobile no");
      }
      else{
        document.location="data-fetch.php?full_name="+full_name+"&mobile_no="+mobile_no;
      }
    }
  </script>
</body>
</html>