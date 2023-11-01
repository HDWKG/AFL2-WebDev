<x-frame>
    <x-slot:layout_image>
    </x-slot:layout_image>
    <x-slot:slot_about>
    </x-slot:slot_about>
    <x-slot:title>
        {{$product->name}} Details
    </x-slot:title>
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>{{ $product['name'] }}</h1>
        <p>{{ $product['desc'] }}</p>
        <p>{{ $product['price'] }}</p>
    </div>
</x-frame>
