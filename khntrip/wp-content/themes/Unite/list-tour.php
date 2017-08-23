<?php
/**
 * Template Name: list-book
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package unite
 */

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

<?php
function getConnection()
{
    $cnn = new PDO(
        'mysql:host=localhost;
        dbname=5150598db91',
        'hieutran',
        '123',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
    return $cnn;
}


date_default_timezone_set('Asia/Ho_Chi_Minh');
$now =  date('d/m/Y H:i:s');

?>

<?php
$check = $_POST['booktourcheck'];
if ($check == "bookcheck") {

    $hovaten = $_POST['tennguoidat'];
    $email = $_POST['email'];
    $sodt = $_POST['sodt'];
    $diachi = $_POST['diachi'];
    $thongtin = $_POST['thongtin'];
    $tentour = $_GET['tentour'];
    $gianguoilon = $_GET['gianguoilon'];
    $giatreem = $_GET['giatreem'];
    $khoihanh = $_GET['khoihanh'];
    $diemden  = $_GET['diemden'];
    $slnguoilon = $_GET['slnguoilon'];
    $sltreem = $_GET['sltreem'];
    $ngaykhoihanh = $_GET['ngaykhoihanh'];


    $cnn = getConnection();

    $sql = "INSERT INTO `wp_book_tour`(`id`, `ho-va-ten`, `so-dien-thoai`, `email`, `ghi-chu-tour`, `dia-chi`, `ten-tour`, `ngay-khoi-hanh`, `sl-nguoi-lon`, `sl-tre-em`, `gia-nguoi-lon`, `gia-tre-em`, `tong-tien`, `khoi-hanh`, `diem-den`, `ngay-dat`) 
VALUES (null,'" . $hovaten . "','" . $sodt . "','" . $email . "','" . $thongtin . "','" . $diachi . "','" . $tentour . "','" . $ngaykhoihanh . "','" . $slnguoilon . "','" . $sltreem . "','" . $gianguoilon . "','" . $giatreem . "','" . $thanhtien . "','" . $khoihanh . "','" . $diemden . "' ,'" . $now . "');";
    $statement = $cnn -> prepare($sql);
    $statement -> execute();

    $link = get_site_url() . "/tour";
    header('location:' . $link);
};
?>


<?php
$check = $_POST['bookxecheck'];
if ($check == "bookxecheck") {

    $hovaten = $_POST['tennguoidat'];
    $email = $_POST['email'];
    $sodt = $_POST['sodt'];
    $diachi = $_POST['diachi'];
    $thongtin = $_POST['thongtin'];

    $tenchuyenxe = $_GET['tenchuyen'];
    $khoihanh = $_GET['diemkhoihanh'];
    $diemden  = $_GET['diemden'];
    $chonxe = $_GET['chonxe'];
    $ngaykhoihanh = $_GET['ngaykhoihanh'];
    $giaxe = $_GET['giaxe'];

    $cnn = getConnection();


    $sql = "INSERT INTO `wp_book_xe`(`id`, `ten-chuyen-xe`, `nguoi-dat-xe`, `email`, `so-dien-thoai`, `dia-chi`, `thong-tin`, `ngay-khoi-hanh`, `khoi-hanh`, `diem-den`, `loai-xe`, `gia-thue`,`type`, `ngay-dat`) 
VALUES (null,'" . $tenchuyenxe . "','" . $hovaten . "','" . $email . "','" . $sodt . "','" . $diachi . "','" . $thongtin . "','" . $ngaykhoihanh . "','" . $khoihanh . "','" . $diemden . "','" . $chonxe . "','" . $giaxe . "', '' , '". $now ."');";
    $statement = $cnn -> prepare($sql);
    $statement -> execute();

    $link = get_site_url() . "/thue-xe";
    header('location:' . $link);
};
?>



<?php
$check = $_POST['bookvecheck'];
if ($check == "bookvecheck") {

    $hovaten = $_POST['tennguoidat'];
    $email = $_POST['email'];
    $sodt = $_POST['sodt'];
    $diachi = $_POST['diachi'];
    $thongtin = $_POST['thongtin'];

    $tenve = $_GET['tenve'];
    $ngayxem = $_GET['ngayxem'];
    $diemxemve = $_GET['diemxemve'];
    $giatreem = $_GET['giatreem'];
    $gianguoilon = $_GET['gianguoilon'];
    $slnguoilon = $_GET['slnguoilon'];
    $sltreem = $_GET['sltreem'];

    $cnn = getConnection();

    $sql = "INSERT INTO `wp_book_ve`(`id`, `ten-nguoi-dat`, `email`, `so-dien-thoai`, `dia-chi`, `thong-tin`, `ten-ve-dat`, `ngay-xem`, `sl-nguoi-lon`, `sl-tre-em`, `dia-chi-xem-ve`, `gia-nguoi-lon` , `gia-tre-em`, `ngay-dat-ve`) 
VALUES (null,'" . $hovaten . "','" . $email . "','" . $sodt . "','" . $diachi . "','" . $thongtin . "','" . $tenve . "','" . $ngayxem . "','" . $slnguoilon . "','" . $sltreem . "','" . $diemxemve . "','" . $gianguoilon . "' , '" . $giatreem . "' , '" . $now . "');";
    $statement = $cnn -> prepare($sql);
    $statement -> execute();

    $link = get_site_url() . "/ve-tham-quan";
    header('location:' . $link);
};
?>



<!------bang-thong-tin-------->
<?php

    $cnn = getConnection();
    $sql = "SELECT * FROM `wp_book_tour` ORDER BY id DESC";
    $statement = $cnn -> prepare($sql);
    $statement -> execute();
    $statement -> rowCount();


$i = 0;
echo "<div class='table-danhsach'> <center style='font-size: 25px; color: #06B04B;'>Bảng Danh Sách Đặt Tour Du Lịch</center><table class='table table-hover table-bordered' id='myTable'>";
echo "<thead> <tr class='info'>
  <th>STT</th>
  <th>Họ và Tên</th>
  <th>Email</th>
  <th>Tên Tour</th>
  <th>Ngày Khởi hành</th>
  <th>Tuỳ Chọn</th>
  </tr> </thead>";

if ($statement -> rowCount()>0){
    while ($row = $statement -> fetch()) {

        $i++;
        $id = $row['id'];
        echo "<tr class='table-success' data-toggle='modal' data-target='$id'>
      <td>$i</td>
      <td>$row[1]</td>
      <td>$row[3]</td>
      <td>$row[6]</td>
      <td>$row[7]</td>
      <td>
      <a href=" . get_site_url() . '/show-book/?id=' .$row[0] . '&type=tour' . ">Xem chi tiết</a>
      </td>
      </tr>
      ";
    }
}
echo "</table> </div>";
?>


<?php
$cnn = getConnection();
$sql = "SELECT * FROM `wp_book_xe` ORDER BY id DESC";
$statement = $cnn -> prepare($sql);
$statement -> execute();
$statement -> rowCount();


$i = 0;
echo "<div class='table-danhsach'> <center style='font-size: 25px; color: #06B04B;'>Bảng Danh Sách Đặt Xe Du Lịch</center><table class='table table-hover table-bordered' id='myTable1'>";
echo "<thead> <tr class='info'>
  <th>STT</th>
  <th>Họ và Tên</th>
  <th>Email</th>
  <th>Chuyến Xe</th>
  <th>Ngày Khởi hành</th>
  <th>Tuỳ Chọn</th>
  </tr> </thead>";

if ($statement -> rowCount()>0){
    while ($row = $statement -> fetch()) {

        $i++;
        $id = $row['id'];
        echo "<tr class='table-success' data-toggle='modal' data-target='$id'>
      <td>$i</td>
      <td>$row[2]</td>
      <td>$row[3]</td>
      <td>$row[1]</td>
      <td>$row[7]</td>
      <td>
      <a href=" . get_site_url() . '/show-book/?id=' .$row[0] . '&type=xe' . ">Xem chi tiết</a>
      </td>
      </tr>
      ";
    }
}
echo "</table> </div>";
?>

<?php
$cnn = getConnection();
$sql = "SELECT * FROM `wp_book_ve` ORDER BY id DESC";
$statement = $cnn -> prepare($sql);
$statement -> execute();
$statement -> rowCount();


$i = 0;
echo "<div class='table-danhsach'> <center style='font-size: 25px; color: #06B04B;'>Bảng Danh Sách Đặt Vé Tham Quan</center><table class='table table-hover table-bordered' id='myTable2'>";
echo "<thead> <tr class='info'>
  <th>STT</th>
  <th>Họ và Tên</th>
  <th>Email</th>
  <th>Tên vé</th>
  <th>Ngày Tham Quan</th>
  <th>Tuỳ Chọn</th>
  </tr> </thead>";

if ($statement -> rowCount()>0){
    while ($row = $statement -> fetch()) {

        $i++;
        $id = $row['id'];
        echo "<tr class='table-success' data-toggle='modal' data-target='$id'>
      <td>$i</td>
      <td>$row[1]</td>
      <td>$row[2]</td>
      <td>$row[6]</td>
      <td>$row[7]</td>
      <td>
      <a href=" . get_site_url() . '/show-book/?id=' .$row[0] . '&type=ve' . ">Xem chi tiết</a>
      </td>
      </tr>
      ";
    }
}
echo "</table> </div>";
?>

<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
    $(document).ready(function(){
        $('#myTable1').DataTable();
    });
    $(document).ready(function(){
        $('#myTable2').DataTable();
    });
</script>