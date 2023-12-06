<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            box-sizing: border-box;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: 10px;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        h2 {
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

    </style>
</head>
<body>

    <h2>Transactions Table</h2>

    <table>
        <tr>
            <th>Cutomer</th>
            <th>Vendor</th>
            <th>Order Date</th>
            <th>Payment Date</th>
            <th>Total</th>
        </tr>
        @foreach ( $transaction as $row )
        <tr>
            <td>{{ $row->user->name }}</td>
            <td>{{ $row->product->name }}</td>
            <td>
                {{ \Carbon\Carbon::parse($row->start_date)->locale('id')->formatLocalized('%A, %d %B %Y') }} - {{ \Carbon\Carbon::parse($row->end_date)->locale('id')->formatLocalized('%A, %d %B %Y') }}
            </td>
            <td>
                {{ $row->status == 'pending' ? '-' :  \Carbon\Carbon::parse($row->updated_at)->locale('id')->formatLocalized('%A, %d %B %Y %H:%M')  }}
            </td>
            <td>Rp {{ number_format($row->price, 0, ',', '.') }},00</td>
        </tr>
        @endforeach
    </table>
    <script type="text/javascript">
        window.print()

    </script>

</body>
</html>
