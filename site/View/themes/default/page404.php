<?php $this->theme->header();?>

<?php 
  $data['ctx'] = $this;
  $this->theme->block('header-block', $data);
?>

<div class="page404 block">
  <div class="container">
    <div class="page404__content">

      <div class="page404__img-wrap">
        <img class="page404__img" src="<?=Asset::getUrl();?>img/page404.png">
      </div>

      <p class="page404__p page404__p--text-center">
        <a href="/" class="page404__goBackButton">Go to main page</a>
      </p>

      <p>We can not show the page your are asking for.</p>

      <p>But...</p>

      <p>See. Here is some news about us:</p>

      <ul>
        <li>
          <a href="https://coin.fyi/news/tezos/flat-animals-lottery-want-to-build-a-transparent-platform-using-tezos-d0tmpg">https://coin.fyi/news/tezos/flat-animals-lottery-want-to-build-a-transparent-platform-using-tezos-d0tmpg</a>
        </li>
        <li>
          <a href="https://www.reddit.com/r/tezos/comments/d0tmpg/flat_animals_lottery_want_to_build_a_transparent/">https://www.reddit.com/r/tezos/comments/d0tmpg/flat_animals_lottery_want_to_build_a_transparent/</a>
        </li>
      </ul>

    </div>
  </div>
</div>


<?php $this->theme->footer();?>
