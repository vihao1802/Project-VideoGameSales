<?php
    include 'connect.php';
    $q = $_GET['q'];
    $loc = ($q-1)*12;
    $sql = "SELECT * 
    FROM product
    LIMIT $loc,12";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "
            <div class='item'>
            <a href='./productDetails.php?q='>
            <i class='fa-solid fa-cart-shopping'></i>
            <img src='".$row['pimg']."' alt='' />
            <div class='discount'>
                <span>-<label>".$row['pdis']."</label>%</span>
            </div>
            </a>
            <div class='product-information'>
            <div class='text-name'>".$row['pname']."</div>
            <div class='price'>
                <label class='price-number'>".$row['pid']."</label>
                <label class='price-dollar'>$</label>
            </div>
            </div>
        </div>
        ";
      }
    }
    $conn->close();
?>