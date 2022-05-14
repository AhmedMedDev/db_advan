<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Serial_no</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">manufacturer</th>
                                            <th scope="col">price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Question_1 as $item)
                                            <tr>
                                                <th scope="row">{{$item->serial_no}}</th>
                                                <td>{{$item->model}}</td>
                                                <td>{{$item->manufacturer}}</td>
                                                <td>{{$item->price}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Collapsible Group Item #2
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Serial_no</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">manufacturer</th>
                                            <th scope="col">price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Question_2 as $item)
                                            <tr>
                                                <th scope="row">{{$item->serial_no}}</th>
                                                <td>{{$item->model}}</td>
                                                <td>{{$item->manufacturer}}</td>
                                                <td>{{$item->price}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Serial_no</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">manufacturer</th>
                                            <th scope="col">price</th>
                                            <th scope="col">new price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Question_3 as $item)
                                            <tr>
                                                <th scope="row">{{$item->serial_no}}</th>
                                                <td>{{$item->model}}</td>
                                                <td>{{$item->manufacturer}}</td>
                                                <td>{{$item->price}}</td>
                                                <td>{{$item->new_price}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- 4 --}}
                    <div class="card">
                        <div class="card-header" id="heading4">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Collapsible Group Item #4
                                </button>
                            </h5>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4"
                            data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Serial_no</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">manufacturer</th>
                                            <th scope="col">price</th>
                                            <th scope="col">option name</th>
                                            <th scope="col">option price</th>
                                            <th scope="col">total option price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Question_4 as $item)
                                            <tr>
                                                <th scope="row">{{$item->serial_no}}</th>
                                                <td>{{$item->model}}</td>
                                                <td>{{$item->manufacturer}}</td>
                                                <td>{{$item->price}}</td>
                                                <td>
                                                    @foreach ($item->options as $option)
                                                        {{$option->option_name}} 
                                                        @if (!$loop->last)
                                                            ||
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($item->options as $option)
                                                        {{$option->price}} 
                                                        @if (!$loop->last)
                                                            ||
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>{{$item->total_option}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading4">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Collapsible Group Item #5
                                </button>
                            </h5>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="heading5"
                            data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Serial_no</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">total option price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Question_5 as $item)
                                            <tr>
                                                <th scope="row">{{$item->serial_no}}</th>
                                                <td>{{$item->model}}</td>
                                                <td>{{$item->total_option}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading6">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    Collapsible Group Item #6
                                </button>
                            </h5>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="heading6"
                            data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">name</th>
                                            <th scope="col">phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Question_6 as $item)
                                            <tr>
                                                <th scope="row">{{$item->id}}</th>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->phone}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading7">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    Collapsible Group Item #7
                                </button>
                            </h5>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="heading7"
                            data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Question_7 as $item)
                                            <tr>
                                                <th scope="row">{{$item->id}}</th>
                                                <td>{{$item->name}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading7">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    Collapsible Group Item #8
                                </button>
                            </h5>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="heading8"
                            data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">modal</th>
                                            <th scope="col">price</th>
                                            <th scope="col">name</th>
                                            <th scope="col">date</th>
                                            <th scope="col">sale_price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Question_8 as $item)
                                            <tr>
                                                <th scope="row">{{$item->id}}</th>
                                                <td>{{$item->car->model}}</td>
                                                <td>{{$item->car->price}}</td>
                                                <td>{{$item->person->name}}</td>
                                                <td>{{$item->date}}</td>
                                                <td>{{$item->sale_price}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading9">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    Collapsible Group Item #9
                                </button>
                            </h5>
                        </div>
                        <div id="collapse9" class="collapse" aria-labelledby="heading9"
                            data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">name</th>
                                            <th scope="col">solds_num</th>
                                            <th scope="col">solds_prices</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Question_9 as $item)
                                            <tr>
                                                <th scope="row">{{$item->id}}</th>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->solds_num}}</td>
                                                <td>{{$item->solds_prices}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading10">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    Collapsible Group Item #10
                                </button>
                            </h5>
                        </div>
                        <div id="collapse10" class="collapse" aria-labelledby="heading10"
                            data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Serial_no</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">manufacturer</th>
                                            <th scope="col">price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Question_10 as $item)
                                            <tr>
                                                <th scope="row">{{$item->serial_no}}</th>
                                                <td>{{$item->model}}</td>
                                                <td>{{$item->manufacturer}}</td>
                                                <td>{{$item->price}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
