<?php
    if (! defined('ABSPATH')) {
        http_response_code(404);
        die();
    }
?>

<div style="display: flex;">
    <!-- Github -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <div style="float: left; margin-right: 5px;">
        <a class="github-button"
            href="https://github.com/cleancoded/cleancoded-star-ratings"
            data-icon="octicon-star"
            data-show-count="true"
            data-size="large"
            aria-label="Star cleancoded/cleancoded-star-ratings on GitHub">
            Cleancoded Star Ratings
        </a>
    </div>

    <!-- Twitter -->
    <script>
        window.twttr = (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0], t = window.twttr || {};

            if (d.getElementById(id)) return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function(f) {
                t._e.push(f);
            };

            return t;
        }(document, "script", "twitter-wjs"));
    </script>

    <div style="float: left; margin-right: 5px;">
        <a class="twitter-share-button"
            data-size="large"
            data-text="Cleancoded Star Ratings is awesome."
            data-url="https://github.com/cleancoded/cleancoded-star-ratings"
            href="https://twitter.com/intent/tweet">
            Tweet
        </a>
    </div>

    <!-- Facebook -->

    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div id="fb-root" style="float: left; margin-right: 5px;"></div>

    <div class="fb-like"
        data-href="https://github.com/cleancoded/cleancoded-star-ratings"
        data-width="167"
        data-layout="button_count"
        data-action="like"
        data-size="large"
        data-show-faces="true"
        data-share="true">
    </div>
</div>
