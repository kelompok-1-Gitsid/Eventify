<x-user-layout>
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if (session('failed'))
        <div class="bg-red-500 text-white p-4 mb-4 rounded">
            {{ session('failed') }}
        </div>
    @endif
    <div class="py-8 px-4 mx-auto mt-24 max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16 title">
            <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">History Order</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6 lg:mb-16 mx-auto">
            @foreach ($orders as $order)
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex">
                <img class="w-full lg:w-72 rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                <div class="p-6 ">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 rounded-lg md:rounded-l-lg">{{ $order->product->name }}</h3>
                    <span class="text-gray-500">Rp. {{ $order->price }}</span>
                    <div class="flex flex-col py-2">
                        <div class="w-full text-md my-2">
                            <p>Start from :</p>
                            <span >{{ \Carbon\Carbon::parse($order->start_date)->locale('id')->formatLocalized('%A, %d %B %Y') }}</span>
                        </div>
                        <div class="w-full text-md my-2">
                            <p>Until :</p>
                            <span>{{ \Carbon\Carbon::parse($order->end_date)->locale('id')->formatLocalized('%A, %d %B %Y') }}</span>
                        </div>
                    </div>
                    <div class="flex flex-row text-sm">
                        <p>Status :</p>
                        <p>{{$order->status}}</p>
                    </div>
                    <div class="flex justify-center">
                        <button class="w-full py-2 mt-2 rounded-md text-white bg-blue-500 pay-button" data-token="{{ $order->response_midtrans }}">
                            Pay!
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-user-layout>
