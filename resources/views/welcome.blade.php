<x-frame>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <x-slot:layout_image>
    </x-slot:layout_image>
    <x-slot:slot_about>
    </x-slot:slot_about>
    <section class="container">
        <div class="slider">
            <div class="list">
                <div class="item">
                    <img src="https://assets.biggreenegg.eu/app/uploads/2019/03/28145521/topimage-classic-hamburger-2019m04-800x534-600x401.jpg"
                        alt="">
                </div>
                <div class="item">
                    <img src="https://asset.kompas.com/crops/iLg1PRguXM692DZeqW4X3CDNvt8=/0x0:1000x667/1200x800/data/photo/2020/04/13/5e940a05bb389.jpg"
                        alt="">
                </div>
                <div class="item">
                    <img src="https://akcdn.detik.net.id/visual/2014/12/03/f445a8dc-be6c-48bb-abfc-58f6df3c56a6_169.jpg?w=650"
                        alt="">
                </div>
                <div class="item">
                    <img src="https://image.makewebeasy.net/makeweb/m_1920x0/rGAbosWut/DefaultData/AGS_0539_min.jpg"
                        alt="">
                </div>
                <div class="item">
                    <img src="https://www.bhg.com/thmb/ARwlwRFvxK4g-TYSKLiuDy3y8T4=/4000x0/filters:no_upscale():strip_icc()/bhg-recipe-cookies-food-processor-chocolate-chip-cookies-Hero-01-5b0c046d2a3d4328b52b28f2a5135c8b.jpg"
                        alt="">
                </div>
            </div>
            <div class="buttons">
                <button id="prev">
                    < <button id="next">>
                </button>
            </div>
            <ul class="dots">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </section>
    <section class="specialty" id="specialty">
        <h1 class="heading"> Our <span>Specialty</span></h1>
        <div class="box-container">
            @foreach ($categories as $category)
            <div class="box">
                <a href="/menu?category_id={{ $category->id }}" class="spec">
                    <img class="image"
                        src= {{ $category->coverimg }}
                        alt="">
                    <div class="content">
                        <img src={{ $category->logo }}
                            alt="">
                        <h3>{{ $category->name }}</h3>
                        <p>{{ $category->desc }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <section class="review" id="review">
        <h1 class="heading"> Our Customers <span>Reviews</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="https://www.wilsoncenter.org/sites/default/files/media/images/person/james-person-1.jpg"
                    alt="">
                <h3>John DOe</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, minima?</p>
            </div>
            <div class="box">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fHww"
                    alt="">
                <h3>Jane Smith</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, minima?</p>
            </div>
            <div class="box">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Pierre-Person.jpg" alt="">
                <h3>Daniel Fernando</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, minima?</p>
            </div>
        </div>
    </section>
    <script>
        let slider = document.querySelector('.slider .list');
        let items = document.querySelectorAll('.slider .list .item');
        let next = document.getElementById('next');
        let prev = document.getElementById('prev');
        let dots = document.querySelectorAll('.slider .dots li');

        let lengthItems = items.length - 1;
        let active = 0;

        next.onclick = function() {
            active = active + 1 <= lengthItems ? active + 1 : 0;
            reloadSlider();
        }
        prev.onclick = function() {
            active = active - 1 >= 0 ? active - 1 : lengthItems;
            reloadSlider();
        }
        let refreshInterval = setInterval(() => {
            next.click()
        }, 3000);

        function reloadSlider() {
            slider.style.left = -items[active].offsetLeft + 'px';
            let last_active_dot = document.querySelector('.slider .dots li.active');
            last_active_dot.classList.remove('active');
            dots[active].classList.add('active');

            clearInterval(refreshInterval);
            refreshInterval = setInterval(() => {
                next.click()
            }, 3000);
        }

        dots.forEach((li, key) => {
            li.addEventListener('click', () => {
                active = key;
                reloadSlider();
            })
        })
        window.onresize = function(event) {
            reloadSlider();
        };
    </script>
</x-frame>
