<?php 
include_once './Components/Connection.php';
include_once './Components/Header.php';

?>

<section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">PRODUCTS</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
                
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">₺0</span>
            </div>
            <button class="btn btn-primary btn-order" type="button">ORDER</button>
        </section>


        <?php require_once './Components/Footer.php'; ?>