<!-- resources/views/product/detail.blade.php -->
<x-user-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-6xl my-32 px-2">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8">
                <!-- Product Image -->
                <div id="gallery" class="relative w-[80vh]" data-carousel="slide">
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset($product->image1) }}" alt="Ini Image 1"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="{{ asset($product->image2) }}" alt="Ini Image 2"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset($product->image3) }}" alt="Ini Image 3"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset($product->image4) }}" alt="Ini Image 4"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset($product->image5) }}" alt="Ini Image 5"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                    </div>
                    {{-- Slide --}}
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

                <!-- Product Details -->
                <div class="title">
                    <h1 class="text-4xl">{{ $product->name }}</h1>
                    <p class="text-gray-600 text-sm mt-2">{{ $product->description }}</p>
                    <p class="text-xl font-bold mt-4">Rp.{{ $product->price }}</p>
                    <!-- Buttons -->
                    <div class="flex gap-4 mt-8 w-full">
                        <!-- Order Button -->
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300"
                            data-target="#myModal">
                            Order Now
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div id="myModal" class="fixed inset-0 overflow-hidden z-50 hidden">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center">
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <div
                    class="relative z-50 inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <!-- Modal Content -->
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <form id="orderForm" action="{{ route('order.product') }}" method="POST">
                            @csrf
                            <!-- Menambahkan input hidden untuk menyimpan product_id -->
                            <input type="hidden" name="product_id" value="{{ $product->id }}">

                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        Order Form
                                    </h3>
                                    <div class="mt-2">
                                        <!-- Nama Product -->
                                        <label for="productName" class="block text-sm font-medium text-gray-700">Nama
                                            Product</label>
                                        <input type="text" id="productName" name="productName"
                                            class="mt-1 p-2 w-full border border-gray-300 rounded-md"
                                            value="{{ $product->name }}" readonly>

                                        <!-- Harga Product -->
                                        <label for="productPrice"
                                            class="block text-sm font-medium text-gray-700 mt-4">Harga Product</label>
                                        <input type="number" id="productPrice" name="productPrice"
                                            class="mt-1 p-2 w-full border border-gray-300 rounded-md"
                                            value="{{ $product->price }}" readonly>

                                        <!-- Waktu Mulai -->
                                        <label for="startTime"
                                            class="block text-sm font-medium text-gray-700 mt-4">Waktu Mulai</label>
                                        <input type="date" id="startTime" name="start_date"
                                            class="mt-1 p-2 w-full border border-gray-300 rounded-md"
                                            onchange="validateDatesAndCalculateTotal()">

                                        <!-- Waktu Berakhir -->
                                        <label for="endTime"
                                            class="block text-sm font-medium text-gray-700 mt-4">Waktu Berakhir</label>
                                        <input type="date" id="endTime" name="end_date"
                                            class="mt-1 p-2 w-full border border-gray-300 rounded-md"
                                            onchange="validateDatesAndCalculateTotal()">

                                        <!-- Total Harga -->
                                        <label for="totalPrice"
                                            class="block text-sm font-medium text-gray-700 mt-4">Total Harga</label>
                                        <input type="text" id="totalPrice" name="price"
                                            class="mt-1 p-2 w-full border border-gray-300 rounded-md" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Modal Buttons -->
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-2 ">
                        <button id="closeModalButton" type="button"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 transition">
                            Close
                        </button>
                        <button id="orderButton" type="submit"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-500 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 transition ml-3">
                            Order
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Script to handle modal behavior, validate dates, and submit order -->
        <script>
            const openModalButtons = document.querySelectorAll('[data-target]');
            const closeModalButton = document.getElementById('closeModalButton');
            const modal = document.getElementById('myModal');
            const orderForm = document.getElementById('orderForm');
            const orderButton = document.getElementById('orderButton');

            openModalButtons.forEach(button => {
                button.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                });
            });

            closeModalButton.addEventListener('click', () => {
                modal.classList.add('hidden');
            });

            orderButton.addEventListener('click', () => {
                orderForm.submit();
            });

            function validateDatesAndCalculateTotal() {
                const startTimeInput = orderForm.elements.startTime;
                const endTimeInput = orderForm.elements.endTime;
                const price = parseFloat(orderForm.elements.productPrice.value);

                // Validate if both start and end times are provided and endTime is not less than startTime
                if (startTimeInput.value && endTimeInput.value && endTimeInput.value >= startTimeInput.value && !isNaN(price)) {
                    // Validate if endTime is not before today
                    const today = new Date().toISOString().split('T')[0];
                    if (endTimeInput.value >= today) {
                        // Calculate days difference, add 1 to include the start day
                        const daysDifference = Math.ceil((new Date(endTimeInput.value) - new Date(startTimeInput.value)) / (
                            1000 * 60 * 60 * 24)) + 1;
                        const total = daysDifference * price;

                        orderForm.elements.totalPrice.value = total.toFixed(2);
                    } else {
                        // Reset endTime and show error (you can customize this part)
                        endTimeInput.value = '';
                        alert('Tanggal berakhir tidak boleh sebelum hari ini.');
                    }
                } else {
                    // Show error (you can customize this part)
                    alert(
                    'Pastikan Anda mengisi waktu mulai terlebih dahulu dan waktu berakhir tidak kurang dari waktu mulai.');
                }
            }
        </script>

</x-user-layout>
