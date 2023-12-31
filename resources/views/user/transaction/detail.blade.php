<!-- resources/views/transactions/show.blade.php -->

<x-user-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-4xl my-24 px-8">
            <div class="flex flex-col justify-center items-center gap-8">
                <!-- Transaction Details -->
                <div class="title text-center">
                    <h1 class="text-4xl">Transaction Details</h1>
                    <p class="text-gray-600 text-base">Transaction ID: </p>
                    <p class="text-2xl font-bold mt-4">Total Price: Rp.</p>
                    <p class="text-2xl font-bold mt-4">Status: </p>
                </div>

                <!-- Product Details -->
                <div class="title text-center">
                    <h1 class="text-4xl">{{ $product->name }}</h1>
                    <p class="text-gray-600 text-base">{{ $product->description }}</p>
                    <p class="text-2xl font-bold mt-4">Rp.{{ $product->price }}</p>
                </div>

                <!-- Payment Method -->
                <div class="title text-center">
                    <h1 class="text-4xl">Payment Method</h1>
                    <!-- Add your payment method details here -->
                </div>

                <!-- Buttons -->
                <div class="flex gap-4 mt-8 px-8">
                    <!-- Back Button -->
                    <a href="{{ url('/product') }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-user-layout>
