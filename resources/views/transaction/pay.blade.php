<x-user-layout>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 mt-20">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">History Order</h1>
            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                @foreach ($orders as $order)
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex">
                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                <div class="p-6 ">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 rounded-lg md:rounded-l-lg">{{ $order->product->name }}</h3>
                    <span class="text-gray-500">Rp. {{ $order->price }}</span>
                    <div class="flex flex-col py-2">
                        <div class="text-md w-52">
                            <p>Start from :</p>
                            <span >{{ \Carbon\Carbon::parse($order->start_date)->locale('id')->formatLocalized('%A, %d %B %Y') }}</span>
                        </div>
                        <div class="text-md w-52">
                            <p>Until :</p>
                            <span>{{ \Carbon\Carbon::parse($order->end_date)->locale('id')->formatLocalized('%A, %d %B %Y') }}</span>
                        </div>
                    </div>
                    <div class="flex flex-row text-sm">
                        <p>Status :</p>
                        <p class="ms-1">{{$order->status}}</p>
                    </div>
                    <div class="flex flex-row justify-center">
                        <button class="w-full py-2 mt-2 rounded-md text-white bg-blue-500 pay-button" data-token="{{ $order->response_midtrans }}">
                            Pay!
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-user-layout>
