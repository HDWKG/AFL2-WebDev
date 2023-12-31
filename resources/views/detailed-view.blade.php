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
                    @if ($product['image'] != null)
                        <img src="{{ $product['image'] }}">
                    @else
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
            </div>
            <div class="favorite text-center">
                <h3>Our <span>Other</span> Products</h3>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <a href="{{ route('viewProduct', ['id' => $product1->id]) }}" class="col">
                        <div class="card h-100">
                            @if ($product1['image'] != null)
                                <img src="{{ $product1['image'] }}">
                            @else
                                <img src="https://storage.googleapis.com/proudcity/mebanenc/uploads/2021/03/placeholder-image.png"
                                    alt="Placeholder Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $product1->name }}</h5>
                                <p class="card-text">{{ $product1->desc }}</p>
                                <p class="card-price">{{ $product1->price }}</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('viewProduct', ['id' => $product2->id]) }}" class="col">
                        <div class="card h-100">
                            @if ($product2['image'] != null)
                                <img src="{{ $product2['image'] }}">
                            @else
                                <img src="https://storage.googleapis.com/proudcity/mebanenc/uploads/2021/03/placeholder-image.png"
                                    alt="Placeholder Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $product2->name }}</h5>
                                <p class="card-text">{{ $product2->desc }}</p>
                                <p class="card-price">{{ $product2->price }}</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('viewProduct', ['id' => $product3->id]) }}" class="col">
                        <div class="card h-100">
                            @if ($product3['image'] != null)
                                <img src="{{ $product3['image'] }}">
                            @else
                                <img src="https://storage.googleapis.com/proudcity/mebanenc/uploads/2021/03/placeholder-image.png"
                                    alt="Placeholder Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $product3->name }}</h5>
                                <p class="card-text">{{ $product3->desc }}</p>
                                <p class="card-price">{{ $product3->price }}</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('viewProduct', ['id' => $product4->id]) }}" class="col">
                        <div class="card h-100">
                            @if ($product4['image'] != null)
                                <img src="{{ $product4['image'] }}">
                            @else
                                <img src="https://storage.googleapis.com/proudcity/mebanenc/uploads/2021/03/placeholder-image.png"
                                    alt="Placeholder Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $product4->name }}</h5>
                                <p class="card-text">{{ $product4->desc }}</p>
                                <p class="card-price">{{ $product4->price }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="reviews">
                <div class="title-div">
                    <h3 class="title">Our <span>Customer</span> Reviews</h3>
                </div>
                <div class="row">
                    @foreach ($reviews as $review)
                        @if ($review->directed == $product->name)
                            <div class="col-md-6">
                                <div class="review-card">
                                    <div class="review-header">
                                        <div class="reviewer-name">{{ $review['name'] }}</div>
                                        <div class="review-rating">
                                            @for ($i = 0; $i < $review['stars']; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor

                                            @for ($i = $review['stars']; $i < 5; $i++)
                                                <i class="fa fa-star fa-regular"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p>{{ $review['review'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="review-form">
                    <div class="title-div">
                        <h3 class="title">Give <span>Your</span> Feedback</h3>
                    </div>
                    <form action="post">
                        <div class="form-group">
                            <div class="rating">
                                <input type="number" name="rating" hidden>
                                <i class="fa-regular fa-star star" style="--i: 0;"></i>
                                <i class="fa-regular fa-star star" style="--i: 1;"></i>
                                <i class="fa-regular fa-star star" style="--i: 2;"></i>
                                <i class="fa-regular fa-star star" style="--i: 3;"></i>
                                <i class="fa-regular fa-star star" style="--i: 4;"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="review-content" cols="30" rows="5" placeholder="Your Feedback..."></textarea>
                        </div>
                        <div class="btn-box">
                            <button type="submit" class="btn btn-primary btn-orange">Submit Review</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            const allStar = document.querySelectorAll('.rating .star');
            const ratingValue = document.querySelectorAll('.rating input')
            allStar.forEach((item, idx) => {
                item.addEventListener('click', function() {
                    let click = 0;
                    ratingValue.value = idx + 1
                    allStar.forEach(i => {
                        i.classList.replace('fa-solid', 'fa-regular');
                        i.classList.remove('active');
                    });

                    for (let i = 0; i < allStar.length; i++) {
                        if (i <= idx) {
                            allStar[i].classList.replace('fa-regular', 'fa-solid');
                            allStar[i].classList.add('active');
                        } else {
                            allStar[i].style.setProperty('--i', click);
                            click++;
                        }
                    }
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXKrwra6b8q9" crossorigin="anonymous"></script>
</x-frame>
