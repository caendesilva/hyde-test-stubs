{{-- The core HydeFront stylesheet --}}
{{-- <link rel="stylesheet" href="../../dist/hyde.css"> --}}
<link rel="stylesheet" href="{{ Hyde::relativeLink('../../dist/hyde.css', $currentPage) }}">


{{-- The compiled Tailwind/App styles --}}
@if(Hyde::assetManager()->hasMediaFile('app.css'))
<link rel="stylesheet" href="{{ Hyde::relativeLink('media/app.css', $currentPage) }}">
@endif
