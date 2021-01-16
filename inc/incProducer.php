<!-- //Producer -->
<div class="deal-leftmk left-side">
    <h3 class="agileits-sear-head">Producer</h3>
    <div class="special-sec1">
        <?php
        $query = "SELECT * FROM HangSanXuat";
        $producer = DataProvider::ExecuteQuery($query);
        while ($col = mysqli_fetch_array($producer)) { ?>
            <div class="col-xs-4 img-deals">
                <img src="<?php $public ?>images/<?php echo $col['LogoURL'] ?>" alt="" style="width:30px; height:40px">
            </div>

            <div class="col-xs-8 img-deal1">
                <a href="index.php?act=Producer&id=<?php echo $col["MaHangSanXuat"] ?>"> <?php echo $col["TenHangSanXuat"] ?></a>
            </div>
            <div class="clearfix"></div>
        <?php } ?>
    </div>

</div>
</div>