<?php $public = 'http://localhost/ECOMERCIAl/'; 

?>

<!-- top Products -->
<div class="ads-grid" >
    <div class="container">
        <!-- product left -->
        <div class="side-bar col-md-3">
            <div class="search-hotel">
                <h3 class="agileits-sear-head">Search Products Name </h3>
                <form action="#" method="post">
                    <input type="search" placeholder="Product name..." name="search" required="">
                    <input type="submit" value=" ">
                </form>
            </div>

            <!-- Category -->
            <div class="left-side">
                <h3 class="agileits-sear-head">Categories</h3>
                <?php
                $query = "SELECT * FROM LoaiSanpham WHERE BiXoa = 0";
                $category = DataProvider::ExecuteQuery($query);
                while ($row = mysqli_fetch_array($category)) { ?>
                    <ul>

                        <li>
                            <a href="index.php?act=Category&id=<?php echo $row["MaLoaiSanPham"]?>"><u><span class="span" style="font-size: 20px; ">
                                        <?php echo $row["TenLoaiSanPham"] ?></u></span></a>
                        </li>
                    </ul>
                <?php } ?>
            </div>