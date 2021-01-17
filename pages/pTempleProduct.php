<div class="col-md-4 product-men">
    <div class="men-pro-item simpleCart_shelfItem">
        <div class="men-thumb-item">
            <img src="<?php $public ?>images/<?php echo $row['HinhURL'] ?>" alt="" style="width:180px; height:130px; margin-top:15px; ">
            <div class="men-cart-pro">
                <div class="inner-men-cart-pro">
                    
                    <a href="index.php?act=ProductDetail&id=<?php echo $row["MaSanPham"]?>" class="link-product-add-cart">Quick View</a>
                </div>
            </div>
            <span class="product-new-top">New</span>
            <!-- </div> -->
            <div class="item-info-product ">

                <h4><a href=""><?php echo $row['TenSanPham'] ?> </a></h4>
            </div>
            <div class="info-product-price">
                <span class="item_price"><?php echo $row['GiaSanPham'] ?> vnd </span>
            </div>
           
        </div>

    </div>
</div>