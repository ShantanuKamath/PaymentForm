<!--------------------------
Name :  Kamath Shantanu Arun
Matric : U1422577F
Lab Group : TS2
--------------------------->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Shantanu Kamath">

    <!-- Title -->
    <title>Payment Receipt</title>

    <!-- Bootstrap CSS -->
    <link href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="style.css" rel="stylesheet">

</head>

<body>
    <!-- Jumbotron -->
    <div class="container">
        <div class="jumbotron">
            <h2>Payment Receipt</h2>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class = "lead">Customer Name:  <?php print($_GET["name"])?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Per Unit ($)</th>
                        <th>Cost ($)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>Apples</td>
                        <td>
                            <?php print($_GET["a"]) ?>
                        </td>
                        <td>
                            0.69
                        </td>
                        <td>
                            <?php
                                $X = number_format((float)($_GET["a"]*0.69), 2, '.', '');
                                print($X);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Oranges</td>
                        <td>
                            <?php print($_GET["o"]) ?>
                        </td>
                        <td>
                            0.59
                        </td>
                        <td>
                            <?php
                                $X = number_format((float)($_GET["o"]*0.59), 2, '.', '');
                                print($X);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Bananas</td>
                        <td>
                            <?php print($_GET["b"]) ?>
                        </td>
                        <td>
                            0.39
                        </td>
                        <td>
                            <?php
                                $X = number_format((float)($_GET["b"]*0.39), 2, '.', '');
                                print($X);
                            ?>
                        </td>
                    </tr>
                    <tr class="bigger">
                        <td colspan="3" style="text-align: center;"><strong>Total Cost</strong></td>
                        <td>
                            <strong><?php print($_GET["total"]) ?></strong>
                        </td>
                    </tr>
                    <tr class="table-success bigger" style="text-align: center;">
                        <td colspan="4">Payment By <?php print($_GET["payment"]) ?></td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>

    </div>
</body>
</html>
