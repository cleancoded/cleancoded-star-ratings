<div class="cleancoded-stars-inactive">
    <?php for ($i = 1; $i <= $best; $i++) : ?>
        <div class="cleancoded-star" data-star="<?= $i ?>">
            <?= \cleancoded\StarRating\view('inactive-star') ?>
        </div>
    <?php endfor; ?>
</div>
