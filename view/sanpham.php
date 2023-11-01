<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            
            <div class="boxtitle">Sản Phẩm: <strong><?=$tendm?></strong></div>
            <div class="row boxcontent ">
    <?php
        $i=1;
        foreach ($dssp as $sp) {
            extract($sp);
            $hinh=$img_path.$img;
            $linksp="index.php?act=sanphamct&idsp=".$id;
            if($i%3==0){
                $mr="";
            }
            else{
                $mr="mr";
            }
            echo '<div class="boxsp '.$mr.'">
        <div class="img row"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
        <p>'.$price.'</p>
        <a href="'.$linksp.'">'.$name.'</a>
        </div>';
        $i+=1;
        }
    ?>
    
            </div>
        </div>
        
    </div>




    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>