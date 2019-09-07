<div class="cards block">
    <div class="container">
        <div class="cards__items">
            
            <?php foreach($cards as $item) : ?>
                <div class="cards__one-item">
                    
                    <div class="card" style="background-color: <?=isset($item['color']) ? $item['color'] : "gray" ?>">
                        <div class="card__inner">
                            <div class="card__content">

                                <div class="card__provider">
                                    <?=$item['provider']?>
                                </div>

                                <div class="card__icon">
                                    <?=$item['icon']?>
                                </div>

                                <div class="card__title">
                                    <?=$item['title']?>
                                </div>

                                <div class="card__price">
                                    20 UAH
                                </div>

                                <a href="/" class="card__details-link">
                                    Benefits
                                </a>

                                <a href="/" class="card__button">buy</a>

                                <div class="card__progress" style="width: <?=$item['progress']?>%"></div>
                            </div>
                        </div>
                    </div>

                </div>
                
            <?php endforeach; ?>

        </div>
    </div>
</div>