<?php
/**
 * @var bool $enabled
 * @var string $id
 * @var string $domain
 */
?>
@if ($enabled)
    <!-- Google tag (gtag.js) -->
    <script async src="https://{{ $domain }}/gtag/js?id={{ $id }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '{{ $id }}');
    </script>
@endif
