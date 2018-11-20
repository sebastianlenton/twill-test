<head>

    <?php
        //die(base_path() . 'public');
    ?>

    <link rel="stylesheet" href="{{ mix('css/app.css', 'frontend') }}">
    
    @if(isset($exception) && $exception->getStatusCode() == 404)

        <title>
            {{ $company_name }} - 404
        </title>

    @else

        {{-- TODO I don't understand why sometimes $item is in an array, sometimes not... maybe I'm being amazingly thick! Need to make more consistent --}}

        @if(isset($item[0]))

            @php
                $item = $item[0];
            @endphp

        @endif

        <title>
            {{ $company_name }} - {{ $item->title }}
        </title>

        <meta name="description" content="{{ $item->seo_meta_description }}">

    @endif

</head>