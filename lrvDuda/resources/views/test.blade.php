<!DOCTYPE html>
<html>

<head>
  <style type="text/css">
    .image-preview{
      padding: 10px;
      margin: 20px;
      width: 300px;
      height: 300px;
      
      border: 2px solid #dddddd;
      margin-top: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: #cccccc;
    }
    .image-preview__image{
      width: 100%;
    }
    #img{
      padding: 10px;
      margin: 20px;
      width: 300px;
      min-height: 100px;
      max-height: 300px;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <div class="container">
    <input type="file" name="inpFile" id="inpFile" onchange="preview(event)" accept="image/x-png,image/jpg,image/jpeg">
      <div class="image-preview">
        <img src="" class="" id="img" >
      </div>
        <span id="name_image"></span>
  </div>
<script type="text/javascript">
    function preview(event) {
      var input = event.target.files[0];
      var reader = new FileReader();
      reader.onload = function(){
        var result = reader.result;
        var img = document.getElementById('img');
        img.src = result;
      }
      document.getElementById("name_image").innerHTML = input.name;
      reader.readAsDataURL(input);
    }
</script>
</body>
</html>