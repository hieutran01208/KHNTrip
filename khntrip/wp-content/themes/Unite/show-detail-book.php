<?php
/**
 * Template Name: show-all-book
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
<div class="no-header">
    <?php get_template_part('header'); ?>


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
?>


<?php
    $type = $_GET['type'];
    $id = $_GET['id'];
if ($type == 'tour')
{
$cnn = getConnection();
$sql = "SELECT * FROM `wp_book_tour` WHERE `id` = $id  ";
$statement = $cnn -> prepare($sql);
$statement -> execute();
$statement -> rowCount();
$row = $statement -> fetch();

$link = get_site_url() . "/list-book";

echo "

<div class='container wrap-thongtin-book-tour'>
<center>Thông Tin Đặt Tour</center>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Mã đặt tour:</p>
            </div>
        <div class='col-sm-6'>
            $row[0]
        </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Họ và tên:</p>
            </div>
            <div class='col-sm-6'>
                $row[1]
            </div>
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Số điện thoại:</p>
            </div>
            <div class='col-sm-6'>
                $row[2]
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Email:</p>
            </div>
            <div class='col-sm-6'>
            $row[3]
            </div>
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Địa Chỉ:</p>
            </div>
            <div class='col-sm-6'>
                $row[5]
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Ghi chú đặt tour:</p>
            </div>
            <div class='col-sm-6'>
                $row[4]
            </div>
        </div>
    </div>
    
    
    <div class='col-sm-12'>
        <div class='col-sm-3'>
            <p>Tên tour đặt:</p>
        </div>
        <div class='col-sm-9'>
            $row[6]
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-3'>
            <p>Ngày khởi hành:</p>
        </div>
        <div class='col-sm-9'>
            $row[7]
        </div>
    </div>
   
   
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Điểm khởi hành:</p>
            </div>
        <div class='col-sm-6'>
                $row[13]
        </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Điểm đến:</p>
            </div>
            <div class='col-sm-6'>
                $row[14]
            </div>
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Số lượng người lớn:</p>
            </div>
            <div class='col-sm-6'>
                $row[8]
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Số lượng trẻ em:</p>
            </div>
            <div class='col-sm-6'>
                $row[9]
            </div>
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
            <p>Giá người lớn:</p>
            </div>
            <div class='col-sm-6'>
                $row[10]
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
            <p>Giá trẻ em:</p>
            </div>
            <div class='col-sm-6'>
                $row[11]
            </div>
        </div>
    </div>
        <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Ngày đặt vé:</p>
            </div>
            <div class='col-sm-6'>
                $row[15]
            </div>
        </div>
    </div>
    <div class='col-sm-12 wrap-btn'>
        <div class='col-sm-offset-4 col-sm-4'>
            <a href='" . $link ." ' class='btn btn-show-detail-book'>Quay Lại</a>
        </div>
    </div>
</div>
"; }

else if($type == 'xe'){
    $cnn = getConnection();
    $sql = "SELECT * FROM `wp_book_xe` WHERE `id` = $id  ";
    $statement = $cnn -> prepare($sql);
    $statement -> execute();
    $statement -> rowCount();
    $row = $statement -> fetch();

    $link = get_site_url() . "/list-book";
echo "
    <div class='container wrap-thongtin-book-tour'>
<center>Thông Tin Đặt Xe</center>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Mã đặt xe:</p>
            </div>
        <div class='col-sm-6'>
                $row[0]
        </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Họ và tên:</p>
            </div>
            <div class='col-sm-6'>
                   $row[2]
            </div>
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Số điện thoại:</p>
            </div>
            <div class='col-sm-6'>
                  $row[4]
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Email:</p>
            </div>
            <div class='col-sm-6'>
                $row[3]
            </div>
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Địa Chỉ:</p>
            </div>
            <div class='col-sm-6'>
                $row[5]
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Ghi chú đặt xe:</p>
            </div>
            <div class='col-sm-6'>
                    $row[6]
            </div>
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-3'>
            <p>Tên chuyến xe:</p>
        </div>
        <div class='col-sm-9'>
               $row[1]
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-3'>
            <p>Ngày khởi hành:</p>
        </div>
        <div class='col-sm-9'>
            $row[7]
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Điểm khởi hành:</p>
            </div>
        <div class='col-sm-6'>
                $row[8]
        </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Điểm đến:</p>
            </div>
            <div class='col-sm-6'>
                $row[9]
            </div>
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Loại xe thuê:</p>
            </div>
            <div class='col-sm-6'>
                $row[10]
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Giá Thuê:</p>
            </div>
            <div class='col-sm-6'>
                $row[11]
            </div>
        </div>
    </div>
        <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Ngày đặt vé:</p>
            </div>
            <div class='col-sm-6'>
                $row[13]
            </div>
        </div>
    </div>
    <div class='col-sm-12 wrap-btn'>
        <div class='col-sm-offset-4 col-sm-4'>
            <a href='" . $link ." ' class='btn btn-show-detail-book'>Quay Lại</a>
        </div>
    </div>
</div>";
}


else if($type == 've'){
    $cnn = getConnection();
    $sql = "SELECT * FROM `wp_book_ve` WHERE `id` = $id  ";
    $statement = $cnn -> prepare($sql);
    $statement -> execute();
    $statement -> rowCount();
    $row = $statement -> fetch();

    $link = get_site_url() . "/list-book";
    echo "
    <div class='container wrap-thongtin-book-tour'>
<center>Thông Tin Đặt Xe</center>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Mã đặt vé:</p>
            </div>
        <div class='col-sm-6'>
                $row[0]
        </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Họ và tên:</p>
            </div>
            <div class='col-sm-6'>
                   $row[1]
            </div>
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Số điện thoại:</p>
            </div>
            <div class='col-sm-6'>
                  $row[3]
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Email:</p>
            </div>
            <div class='col-sm-6'>
                $row[2]
            </div>
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Địa Chỉ:</p>
            </div>
            <div class='col-sm-6'>
                $row[4]
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Ghi chú đặt vé:</p>
            </div>
            <div class='col-sm-6'>
                    $row[5]
            </div>
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-3'>
            <p>Tên vé tham quan:</p>
        </div>
        <div class='col-sm-9'>
               $row[6]
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-3'>
            <p>Ngày sử dụng:</p>
        </div>
        <div class='col-sm-9'>
            $row[7]
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-3'>
                <p>Điểm sử dụng:</p>
        </div>
        <div class='col-sm-9'>
                $row[10]
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Số lượng vé người lớn:</p>
            </div>
            <div class='col-sm-6'>
                $row[8]
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Số lượng vé trẻ em:</p>
            </div>
            <div class='col-sm-6'>
                $row[9]
            </div>
        </div>
    </div>
        <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Giá vé người em:</p>
            </div>
            <div class='col-sm-6'>
                $row[11]
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Giá vé trẻ em:</p>
            </div>
            <div class='col-sm-6'>
                $row[12]
            </div>
        </div>
    </div>
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-6'>
                <p>Ngày đặt vé:</p>
            </div>
            <div class='col-sm-6'>
                $row[13]
            </div>
        </div>
    </div>
    <div class='col-sm-12 wrap-btn'>
        <div class='col-sm-offset-4 col-sm-4'>
            <a href='" . $link ." ' class='btn btn-show-detail-book'>Quay Lại</a>
        </div>
    </div>
</div>";
}




?>


</div>
