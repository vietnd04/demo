<div class="row mb">
            <div class="boxtitle">TÀI KHOẢN</div>
            <div class="boxcontent formtaikhoan">
                <?php
                if(isset($_SESSION['user'])){
                    extract($_SESSION['user']);
                ?>
                 <div class="row mb10">
                        Xin chào:<br>
                        <?=$user?>
                    </div>
                    <div class="row mb10">
                    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                    <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                    <?php
                    if($role==1){?>

                    <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                    
                    <?php } ?>
                    <li><a href="index.php?act=thoat">Thoát</a></li>
                    </div>
                    <?php
                }else{
                ?>
                <form action="index.php?act=dangnhap" method="post">
                    <div class="row mb10">
                        Tên đăng nhập:<br>
                        <input type="text" name="user">
                    </div>
                    <div class="row mb10">
                        Mật khẩu:<br>
                        <input type="password" name="pass">
                    </div>
                    <div class="row mb10">
                        <input type="checkbox">Ghi nhớ tài khoản?
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Đăng nhập" name="dangnhap">
                    </div>
                    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                    <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                </form>
                    <?php }
                ?>
                
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">DANH MỤC</div>
            <div class="boxcontent2 menudoc">
                <ul>
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm="index.php?act=sanpham&iddm=".$id;
                        echo '<a href="'.$linkdm.'"><li>
                        '.$name.'
                    </li></a>';
                    }
                    ?>
                    <!-- <li>
                        <a href="#">Đồng hồ</a>
                    </li>
                    <li>
                        <a href="#">Laptop</a>
                    </li>
                    <li>
                        <a href="#">Điện thoại</a>
                    </li>
                    <li>
                        <a href="#">Balo</a>
                    </li>
                    <li>
                        <a href="#">Máy ảnh</a>
                    </li>
                    <li>
                        <a href="#">Nước hoa</a>
                    </li>
                    <li>
                        <a href="#">Túi xách du lịch</a>
                    </li> -->
                </ul>
            </div>
            <div class="boxfooter seachbox">
                <form action="index.php?act=sanpham" method="post">
                    <input type="text" name="kyw">
                    <input type="submit" name="timkiem" value="Tìm kiếm">
                </form>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">TOP 10 YÊU THÍCH</div>
            <div class="row boxcontent">
                <?php
                    foreach ($dstop10 as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $img=$img_path.$img;
                        echo '<div class="row mb10 top10">
                        <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                    <a href="'.$linksp.'">'.$name.'</a>
                </div>';
                    }
                ?>
                <!-- 
                <div class="row mb10 top10">
                    <img src="anh/pc-cps-gaming-g1-23.webp" alt="">
                    <a href="#">PC gaming</a>
                </div>
                <div class="row mb10 top10">
                    <img src="anh/galaxy-z-fold-5-xanh-1.webp" alt="">
                    <a href="#">Samsung galaxy Z Fold 5</a>
                </div>
                <div class="row mb10 top10">
                    <img src="anh/man-hinh-asus-vz279heg1r-27-inch.webp" alt="">
                    <a href="#">Màn hình asus</a>
                </div>
                <div class="row mb10 top10">
                    <img src="anh/air_m2.webp" alt="">
                    <a href="#">Macbook air M2</a>
                </div>
                <div class="row mb10 top10">
                    <img src="anh/pc-cps-gaming-g1-23.webp" alt="">
                    <a href="#">PC gaming</a>
                </div>
                <div class="row mb10 top10">
                    <img src="anh/galaxy-z-fold-5-xanh-1.webp" alt="">
                    <a href="#">Samsung galaxy Z Fold 5</a>
                </div>
                <div class="row mb10 top10">
                    <img src="anh/man-hinh-asus-vz279heg1r-27-inch.webp" alt="">
                    <a href="#">Màn hình asus</a>
                </div> -->
            </div>
        </div>