<div style="display: none;"
    class="cleancoded-star-ratings <?= $valign ? ("cleancoded-valign-{$valign}") : '' ?> <?= $align ? ("cleancoded-align-{$align}") : '' ?> <?= $disabled ? 'cleancoded-disabled' : '' ?>"
    data-id="<?= $id ?>"
    data-slug="<?= $slug ?>">
    <?= \cleancoded\StarRating\view('stars') ?>
    <?= \cleancoded\StarRating\view('legend') ?>
</div>
