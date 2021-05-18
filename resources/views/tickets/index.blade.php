<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crypto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>BTC List</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Volume</th>
            <th>priceChange</th>
            <th>lastPrice</th>
            <th>lastQty</th>
            <th>bidPrice</th>
            <th>bidQty</th>
            <th>openPrice</th>
            <th>highPrice</th>
            <th>lowPrice</th>

        </tr>
        </thead>
        <tbody>
        @if(count($tickets)>0)
            @foreach($tickets['BTCUSDT'] as $btc)

                <tr>
                    <td>{{$btc->volume}}</td>
                    <td>{{$btc->priceChange}}</td>
                    <td>{{$btc->lastPrice}}</td>
                    <td>{{$btc->lastQty}}</td>
                    <td>{{$btc->bidPrice}}</td>
                    <td>{{$btc->bidQty}}</td>
                    <td>{{$btc->openPrice}}</td>
                    <td>{{$btc->highPrice}}</td>
                    <td>{{$btc->lowPrice}}</td>

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <h2>ATOM List</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Volume</th>
            <th>priceChange</th>
            <th>lastPrice</th>
            <th>lastQty</th>
            <th>bidPrice</th>
            <th>bidQty</th>
            <th>openPrice</th>
            <th>highPrice</th>
            <th>lowPrice</th>

        </tr>
        </thead>
        <tbody>
        @if(count($tickets)>0)
            @foreach($tickets['ATOMUSDT'] as $btc)

                <tr>
                    <td>{{$btc->volume}}</td>
                    <td>{{$btc->priceChange}}</td>
                    <td>{{$btc->lastPrice}}</td>
                    <td>{{$btc->lastQty}}</td>
                    <td>{{$btc->bidPrice}}</td>
                    <td>{{$btc->bidQty}}</td>
                    <td>{{$btc->openPrice}}</td>
                    <td>{{$btc->highPrice}}</td>
                    <td>{{$btc->lowPrice}}</td>

                </tr>
            @endforeach
        @endif

        </tbody>
    </table>
</div>

</body>
</html>

