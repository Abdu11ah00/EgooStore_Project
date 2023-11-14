




    <?php $Random_AD = rand(1, 2); ?>



<?php

switch ($Random_AD) {
    case 1:
      echo "
      <div class=' alert alert-dark alert-dismissible fade show' role='alert'>
      <strong>30%</strong> discount with code 'KSA'
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      break;
    case 2:
      echo "
      <div class=' alert alert-dark alert-dismissible fade show' role='alert'>
      <strong>Secure Tour Digital Life:</strong> Use coupon code SECURE15 for 15% off on any <a href='#' class='alert-link'>antivirus software</a>. 
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      break;
    default:
      echo "";
  }
?>