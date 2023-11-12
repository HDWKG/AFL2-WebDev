<x-frame>
    <x-slot:layout_image>
    </x-slot:layout_image>
    <x-slot:slot_about>
    </x-slot:slot_about>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <section class="shop" id="shop">
        <div class="heading">
            <h4 class="favorite-txt">Our <span>Favorite</span> Menu</h4>
        </div>
        <div class="shop-content favorited">
            @foreach ($products as $product)
                @if ($product->IsLiked == 1)
                    <div class="row product-item">
                        @if ($product['image'] != null)
                            <img src="{{ $product['image'] }}">
                        @else
                            <img src="https://storage.googleapis.com/proudcity/mebanenc/uploads/2021/03/placeholder-image.png"
                                alt="Placeholder Image">
                        @endif
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->desc }}</p>
                        <div class="intext">
                            <div class="price">
                                <h6>{{ $product->price }}</h6>
                            </div>
                            <div class="s-btnn">
                                <a href="{{ route('viewProduct', ['id' => $product->id]) }}">Order Now</a>
                            </div>
                        </div>
                        <div class="top-icon">
                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </section>
    <section class="filter" id="filter">
        <div class="heading">
            <h4 class="favorite-txt">Our <span>Menus</span></h4>
        </div>
        <div class="filter-wrapper">
            <button class="scroll-button left"><i class="fa-solid fa-arrow-left"></i></button>
            <div class="filter-menu">
                <button class="filter-button active" data-filter="all">
                    <div class="filter-card">
                        <div class="filter-icon">
                            <i class="fa-solid fa-utensils"></i>
                        </div>
                        <p>All</p>
                    </div>
                </button>
                <button class="filter-button" data-filter="1">
                    <div class="filter-card">
                        <div class="filter-icon">
                            <i class="fa-solid fa-burger"></i>
                        </div>
                        <p>Burgers</p>
                    </div>
                </button>
                <button class="filter-button" data-filter="2">
                    <div class="filter-card">
                        <div class="filter-icon">
                            <i class="fa-solid fa-ice-cream"></i>
                        </div>
                        <p>Ice Creams</p>
                    </div>
                </button>
                <button class="filter-button" data-filter="3">
                    <div class="filter-card">
                        <div class="filter-icon">
                            <i class="fa-solid fa-pizza-slice"></i>
                        </div>
                        <p>Pizzas</p>
                    </div>
                </button>
                <button class="filter-button" data-filter="4">
                    <div class="filter-card">
                        <div class="filter-icon">
                            <i class="fa-solid fa-cookie"></i>
                        </div>
                        <p>Cookies</p>
                    </div>
                </button>
                <button class="filter-button" data-filter="5">
                    <div class="filter-card">
                        <div class="filter-icon">
                            <i class="fa-solid fa-birthday-cake"></i>
                        </div>
                        <p>Cakes</p>
                    </div>
                </button>
                <button class="filter-button" data-filter="6">
                    <div class="filter-card">
                        <div class="filter-icon">
                            <i class="fa-solid fa-wine-bottle"></i>
                        </div>
                        <p>Drinks</p>
                    </div>
                </button>
            </div>
            <button class="scroll-button right"><i class="fa-solid fa-arrow-right"></i></button>
        </div>

        <section class="shop" id="shop">
            <div class="shop-content">
                @foreach ($products as $product)
                    <div class="row product-item menu-item" data-filter="{{ $product->category_id }}">
                        @if ($product['image'] != null)
                        <img src="{{ $product['image'] }}">
                    @else
                        <img src="https://storage.googleapis.com/proudcity/mebanenc/uploads/2021/03/placeholder-image.png"
                            alt="Placeholder Image">
                    @endif
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->desc }}</p>
                        <div class="intext">
                            <div class="price">
                                <h6>{{ $product->price }}</h6>
                            </div>
                            <div class="s-btnn">
                                <a href="{{ route('viewProduct', ['id' => $product->id]) }}">Order Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </section>
    <script defrer src="{{ asset('js/menu.js') }}"></script>
</x-frame>
{{-- FOR BLOB FILE --}}
{{-- @if ($product->image)
                            <?php
                            $base64Image = base64_encode($product->image);
                            $mimeType = mime_content_type('data://text/plain;base64,' . $base64Image);
                            $dataUri = "data:$mimeType;base64,$base64Image";
                            ?>
                            <img src="{{ $dataUri }}" alt="">
                        @else
                            <img src="https://storage.googleapis.com/proudcity/mebanenc/uploads/2021/03/placeholder-image.png"
                                alt="Placeholder Image">
                        @endif --}}
{{-- FOR BLOB FILE --}}
