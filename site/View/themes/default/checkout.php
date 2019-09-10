<?php $this->theme->header();?>

<?php 
  $data['ctx'] = $this;
  $this->theme->block('header-block', $data);
?>

<div class="checkout">
    <div class="container">
    <div class="checkout__header">
        <h2>
            Checkout
        </h2>
    </div>
        <div class="checkout__content">

            <ul>
                <li>
                    <p>Lottery: <a href="/lotteries/9">Our Transparent Lottery #1</a></p>
                </li>
                <li>
                    <p>Count of lots: 1</p>
                </li>
                <li>
                    <p>Cost of lot: 20 UAH</p>
                </li>
                <li>
                    <p>Total: 20 UAH</p>
                </li>
            </ul>

            <div class="checkout__pay-button-wrap">
                <a class="checkout__pay-button" href="/payed">Pay</a>
            </div>

        </div>
    </div>
</div>




<?php $this->theme->footer();?>
