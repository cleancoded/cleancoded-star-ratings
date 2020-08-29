<div class="cleancoded-stars-active" style="width: <?= $width ?>px;">
    <?php for ($i = 1; $i <= $best; $i++) : ?>
        <div class="cleancoded-star">
            <?= \cleancoded\StarRating\view('active-star') ?>
        </div>
    <?php endfor; ?>
</div>
