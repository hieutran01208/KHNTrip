<?php
/**
 * Template Name: book-tour
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
<?php
session_start(); $id = $_GET['TenTour'];
?>

<div class="book-tour">
<?php get_template_part('header'); ?>
    <div>
        <div id="content " role="main">
            <?php
            $args = array(
                'p'         => $id,
                'post_type' => 'any'
            );
            $my_posts = new WP_Query($args);
            ?>
            <?php
            if ($my_posts->have_posts()): ?>
                <?php while ($my_posts->have_posts()) : $my_posts->the_post(); ?>
            <?php
            $tentour = get_the_title();
            $gianguoilon = get_field('gia_nguoi_lon');
            $giatreem = get_field('gia_tre_em');
            $khoihanh = get_field('khoi_hanh');
            $diemden  = get_field('diem_den');
            $ngaykhoihanh = $_POST['ngaykhoihanh'];
            $slnguoilon = $_POST['slNguoiLon'];
            $sltreem = $_POST['slTreEm'];

            $link = get_site_url() ."/list-book?tentour=" . $tentour . "&gianguoilon=" . $gianguoilon . "&giatreem=" . $giatreem . "&khoihanh=" . $khoihanh . "&diemden=" . $diemden . "&ngaykhoihanh=" . $ngaykhoihanh . "&slnguoilon=" . $slnguoilon . "&sltreem=" . $sltreem;
            ?>

            <form action="<?php echo $link; ?>" method="post">
                    <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>
                        <div class="col-sm-8 ">
                            <div class="col-sm-12 bg-white box-book-tour-thongtin">
                                <h3 class="	glyphicon glyphicon-duplicate col-sm-12"><span>Thông Tin Dịch Vụ</span></h3>
                                <div class="clearfix"></div>
                                <div class="col-sm-8">
                                    <strong><?php the_title()?></strong>
                                    <p>Ngày Khởi Hành <?php echo $_POST['ngaykhoihanh'] ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <div class="col-sm-6">
                                        <strong><p>Người Lớn</p></strong>
                                        <?php echo $_POST['slNguoiLon']?>
                                    </div>
                                    <div class="col-sm-6">
                                        <strong><p>Trẻ Em</p></strong>
                                        <?php echo $_POST['slTreEm']?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 bg-white box-book-tour-nguoidat">
                                <h3 class="	glyphicon glyphicon-user col-sm-12"><span>Thông Tin Người Đặt Dịch Vụ</span></h3>
                                <div class="form-book-tour">
                                    <div class="col-sm-12 mg-t20">
                                        <div class="col-sm-6">
                                            <input required="required" type="text" name="tennguoidat" id="tennguoidat" placeholder="Họ và Tên">
                                        </div>
                                        <div class="col-sm-6">
                                            <input required="required" type="email" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <input required="required"  type="text" name="sodt" id="sodt" placeholder="Số điện thoại">
                                        </div>
                                        <div class="col-sm-6">
                                            <input required="required"  type="text" name="diachi" id="diachi" placeholder="Địa chỉ">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 thongtin">
                                        <textarea  name="thongtin" id="thongtin" placeholder="Thông Tin Ghi Chú Tour"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 bg-white box-book-tour-thanhtoan">
                                <h3 class="	glyphicon glyphicon-credit-card col-sm-12"><span>Thông Tin Thanh Toán</span></h3>
                                <p class="glyphicon glyphicon-ok"><span>Thanh Toán Tại Văn Phòng</span></p>
                            </div>
                            <div class="col-sm-12 bg-white box-book-tour-submit">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <input required="required" type="checkbox" id="booktourcheck" name="booktourcheck" value="bookcheck" class="required"> Tôi đã đọc và đồng ý với <a class="" data-toggle="modal" data-target="#myModal">Điều khoản và Quy định</a>
                                </div>
                                <div class="col-sm-4 col-sm-offset-4">
                                    <input type="submit" class="col-sm-4 book-tour-form-submit" value="ĐẶT NGAY">
                                </div>
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Điều khoản sử dụng</h4>
                                            </div>
                                            <div class="modal-body">
                                                <strong class="title">Chào mừng bạn đến với website KHN Trip, website được điều hành bởi Trung tâm lữ hành quốc tế KHN Trip.
                                                    Xin vui lòng đọc kỹ các nội dung trong phần "Điều khoản sử dụng" trước khi sử dụng trang web.
                                                    Bạn phải đồng ý hoàn toàn các điều khoản dưới đây nếu muốn sử dụng trang web,
                                                    trường hợp bạn không đồng ý với bất kỳ nội dung nào trong điều khoản,
                                                    xin vui lòng ngừng việc sử dụng trang web ngay lập tức.</strong><br>
                                                <strong>Sử dụng trang web</strong>
                                                <li>Khi sử dụng trang web, vui lòng đồng ý rằng:</li>
                                                <li>Chịu trách nhiệm với tất cả những thao tác, hoạt động trên trang web.</li>
                                                <li>Chịu trách nhiệm trước các thông tin cung cấp trên trang web vì bất cứ mục đích nào.</li>
                                                <li>Phải có đủ năng lực pháp lý, đủ 18 tuổi trở lên.</li>
                                                <li>Không sử dụng trang web cho mục đích đầu cơ, gian lận, lừa đảo.</li>
                                                <li>Nghiêm cấm các hành vi phát tán tài liệu mang tính khiêu khích hoặc trái pháp luật trên trang web này.</li>
                                                <li>Không được copy, sửa đổi bất kỳ nội dung nào trên trang web dưới bất kỳ hình thức nào trừ trường hợp sử dụng cho mục đích cá nhân hoặc phi thương mại.</li>
                                                <li>Tìm cách, cố gắng xâm phạm vào trang web, hoặc mạng máy tính hoặc mạng kết nối của trang web.</li>
                                                <li>Làm bất cứ hành động nào gây hại cho trang web KHN Trip cũng như Trung tâm lữ hành quốc tế KHN Trip và nhân viên của KHN Trip.</li>
                                                <strong>Giá các dịch vụ</strong>
                                                <li>Giá các dịch vụ được mở bán trên KHN Trip đều được niêm yết bằng tiền đồng (VND). </li>
                                                <li>Giá bán chính thức tùy thuộc vào từng loại dịch vụ, đối tượng sử dụng dịch vụ, loại dịch vụ,...</li>
                                                <li>Các hạng mục dịch vụ với giá công bố được liệt kê trong mục bao gồm và không bao gồm.</li>
                                                <li>Thông tin về giá luôn được cập nhật, KHN Trip luôn nổ lực để cập nhật giá các dịch vụ một cách chính xác và đầy đủ nhất tuy nhiên vẫn không tránh khỏi những lỗi phát sinh.<br>
                                                    Trường hợp giá một dịch vụ nào đó không chính xác do lỗi hệ thống, KHN Trip sẽ không chịu ràng buộc bởi mức giá đó.</li>
                                                <strong>Thanh toán</strong>
                                                <p>KHN  mong muốn mang lại sự tiện lợi và dễ dàng cho du khách trong quá trình đặt dịch vụ du lịch cũng như là thanh toán. Hiện chúng tôi hỗ trợ các hình thức thanh toán gồm: tiền mặt (thanh toán tại văn phòng). Trong tương lai gần chúng tôi sẽ mở thêm một số hình thức thanh toán khác như: thanh toán tại nhà, thanh toán tại các cửa hàng tiện lợi, thanh toán trực tuyến.</p>
                                                <strong>Bản quyền</strong>
                                                <p>Bản quyền nội dung trên trang này thuộc về KHN Team. </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="col-sm-12 box-book-tour bg-white">
                                <div class="content">
                                <div>
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="col-sm-12 title-book-tour">
                                    <strong><?php the_title(); ?></strong>
                                </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <strong>Ngày Khởi Hành:</strong>
                                        </div>
                                        <div class="col-sm-6">
                                            <strong class="title"><?php echo $ngaykhoihanh ?></strong>
                                        </div>
                                    </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6">
                                        <strong>Khởi Hành Từ:</strong>
                                    </div>
                                    <div class="col-sm-6">
                                        <strong class="title"><?php the_field("khoi_hanh") ?></strong>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6">
                                        <strong>Điểm Đến:</strong>
                                    </div>
                                    <div class="col-sm-6">
                                        <strong class="title"><?php the_field("diem_den"); ?></strong>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-sm-12">
                                    <div class="col-sm-6">
                                        <strong>Giá Người Lớn:</strong>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="tien "><?php echo $slnguoilon . " X "; tien(get_field('gia_nguoi_lon')); echo"đ" ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6">
                                        <strong>Giá Trẻ Em:</strong>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="tien "><?php echo $sltreem . " X " ; tien(get_field('gia_tre_em')); echo"đ" ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-sm-12 thanhtien">
                                    <div class="col-sm-6">
                                        <strong>Thành Tiền</strong>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="tien">
                                        <?php
                                        $nl = $_POST['slNguoiLon'];
                                        $te = $_POST['slTreEm'];
                                        $tien = get_field('gia_nguoi_lon');
                                        $tien1 = get_field('gia_tre_em');
                                        $nguoilon = $tien * $nl ;
                                        $treem = $tien1 * $te ;
                                        $thanhtien = $nguoilon + $treem;
                                        echo tien($thanhtien) . "đ";
                                        ?></p>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-12 box-book-tour-luuy">
                                <h5 class="col-sm-12">Lưu Ý</h5>
                                <div class="content">
                                    <li>
                                        Xem kỹ thông tin dịch vụ đặt (tên dịch vụ, ngày sử dụng, số lượng), thông tin người đặt (tên, sđt, email),...
                                    </li>
                                    <li>
                                        Sau khi hoàn tất việc đặt dịch vụ, du khách sẽ nhận được xác nhận qua email đã đăng ký.
                                    </li>
                                    <li>
                                        Nhân viên chăm sóc khách hàng của KHN Trip sẽ liên hệ với du khách để xác nhận lại tình trạng
                                    </li>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php  get_template_part('footer'); ?>
    </form>
</div>
