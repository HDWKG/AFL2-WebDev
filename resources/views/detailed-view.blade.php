<x-frame>
    <x-slot:layout_image>
    </x-slot:layout_image>
    <x-slot:slot_about>
    </x-slot:slot_about>
    <x-slot:title>
        {{ $product->name }} Details
    </x-slot:title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxK7p170u6Pf6u6Z5IrTrh4veITz4Tkw9XAn5JR4wW9GUVHTv" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="mt-4 p-5 bg-primary text-white rounded">
                <h1>{{ $product['name'] }}</h1>
                @if ($product->image)
                    <?php
                    $base64Image = base64_encode($product->image);
                    $mimeType = mime_content_type('data://text/plain;base64,' . $base64Image);
                    $dataUri = "data:$mimeType;base64,$base64Image";
                    ?>
                    <img src="{{ $dataUri }}" alt="">
                @else
                    <img src="https://storage.googleapis.com/proudcity/mebanenc/uploads/2021/03/placeholder-image.png"
                        alt="Placeholder Image">
                @endif
                <p>{{ $product['desc'] }}</p>
                <p>{{ $product['price'] }}</p>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXKrwra6b8q9" crossorigin="anonymous"></script>
</x-frame>
