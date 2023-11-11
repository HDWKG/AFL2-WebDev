<x-frame>
    <x-slot:layout_image>
    </x-slot:layout_image>
    <x-slot:slot_about>
    </x-slot:slot_about>
    <x-slot:title>
        {{ $product->name }} Details
    </x-slot:title>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxK7p170u6Pf6u6Z5IrTrh4veITz4Tkw9XAn5JR4wW9GUVHTv" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="detail">
                <div class="image">
                    @if ($product->image)
                        <?php
                        $base64Image = base64_encode($product->image);
                        $mimeType = mime_content_type('data://text/plain;base64,' . $base64Image);
                        $dataUri = "data:$mimeType;base64,$base64Image";
                        ?>
                        <img src="{{ $dataUri }}" alt="">
                    @else
                        {{-- <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8fDA%3D"
                            alt="Product Image" class="img-fluid"> --}}
                        <img src="https://storage.googleapis.com/proudcity/mebanenc/uploads/2021/03/placeholder-image.png"
                        alt="Placeholder Image">
                    @endif
                </div>
                <div class="content">
                    <h1 class="name">{{ $product['name'] }}</h1>
                    <div class="price">{{ $product['price'] }}</div>
                    <div class="buttons">
                        <button type="submit" class="btn btn-primary btn-orange">Add to Cart</button>
                    </div>
                    <div class="description">{{ $product['desc'] }}</div>
                </div>
                <h3 class="favorite-txt">Our <span>Best</span> Sellers</h3>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXKrwra6b8q9" crossorigin="anonymous"></script>
</x-frame>
