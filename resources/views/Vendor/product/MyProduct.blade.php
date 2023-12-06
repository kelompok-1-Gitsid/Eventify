@extends('vendor.layouts.layouts')

@section('content')

<div class="flex justify-center items-center h-screen mt-5">
    <div class="w-full max-w-4xl my-24 px-8">

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">

            <div class="flex overflow-x-auto gap-4 text-center p-4">
                <img src="{{ asset($product->image1) }}" style="width: 15%; max-height: 200px; object-fit: cover;" class="rounded-lg inline-block m-2" alt="{{ $product->name }}">
                <img src="{{ asset($product->image2) }}" style="width: 15%; max-height: 200px; object-fit: cover;" class="rounded-lg inline-block m-2" alt="{{ $product->name }}">
                <img src="{{ asset($product->image3) }}" style="width: 15%; max-height: 200px; object-fit: cover;" class="rounded-lg inline-block m-2" alt="{{ $product->name }}">
                <img src="{{ asset($product->image4) }}" style="width: 15%; max-height: 200px; object-fit: cover;" class="rounded-lg inline-block m-2" alt="{{ $product->name }}">
                <img src="{{ asset($product->image5) }}" style="width: 15%; max-height: 200px; object-fit: cover;" class="rounded-lg inline-block m-2" alt="{{ $product->name }}">
            </div>


            <div class="p-4 text-center">
                <h1 class="text-4xl">{{ $product->name }}</h1>
                <p class="text-gray-600 text-base">{{ $product->description }}</p>
                <p class="text-2xl font-bold mt-4">Rp.{{ $product->price }}</p>

          <!-- Buttons -->
          <div class="flex items-center gap-4 mt-8 px-8">
            <!-- Edit Button -->
            <form action="{{ route('product.edit', $product->id) }}" method="GET">
                @csrf
                <button type="submit" style="background-color: #3490dc; color: #fff; padding: 8px 16px; border-radius: 8px; cursor: pointer;">
                    Edit
                </button>
            </form>

            <!-- Delete Button -->
            <form action="{{ route('product.destroys', $product->id) }}" method="POST">
                @csrf
                <!-- Metode DELETE -->
                @method('DELETE')
                <button type="submit" class="mt-1" style="background-color: #e3342f; color: #fff; padding: 8px 16px; border-radius: 8px; cursor: pointer;">
                    Delete
                </button>
            </form>
        </div>


            </div>
        </div>
        <!-- End Product Card -->
    </div>
</div>

@endsection
