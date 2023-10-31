<?php
include ("ket_noi.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="noi_dung" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Add sản phẩm example</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
          <tr>
              <td colspan="3"><?php include("chuc_nang/banner/banner.php"); ?></td>
          </tr>
        <h2>Add Sản phẩm</h2>
      </div>

      <div class="row">
        <div class="col-md order-md-1">
		  <?php
		  $id = $ten= $gia = $thuoc_menu = $noi_dung = '';
		  if (isset($_GET['id'])) {
			  // Edit
			  require('ket_noi.php');
			  $sql = 'SELECT * FROM san_pham WHERE id = ' . $_GET['id'];
			  $result = $conn->query($sql);
			  if ($result->num_rows > 0) {
				  $row = $result->fetch_assoc();
				  $ten = $row['ten'];
				  $gia = $row['gia'];
				  $thuoc_menu = $row['thuoc_menu'];
				  $noi_dung = $row['noi_dung'];
				  $id = $_GET['id'];
			  }
		  }
		  ?>
          <form action="addsan_pham.php" method="POST" enctype="multipart/form-data">
		    <input type="hidden" name="id" value="<?= $id ?>">

            <div class="mb-3">
              <label for="ten">Ten</label>
              <div class="input-group">
                <input type="text" class="form-control" id="ten" name="ten" value="<?= $ten ?>" required>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="name">Category</label>
              <div class="input-group">
                <select class="input-group" name="thuoc_menu">
					<option value="9" <?php if ($thuoc_menu == '9') echo 'selected'; ?> >Hoa tình yêu</option>
					<option value="10" <?php if ($thuoc_menu == '10') echo 'selected'; ?>>Hoa sinh nhật</option>
					<option value="11" <?php if ($thuoc_menu == '11') echo 'selected'; ?>>Hoa tặng mẹ</option>
					<option value="12" <?php if ($thuoc_menu == '12') echo 'selected'; ?>>Hoa chúc mừng</option>
                    <option value="13" <?php if ($thuoc_menu == '13') echo 'selected'; ?>>Hoa chia buồn</option>
                    <option value="14" <?php if ($thuoc_menu == '14') echo 'selected'; ?>>Hoa cưới</option>
                    <option value="15" <?php if ($thuoc_menu == '15') echo 'selected'; ?>>Hoa tình bạn</option>
                    <option value="16" <?php if ($thuoc_menu == '16') echo 'selected'; ?>>Hoa cám ơn</option>
				</select>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="gia">Giá</label>
              <div class="input-group">
                <input type="number" class="form-control" id="gia" name="gia" value="<?= $gia ?>" required>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="noi_dung">noi_dung</label>
              <div class="input-group">
                <textarea class="form-control" id="noi_dung" name="noi_dung" required><?= $noi_dung ?></textarea>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="hinh_anh">Image</label>
              <div class="input-group">
                <input type="file" id="hinh_anh" name="hinh_anh" required>
              </div>
            </div>
			
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">
				<?php 
				if (isset($_GET['id'])) {
					echo 'Update';
				} else {
					echo 'Add';
				}
				?>
			</button>
              <a href="list.php">Danh sách sản phẩm<br>     </a>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 FLOWERS WORLD</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

  </body>
</html>