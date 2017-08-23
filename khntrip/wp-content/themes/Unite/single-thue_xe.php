<?php
session_start();
?>

<?php get_template_part('header'); ?>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>
            <div class="container pt20 single-thuexe">
                <div class="col-sm-8">
                    <div class="col-sm-12 box-single-tour-title bg-white">
                        <div class="col-sm-12">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="col-sm-12 box-sigle-tour-slider">
                            <?php the_content();?>
                        </div>
                        <div class="col-sm-12 single-tour-khoihanh">
                            <h5>Khởi hành từ <?php the_field("diem_khoi_hanh")?></h5>
                        </div>
                        <div class="col-sm-12 signle-tour-giachitu">
                            <h5>Điểm đến  <?php the_field("diem_den") ?></h5>
                        </div>
                    </div>
                    <div class="col-sm-12 box-single-tour bg-white">
                        <h3 class="glyphicon glyphicon-star"> <span>Bảng giá vé xe</span></h3>
                        <hr>
                        <table class="table table-hover">
                            <tr class='info'>
                                <th>Loại Xe</th>
                                <th>Giá Xe</th>
                            </tr>
                            <tr>
                                <td>Xe 4 Chổ</td>
                                <td><?php tien(get_field("gia_xe_4_cho")) ?>đ</td>
                            </tr>
                            <tr>
                                <td>Xe 7 Chổ</td>
                                <td><?php tien(get_field("gia_xe_7_cho")) ?>đ</td>
                            </tr>
                            <tr>
                                <td>Xe 16 Chổ</td>
                                <td><?php tien(get_field("gia_xe_16_cho")) ?>đ</td>
                            </tr>
                            <tr>
                                <td>Xe 29 Chổ</td>
                                <td><?php tien(get_field("gia_xe_29_cho")) ?>đ</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-12 box-single-tour bg-white">
                        <h3 class="glyphicon glyphicon-star"> <span>Điểm Nổi Bật</span></h3>
                        <hr>
                        <?php the_field("diem_noi_bat")?>
                    </div>
                    <div class="col-sm-12 box-single-tour bg-white">
                        <h3 class="glyphicon glyphicon-map-marker"> <span>Chi Tiết</span></h3>
                        <hr>
                        <?php the_field("chi_tiet")?>
                    </div>
                    <div class="col-sm-12 box-single-tour bg-white">
                        <h3 class="glyphicon glyphicon-remove"> <span>Bao Gồm/ Không Bao Gồm</span></h3>
                        <hr>
                        <?php the_field("bao_gom")?>
                    </div>
                    <div class="col-sm-12 box-single-tour bg-white">
                        <h3 class="glyphicon glyphicon-map-marker"> <span>Lưu Ý Đặc Biệt</span></h3>
                        <hr>
                        <?php the_field("luu_y")?>
                    </div>
                    <div class="col-sm-12 box-single-tour bg-white">
                        <h3 class="glyphicon glyphicon-remove"> <span>Kinh Nghiêm Đặt Thuê Xe Đưa Đón</span></h3>
                        <hr>
                        <?php the_field("kinh_nghiem")?>
                    </div>
                </div>
                <?php
                $id = get_the_ID();
                $link = get_site_url() ."/book-xe?Tenbookxe=" . $id;
                ?>
                <form action="<?php echo $link; ?>"   method="post">
                    <div class="col-sm-4 bg-white box-thong-tin-tour">
                        <div class="col-sm-12">
                            <h4 class="glyphicon glyphicon-hand-right">  <span>Thông Tin Vé</span></h4>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6 col-xs-6">
                                Giá chỉ từ:
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <strong><?php tien(get_field("gia_xe_4_cho"))?>đ</strong>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6 col-xs-6">
                                Ngày Khởi Hành
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <input required="required" type="text" name="ngaykhoihanh" id="ngaykhoihanh" class="form-control datepicker">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6 col-xs-6">
                                Chọn Xe
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <select name="chonxe" id="chonxe" class="form-control">
                                    <option value="Xe 4 Chổ">Xe 4 chổ</option>
                                    <option value="Xe 7 Chổ">Xe 7 chổ</option>
                                    <option value="Xe 16 Chổ">Xe 16 chổ</option>
                                    <option value="Xe 29 Chổ">Xe 29 chổ</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" value="Đặt Xe" class="btn-book-tour col-sm-12 submit">
                    </div>
                </form>
            </div>
        </article>
    <?php endwhile; ?>
    <?php endif; ?>
<?php  get_template_part('footer'); ?>


