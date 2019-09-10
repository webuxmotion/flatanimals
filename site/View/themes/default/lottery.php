<?php $this->theme->header();?>

<?php 
  $data['ctx'] = $this;
  $this->theme->block('header-block', $data);
?>

<div class="lottery block">
  <div class="container">
    <div class="lottery__header">
      <h1>One Lottery Page</h1>
    </div>
    <div class="lottery__content">

      <div class="lottery__column lottery__column--left">

        <?php
            $item = [
              "type" => "page",
              "id" => 2,
              "name" => 'Vlad',
              "provider" => 'Closet Of Choices',
              "color" => '#f6a851',
              "icon" => getIcon('bird'),
              "title" => "89/1000",
              "progress" => "10",
              "href" => "/lotteries/9"
            ];

            $data['item'] = $item;
            $this->theme->block('card', $data);
        ?>

      </div>

      <div class="lottery__column" style="padding-left: 40px;">

            <h2 class="lottery__subheader">Overview</h2>

            <ul style="margin: 0; padding: 0;">
              <li class="lottery__descItem">
                <p class="lottery__descTitle">Title:</p>
                <p class="lottery__descContent">Our Transparent Lottery #1</p> 
              </li>
              <li class="lottery__descItem">
                <p class="lottery__descTitle">Goal:</p>
                <p class="lottery__descContent">1000 participants</p> 
              </li>
              <li class="lottery__descItem">
                <p class="lottery__descTitle">Available lots:</p>
                <p class="lottery__descContent">89</p> 
              </li>
              <li class="lottery__descItem">
                <p class="lottery__descTitle">Lot price:</p>
                <p class="lottery__descContent">20 UAH</p> 
              </li>
              <li>

                <div class="lottery__counter">
                  <div class="lottery__counterCell">
                    <div class="lottery__counterButton">
                      -
                    </div>
                  </div>
                  <div class="lottery__counterCell">
                    <div class="lottery__counterCount">
                      1
                    </div>
                  </div>
                  <div class="lottery__counterCell">
                    <div class="lottery__counterButton">
                      +
                    </div>
                  </div>
                </div>

              </li>

              <li class="lottery__descItem" style="padding-top: 20px;">
                <p class="lottery__descTitle">Total price:</p>
                <p class="lottery__descContent" style="font-size: 24px;">20 UAH</p> 
              </li>

              <li>
                <a class="lottery__checkoutButton" href="/checkout">Checkout</a> 
              </li>
            </ul>

            <h2 class="lottery__subheader" style="margin-top: 40px; padding: 0;">Prices and benefits</h2>

            <ul class="lottery__benefits" style="margin-top: 20px; padding: 0;">

              <li>
                <p class="lottery__benefitsParagraph"><b>1st PLACE:</b> 16000 UAH</p>
              </li>

              <li>
                <p class="lottery__benefitsParagraph"><b>2nd PLACE:</b> 1 Month Sports Abonement</p>
              </li>

              <li>
                <p class="lottery__benefitsParagraph"><b>3rd PLACE:</b> 50% Discount for 1 Month Sports Abonement</p>
              </li>

            </ul>

            

      </div>

    </div>
  </div>
</div>





<?php $this->theme->footer();?>
