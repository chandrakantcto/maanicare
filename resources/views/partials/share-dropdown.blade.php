@php
    $shareUrl = $shareUrl ?? url()->current();
    $shareTitle = $shareTitle ?? '';
    $shareImage = $shareImage ?? '';
    $encodedUrl = rawurlencode($shareUrl);
    $encodedTitle = rawurlencode($shareTitle);
    $encodedText = rawurlencode($shareTitle . ' ' . $shareUrl);
@endphp
<div class="share-wrap">
    <span class="share-trigger js-share-trigger" role="button" tabindex="0" aria-haspopup="true" aria-expanded="false" title="Share">
        <img src="{{ asset('storage/assets/web/img/ios_share.svg') }}" alt="" /> SHARE
    </span>
    <div class="share-dropdown js-share-dropdown" role="menu" aria-label="Share on social media">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $encodedUrl }}" target="_blank" rel="noopener noreferrer" class="share-link" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/intent/tweet?url={{ $encodedUrl }}&text={{ $encodedTitle }}" target="_blank" rel="noopener noreferrer" class="share-link" title="Share on X (Twitter)"><i class="fab fa-x-twitter"></i></a>
        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $encodedUrl }}" target="_blank" rel="noopener noreferrer" class="share-link" title="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://wa.me/?text={{ $encodedText }}" target="_blank" rel="noopener noreferrer" class="share-link" title="Share on WhatsApp"><i class="fab fa-whatsapp"></i></a>
    </div>
</div>
<style>
.share-wrap { position: relative; display: inline-block; }
.share-dropdown { display: none; position: absolute; left: 0; top: 100%; margin-top: 6px; background: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); z-index: 1000; padding: 8px; flex-direction: row; gap: 4px; align-items: center; }
.share-wrap.is-open .share-dropdown { display: flex; flex-direction: column; }
.share-dropdown .share-link { display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; color: #333; text-decoration: none; font-size: 18px; border-radius: 6px; }
.share-dropdown .share-link:hover { background: #f0f0f0; }
.share-dropdown .share-link .fab { font-size: 1.1em; }
.share-trigger { cursor: pointer; }
</style>
<script>
(function() {
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.js-share-trigger').forEach(function(trigger) {
            var wrap = trigger.closest('.share-wrap');
            var dropdown = wrap ? wrap.querySelector('.js-share-dropdown') : null;
            if (!dropdown) return;
            function open() { wrap.classList.add('is-open'); trigger.setAttribute('aria-expanded', 'true'); }
            function close() { wrap.classList.remove('is-open'); trigger.setAttribute('aria-expanded', 'false'); }
            function toggle() { wrap.classList.toggle('is-open'); var open = wrap.classList.contains('is-open'); trigger.setAttribute('aria-expanded', open); }
            trigger.addEventListener('click', function(e) { e.preventDefault(); e.stopPropagation(); toggle(); });
            document.addEventListener('click', function() { close(); });
            wrap.addEventListener('click', function(e) { e.stopPropagation(); });
        });
    });
})();
</script>
