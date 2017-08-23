<?php
session_start();
?>

<?php get_template_part('header'); ?>
    <div class="bg-space">
        <div class="container pt20 single-tour">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>
                    <div class="sigle-tour">
                        <div class="col-sm-8">
                            <div class="col-sm-12 box-single-tour-title bg-white">
                                <div class="col-sm-12">
                                    <h3><?php the_title() ?></h3>
                                </div>
                                <div class="col-sm-12 single-tour-khoihanh">
                                    <h5>Khởi hành từ <?php the_field("khoi_hanh")?></h5>
                                </div>
                                <div class="col-sm-12 signle-tour-giachitu">
                                    <h5>Giá chỉ từ  <?php tien(get_field('gia_nguoi_lon')); ?>đ</h5>
                                </div>
                                <div class="col-sm-12 box-sigle-tour-slider">
                                    <?php the_content();?>
                                </div>
                            </div>
                            <div class="col-sm-12 box-single-tour bg-white">
                                <h3 class="glyphicon glyphicon-star"> <span>Điểm Nổi Bật</span></h3>
                                <hr>
                                <?php the_field("diem_noi_bat")?>
                            </div>
                            <div class="col-sm-12 box-single-tour bg-white">
                                <h3 class="glyphicon glyphicon-map-marker"> <span>Chương Trình Tour</span></h3>
                                <hr>
                                <?php the_field("chuong_trinh_tour")?>
                            </div>
                            <div class="col-sm-12 box-single-tour bg-white">
                                <h3 class="glyphicon glyphicon-remove"> <span>Bao Gồm/ Không Bao Gồm</span></h3>
                                <hr>
                                <?php the_field("bao_gom")?>
                            </div>
                        </div>

                        <?php
                        $id = get_the_ID();
                        $link = get_site_url() ."/book-tour?TenTour=" . $id;
                        ?>
                        <form action="<?php echo $link; ?>"   method="post">
                        <div class="col-sm-4 bg-white box-thong-tin-tour">
                                <div class="col-sm-12">
                                    <h4 class="glyphicon glyphicon-hand-right">  <span>Thông Tin Tour</span></h4>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6 col-xs-6">
                                        Khởi Hành Từ
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <strong><?php the_field("khoi_hanh")?></strong>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6 col-xs-6">
                                        Điểm Đến
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <strong><?php the_field("diem_den")?></strong>
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
                                        Giá Người Lớn
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <strong class="single-tour-gia"><?php tien(get_field('gia_nguoi_lon')); ?>đ</strong>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6 col-xs-6">
                                        Giá Trẻ Em
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <strong class="single-tour-gia"><?php tien(get_field('gia_tre_em')); ?>đ</strong>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6 col-xs-6">
                                        Số Lượng Người Lớn
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <select required name="slNguoiLon" id="slNguoiLon" class="form-control" >
                                            <?php for ($number=0; $number <= 10 ; $number++) { ?>
                                                <option  value="<?php echo $number; ?>"> <?php echo $number; ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6 col-xs-6">
                                        <p data-toggle="tooltip" data-placement="top" title="Trẻ em dưới 8 tuổi!">Số Lượng Trẻ Em</p>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <select required name="slTreEm" id="slTreEm" class="form-control" >
                                            <?php for ($number=0; $number <= 10 ; $number++) { ?>
                                                <option value="<?php echo $number; ?>"> <?php echo $number; ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <input type="submit" value="Đặt Tour" class="btn-book-tour col-sm-12 submit">
                            </form>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

<?php  get_template_part('footer'); ?>



<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
