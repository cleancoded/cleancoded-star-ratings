<?php if ($gap !== false) : ?>
    .cleancoded-star-ratings .cleancoded-stars .cleancoded-star {
        margin-right: <?= $gap ?>px;
    }
    [dir="rtl"] .cleancoded-star-ratings .cleancoded-stars .cleancoded-star {
        margin-left: <?= $gap ?>px;
        margin-right: 0;
    }
<?php endif; ?>

<?php if ($stars['inactive']) : ?>
    .cleancoded-star-ratings .cleancoded-stars .cleancoded-star .cleancoded-icon,
    .cleancoded-star-ratings:not(.cleancoded-disabled) .cleancoded-stars .cleancoded-star:hover ~ .cleancoded-star .cleancoded-icon {
        background-image: url("<?= $stars['inactive'] ?>");
    }
<?php endif; ?>

<?php if ($stars['active']) : ?>
    .cleancoded-star-ratings .cleancoded-stars .cleancoded-stars-active .cleancoded-star .cleancoded-icon {
        background-image: url("<?= $stars['active'] ?>");
    }
<?php endif; ?>

<?php if ($stars['selected']) : ?>
    .cleancoded-star-ratings.cleancoded-disabled .cleancoded-stars .cleancoded-stars-active .cleancoded-star .cleancoded-icon,
    .cleancoded-star-ratings:not(.cleancoded-disabled) .cleancoded-stars:hover .cleancoded-star .cleancoded-icon {
        background-image: url("<?= $stars['selected'] ?>");
    }
<?php endif; ?>