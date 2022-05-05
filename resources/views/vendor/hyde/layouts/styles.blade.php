{{-- Load scripts from local HydeFront repo: --}}
{{-- <link rel="stylesheet" href="{{ Hyde::relativeLink('../../dist/hyde.css', $currentPage) }}"> --}}
{{-- Load latest styles from CDN --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/hydephp/hydefront@master/dist/hyde.css">

{{-- The compiled Tailwind/App styles --}}
@if(Hyde::assetManager()->hasMediaFile('app.css'))
<link rel="stylesheet" href="{{ Hyde::relativeLink('media/app.css', $currentPage) }}">
@endif
