<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>SPARKS ONLINE BANKING</title>
    <link rel="stylesheet" href="css/moneystyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

<body>

    <?php
    include 'connect.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>



    <nav class="navbar py-0 navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-8 mb-lg-0">
                    <li class="nav-item py-0">
                        <a class="nav-link" aria-current="page" href="index.php"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item py-0">
                        <a class="nav-link active" href="money.php">Money Transfer</a>
                    </li>
                    
                    <li class="nav-item py-0">
                        <a class="nav-link" href="history.php">Transaction History</a>
                    </li>
                    
                </ul>
            </div>
            <a class="navbar-brand pull-right" href="#">SPARKS ONLINE BANKING <img src="logos/logo.png" alt="Bank" width="50" height="50"></a>
        </div>
    </nav>


    <class class="welcome">
        <h2>
            <img src="logos/m1.png" alt="Bank" width="100" height="75" style="font-weight: bold;"> <strong>
                Transfer Money</strong> <img src="logos/m2.png" alt="Bank" width="100" height="75">
        </h2>
    </class>

    
    </div>


    <div class="container">
        <div class="row text-center">
            <div class="col text-center">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-striped table-sm">
                        <thead style="color : white;" class="table-dark">
                            <tr>
                                <th scope="col" class="text-center py-2">S.No.</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr style="color : black;">
                                    <td class="text-center py-2">
                                        <?php echo $rows['id'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['name'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['email'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['balance'] ?>
                                    </td>
                                    <td><a href="users.php?id= <?php echo $rows['id']; ?>"> <button class="btn btn-outline-dark btn">Send</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
</body>

</html>
