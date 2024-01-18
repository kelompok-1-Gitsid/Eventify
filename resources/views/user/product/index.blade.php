<!-- resources/views/product.blade.php -->

<x-user-layout>
    @foreach($productsByCategory as $category => $products)
        <section id="{{ strtolower($category) }}">
            <div class="w-full my-24">
                <div class="ml-16 lg:ml-36">
                    <h1 class="title text-2xl">{{ $category }}</h1>
                    <h2 class="flex mt-2 text-lg text-slate-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                        </svg>
                        <span class="ml-2">Produk dalam kategori {{ $category }}</span>
                    </h2>
                </div>
                <div class="content-card mt-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        @foreach($products as $product)
                            <div class="card bg-white border border-gray-200 rounded-xl shadow">
                                <div class="p-6">
                                    <a href="{{ url('product/detail/'.$product->id) }}">
                                        <img class="rounded-t-lg w-full h-64 rounded-lg"
                                            src="{{ asset($product->image1) }}" alt="Ini adalah image" />
                                    </a>
                                </div>
                                <div class="p-5 -mt-6">
                                    <a href="{{ url('product/detail/'.$product->id) }}">
                                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">
                                            {{ $product->name }}
                                        </h5>
                                    </a>
                                    <p class="mb-3 font-normal text-sm text-gray-700 dark:text-gray-400">
                                        {{ $product->description }}
                                    </p>
                                    <div class="flex justify-between">
                                        <p class="flex items-center justify-center">Rp.{{ number_format($product->price, 0, ',', '.') }}</p>
                                        <a href="{{ url('product/detail/'.$product->name) }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Detail
                                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endforeach
</x-user-layout>
