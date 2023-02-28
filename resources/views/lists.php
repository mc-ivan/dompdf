<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Product List</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-secondary">Product List</h1>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($products as $index => $product) {
                                echo '<tr>';
                                echo '<td>' . (int)($index + 1) . '</td>';
                                echo "<td>{$product->name}</td>";
                                echo "<td>{$product->description}</td>";
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <hr>
                <p>
                    <a href="pdf.php">Export as PDF</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>