@extends('template.default')

@section('content')

    <h1>This is my view2</h1>
    <!-- <input type="text" id="myinput" value="input text value"> -->

    <!-- <button onclick="myfunc()">
        check
    </button>

    <button onclick="myfunc3()">
        check
    </button> -->

    <?php 
        $myphp = "WOW PHP";
        $myarry = [1,2,3,4];
    ?>
    <h1><?php echo "Hello World"; ?></h1>
    <h2><?php echo $myphp; ?></h2>



@endsection

@push('scripts')

    <script>

        myVar = 1;
        console.log(myVar)

    </script>

    <script>

        let myVar2;
        myVar2 = "hello"
        console.log(myVar, myVar2)

    </script>

    <script>

        console.log(document.getElementById('myinput').value)

    </script>

    <script>

        function myfunc() {
            console.log(document.getElementById('myinput').value)
            console.log('myfunc called')
        }
        let mufunc2 = function(){
            console.log('myfunc2 called')
        }

        myfunc3 = () => console.log('myfunc3 called')

        function myfunc4(callback) {
            console.log('myfunc4 called')
            callback()
        }

        myfunc4(myfunc3)

    </script>

@endpush