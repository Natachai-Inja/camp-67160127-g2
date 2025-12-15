@extends('template.default')

@section('content')
    <h1>Multiply table</h1>
    <ul>
        <?php for($i=1;$i<=12;$i++) {?>
            <li>{{ $mynum }} x {{ $i }} = {{ $mynum * $i }}</li>
        <?php } ?>
    </ul>
@endsection
