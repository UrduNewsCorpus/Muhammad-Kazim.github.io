<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "customer";
$conn = mysqli_connect($servername, $username, $password, $database);
$query ="SELECT * FROM insertwordnet";
$run=mysqli_query($conn,$query);
while($row =mysqli_fetch_array($run))
{
    $id=$row['id'];
	$alifby = $row[1];
	$word=$row[2];
	$title=$row[3];
	$description=$row[4];
	$subtitle=$row[5];
    $subdescription=$row[6];
}
	?> 
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;500;700&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>
    <div class="contianer-fluid bg-secondary">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="#">URDU WORDNET</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="inde.html">Inset Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="updatedata.html">Update Data</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container pt-5 mt-5 mb-5 pb-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form method="post" action="updatedata.php">
                    <h2 class="text-center mb-4 text-uppercase text-primary">update Data</h3>
                    <label for="exampleInputEmail1" class="form-label">AlifBy</label>
                    <select class="form-select mb-3"aria-label=" Default select example" name="alifby" value="<?php echo "$alifby" ?>">
                        <option selected>----SelectAlifBy----</option>
                        <option value="One">One</option>
                        <option value="Two">Two</option>
                        <option value="Three">Three</option>
                    </select>
                    <label for="exampleInputEmail1" class="form-label">Words</label>
                    <select class="form-select mb-3" aria-label=" Default select example" name="word" value="<?php echo "$word" ?>">
                        <option selected>Words</option>
                        <option value="One">One</option>
                        <option value="Two">Two</option>
                        <option value="Three">Three</option>
                    </select>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Title</label>
                        <input type="text" placeholder="title" class="form-control" id="exampleInputPassword1" name="title" value="<?php echo "$title" ?>">
                    </div>
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px" name="description" value="<?php echo "$description" ?>">
                        <!-- <label for="floatingTextarea2">Comments</label> -->
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Sub Title</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="subtitle" value="<?php echo "$subtitle" ?>" >
                    </div>
                    <label for="exampleInputEmail1" class="form-label">Sub Description</label>
                    <div class="form-floating mb-2">
                        <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px" name="subdescription" value="<?php echo "$subdescription" ?>" >
                        <!-- <label for="floatingTextarea2">Comments</label> -->
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 px-5 py-2" name="update" >Submit</button>
                </form>
            </div>
        </div>

    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
<?php
if(isset($_POST["update"]))
{
    mysqli_query($conn,"UPDATE insertwordnet SET 
    alifby='$_POST[alifby]', 
    word='$_POST[word]',
    title='$_POST[title]',
    description='$_POST[description]',
    subtitle='$_POST[subtitle]',
    subdescription='$_POST[subdescription]'
    WHERE id =$id;
     ");

     echo "Record update Successfully!";
}
?>
</html>