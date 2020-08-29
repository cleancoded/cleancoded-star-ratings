<div class="cleancoded-legend">
    <?php if ($count) : ?>
        <strong class="cleancoded-score"><?= $score ?></strong>
        <span class="cleancoded-muted">/</span>
        <strong><?= $best ?></strong>
        <span class="cleancoded-muted">(</span>
        <strong class="cleancoded-count"><?= $count ?></strong>
        <span class="cleancoded-muted">
            <?= _n('vote', 'votes', $count, 'cleancoded-star-ratings') ?>
        </span>
        <span class="cleancoded-muted">)</span>
    <?php else : ?>
        <span class="cleancoded-muted"><?= $greet ?></span>
    <?php endif; ?>
</div>
