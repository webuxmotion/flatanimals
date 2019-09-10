<div class="cards block">
    <div class="container">
        <div class="block__header">
            <h2>Lotteries List:</h2>
        </div>
        <div class="cards__items">
            
            <?php foreach($cards as $item) : ?>
                <div class="cards__one-item">
                    
                    <?php
                        $data['item'] = $item;
                        $ctx->theme->block('card', $data);
                    ?>

                </div>
                
            <?php endforeach; ?>

        </div>
    </div>
</div>