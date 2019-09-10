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

            <a href="<?=$item['href']?>" class="card__details-link">
                Benefits
            </a>
            
            <?php if (isset($item['type'])) : ?>
                <?php if ($item['type'] !== "page") : ?>
                    <a href="<?=$item['href']?>" class="card__button">buy</a>
                <?php endif; ?>
            <?php else: ?>
                <a href="<?=$item['href']?>" class="card__button">buy</a>
            <?php endif; ?>

            <div class="card__progress" style="width: <?=$item['progress']?>%"></div>
        </div>
    </div>
</div>