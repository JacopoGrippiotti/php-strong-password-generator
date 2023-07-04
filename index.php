<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
 </head>
 <body>
    <?php include __DIR__ . '/utilities/functions.php' ?>
      <h1 class='ms-5'><?php  if(!empty($_GET['passwordLength'])){echo generate_pw($_GET['passwordLength']);}else{echo "insert length";}?></h1>
    <form action="./index.php" method="get" class="m-4">
        <input type="number" id="password" name="passwordLength" placeholder="password">
        <input type="submit">
    </form>

 




 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </body>
</html>