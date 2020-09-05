<?php
//Catch post data
//This section is using php language to catch post data after submit the form. Then store the string in variable called "name"
$name="";
if(isset($_POST['submit'])) 
{ 
    $name=$_POST['name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcode Reader</title>

<!--*******************************************************************************************************-->
<!--Here those lines are capble of fetch boostrap styles. You can insert those files by donloading. But usualy web projects use CDN to fetch 
Boostrp styles and javascript-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!--*******************************************************************************************************-->


</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="card" style="margin-top: 50px;">
                    <div class="card-header d-flex justify-content-center">
                    <!--Display Barcode which stores $name variable.-->
                        <h1><?php echo $name ?></h1>
                    </div>
                    <div class="card-body">
                    <!--Form-->
                        <form name="barcode_reder" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                                <label>Place your barcode reader</label>
                                <!--This is the code line for input feild. You can use this form code for any where.-->
                                <input autofocus onmouseover="this.focus();" type="text" class="form-control" name="name" placeholder="Barcode">
                                <small class="form-text text-muted">Use your barcode reader properly.</small>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <!--End Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>