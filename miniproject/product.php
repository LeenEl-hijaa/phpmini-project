<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Add Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="view.php" style=" margin-right: 900px; ">Bloom </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div  class="collapse navbar-collapse" id="navbarNavAltMarkup" >
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="view.php">Home <span class="sr-only">(current)</span></a>
     
      <a class="nav-item nav-link" href="#">Pricing</a>
      
    </div>
  </div>
</nav>

    <div class="container">

        <form action="" method="post">
            <div class="form-group">
                <label for="prod">Product Name: </label>
                <input type="text" class="form-control" id="prod" name="pname" Required>
            </div>
            <div class="form-group">
                <label for="pri">Price: </label>
                <input type="number" class="form-control" id="pri" name="price" Required>
            </div>
            
            <div class="form-group">
                <label for="pic">Product Picture: </label>
                <input type="file" class="form-control" id="pic" name="picture" accept="image/*" required>
                
            </div>
            <div class="form-group">
                <label for="desc">Description: </label>
                <textarea name="description" id="desc" cols="30" rows="10" class="form-control" Required></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="add" id="add"  >Add Item</button>
            <button class="btn btn-primary" id="btn" style="display: inline-block;"><a href="view-products-page.php"style="color: white; text-decoration:none;">Show Items</a></button>
        </form>
        <br>
        

    </div>
    
    <div class="table-responsive" id="table-div">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Product Picture</th>
                </tr>
            </thead>
            <tbody id="info">
            <?php 
                if (isset($_POST['add'])) {
                    if (!(file_exists("images/" . $_FILES["file"]["name"]))) {
                        move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $_FILES["file"]["name"]);
                    }
                    $_SESSION['name'] .= $_POST['pname'] . '<br>';
                    $_SESSION['pricee'] .= $_POST['price'] . '<br>';
                    $_SESSION['descriptions'] .= $_POST['description'] . '<br>';
                    $_SESSION['photo'] .= $_FILES["file"]["name"] . '<br>';
                    $arr1 = explode("<br>", $_SESSION['name']);
                    $arr2 = explode("<br>", $_SESSION['pricee']);
                    $arr3 = explode("<br>", $_SESSION['descriptions']);
                    $arr4 = explode("<br>", $_SESSION['photo']);
                    for ($i = 0; $i < count($arr1) - 1; $i++) {
                        echo ('<tr><td>' . $arr1[$i] . '</td><td>' . $arr2[$i] . '</td><td>' . $arr3[$i] . '</td><td><img src="images/' . $arr4[$i] . '" alt="Image" id="pimage"></td></tr><br>');
                    }
                }
                // session_unset();
            ?>
            </tbody>
        </table>
    </div>

    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>


    <!-- <script>
        var b=[];
        document.getElementById('btn').addEventListener('click', function () {
            if (document.getElementById('prod').value == '' || document.getElementById('pri').value == '' || document.getElementById('desc').value == '') {
                window.alert('Please Fill All The Fields!!!');
            }
            else {
                var i = '';
                var n = document.getElementById('prod').value;
                var p = document.getElementById('pri').value;
                var d = document.getElementById('desc').value;
                var ph = 'RM-logos_transparent.png';
                
                b.push([n,p,d,ph]);
                document.getElementById('info').innerHTML += '<tr><td>' + n + '</td><td>' + p + '</td><td>' + d + '</td><td>' + ph + '</td></tr>';
                console.log(b);
            }
        })
    </script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>
    
</body>

</html>