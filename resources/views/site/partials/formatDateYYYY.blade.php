@if( !is_null( $date ) )

    <?php
        $date = \Carbon\Carbon::parse($date);
    ?>

    {{ date_format($date, 'Y') }}<br>

@endif