<?php
// Start the session
session_start();

if (!isset($_SESSION['isLoggedIn'])) {

    header('Location: formlogin.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <tr>
        <td colspan="3"><?php include("chuc_nang/banner/banner.php"); ?></td>
    </tr>
</head>
<body>
<style>
    body{
        padding-top: 50px;
    }
    table{

        text-align: center;
    }
    td{
        padding: 10px;
    }
    tr.item{
        border-top: 1px solid #5e5e5e;
        border-bottom: 1px solid #5e5e5e;
    }

    tr.item:hover{
        background-color: #d9edf7;
    }

    tr.item td{
        min-width: 150px;
    }

    tr.header{
        font-weight: bold;
    }

    a{
        text-decoration: none;
    }
    a:hover{
        color: deeppink;
        font-weight: bold;
    }
</style>


<script>
    $(document).ready(function () {


        $(".delete").click(function () {

            $('#myModal').modal({
                backdrop: 'static',
                keyboard: false
            });

        });


    });
</script>


<table cellpadding="10" cellspacing="10" border="0" style="border-collapse: collapse; margin: auto">

    <tr class="control" style="text-align: left; font-weight: bold; font-size: 20px">
        <td colspan="4">
            <a href="formadd.php">Thêm sản phẩm<br>     </a>
            <a href="list.php">Danh sách sản phẩm<br>     </a>
        </td>
        <td colspan="1">
            <a href="logout.php">Logout</a>
        </td>
    </tr>
    <tr class="header">
        <td>ID</td>
        <td>ten_nguoi_mua</td>
        <td>email</td>
        <td>dia_chi</td>
        <td>dien_thoai</td>
        <td>noi_dung</td>
        <td>hang_duoc_mua</td>
        <td>tong_cong</td>
        <td>trang_thai</td>
    </tr>
    <?php
    require('ket_noi.php');
    //	$sql = "SELECT * FROM product";
    //	$result = $conn->query($sql);
    $query =mysqli_query($conn,"SELECT * FROM hoa_don" );
    if (mysqli_num_rows($query) != 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            ?>
            <tr class="item">
<!--                <td><img src="hinh_anh/san_pham/--><?//= $row['hinh_anh'] ?><!--" style="max-height: 80px"></td>-->
                <td><?= $row['id'] ?></td>
                <td><?= $row['ten_nguoi_mua'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['dia_chi'] ?></td>
                <td><?= $row['dien_thoai'] ?></td>
                <td><?= $row['noi_dung'] ?></td>
                <td><?= $row['hang_duoc_mua']?></td>
                <td>$<?= $row['tong_cong']?></td>
                <td><?= $row['trang_thai']?></td>
                <td> | <a href="setorder.php?id=<?= $row['id'] ?>" class="delete">Done</a></td>
            </tr>
        <?php 	}
    }
    ?>
    <tr class="control" style="text-align: right; font-weight: bold; font-size: 17px">
        <td colspan="5">
            <p>Số lượng hóa đơn : <?= $query->num_rows ?></p>
        </td>
    </tr>
</table>


<!-- Delete Confirm Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>

        </div>

    </div>
</div>


</body>
</html>