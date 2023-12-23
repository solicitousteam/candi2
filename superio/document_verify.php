<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        body{
            background-color:rgba(255, 99, 71, 0.4);
        }
    </style>
  </head>
  <body>
   <div class="container">
       <div class="row justify-ontent-around mt-5">
        <div class="col-sm-3 alert alert-danger shadow-lg p-3 mb-5 rounded">
            <form action = "/success" id="file_form" method = "post" enctype="multipart/form-data">  
                <label for="">Upload Document</label>
                <input type="file" name="file" /class="form-control">  
                <input type = "submit" value="Upload"class="btn btn-primary mt-4 mb-4 m-4 ">  
            </form>  
           </div>

    
       </div>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<script>
 $("form#file_form").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);
    alert('Hi');

    $.ajax({
       url: "verify_doc.php",
        type: 'POST',
        data: formData,
        success: function (data) {
         
           alert(data);
           const obj = JSON.parse(data);
         
           alert(obj.result);

        },
        cache: false,
        contentType: false,
        processData: false
    });
});
</script>