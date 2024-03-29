<?php
 include("./connect_db.php");
 $per_page = 5;
 $start = ($page-1)*$per_page;
 $sql = "SELECT * FROM `users` order by id limit $start,$per_page";
 $count = mysqli_num_rows($result);
 $pages = ceil($count/$per_page);

 $records = "";

 while ($record = mysqli_fetch_assoc($result)) {
    $records .=  "<tr><th scope='row'>" . $record["UserID"] . "</th>
                        <td>" . $record["Firstname"] . "</td>
                        <td>" . $record["Infix"] . "</td>
                        <td>" . $record["Lastname"] . "</td></tr>";
}
?>
​
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">

    <title>Sinterklaasverlanglijstje</title>
</head>

<div class=col-12>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Firstname</th>
                <th scope="col">Infix</th>
                <th scope="col">Lastname</th>
            </tr>
        </thead>
        <tbody>
            <?php
                        echo $records
                    ?>
        </tbody>
    </table>
</div>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li>
            <a href="index.php?page=<?php if ($page > 1 ) { echo $page - 1;} else { echo $page; } ?>"
                aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li>
            <a href="index.php?page=<?php if ($page < $pages ) { echo $page+1;} else { echo $page; } ?>"
                aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
</div>
</div>
<?php
    include("./footer.php");
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<script scr="./JS/app.js"><script>
  </body>
</html >