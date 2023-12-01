<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{env('MIDTRANS_CLIENT_KEY')}}"></script>
</head>

<body>
    @if(session('success'))
    <div class="bg-green-500 text-white p-4 mb-4 rounded">
        {{ session('success') }}
    </div>
@endif

@if(session('failed'))
    <div class="bg-red-500 text-white p-4 mb-4 rounded">
        {{ session('failed') }}
    </div>
@endif
    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Price</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->product->name }}</td>
                    <td>Rp. {{ $order->price }}</td>
                    <td>{{ $order->start_date }}</td>
                    <td>{{ $order->end_date }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <button class="pay-button" data-token="{{ $order->response_midtrans }}">
                            Pay!
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButtons = document.querySelectorAll('.pay-button');
        payButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var token = button.getAttribute('data-token');
                window.snap.pay(token);
                // customer will be redirected after completing payment pop-up
            });
        });
    </script>
</body>
</html>