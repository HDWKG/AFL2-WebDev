<x-frame>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <section class="container">
        <div class="slider">
            <div class="list">
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1656464868371-602be27fd4c2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80"
                        alt="">
                </div>
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1657586640569-4a3d4577328c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80"
                        alt="">
                </div>
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1656077217715-bdaeb06bd01f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80"
                        alt="">
                </div>
                <div class="item">
                    <img src="img/4.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/5.jpg" alt="">
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
    {{-- <section class="info">
        <div class="frame-content">
            <div class="frame-text">
                <h1 class="frame-title">Fast food Resto</h1>
                <h3 class="frame-desc">INFO LOREM IPSUM Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer
                    took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries,
                    but also
                    the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the
                    1960s
                    with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing
                    software
                    like Aldus PageMaker including versions of Lorem Ipsum</h3>
                <a href="#" class="btn btn-primary btn-orange mt-4">Order Now</a>
            </div>
            <div class="frame-image">
                <img src="https://i.pinimg.com/736x/47/96/33/4796332c07bf0d6264b4b4eb3592c929.jpg" alt="Cookie Image">
            </div>
        </div>
    </section> --}}
    <section class="specialty" id="specialty">
        <h1 class="heading"> Our <span>Specialty</span></h1>
        <div class="box-container">
            <div class="box">
                <img class="image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Hamburger_%28black_bg%29.jpg/800px-Hamburger_%28black_bg%29.jpg" alt="">
                <div class="content">
                    <img src="https://img.freepik.com/premium-vector/burger-logo-icon_567288-500.jpg" alt="">
                    <h3>Tasty Burger</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam harum consequatur, consectetur
                        officia dolorem ipsam! Facere beatae tenetur doloribus vitae.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="xx" alt="">
                <div class="content">
                    <img src="img" alt="">
                    <h3>Tasty Pizza</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam harum consequatur, consectetur
                        officia dolorem ipsam! Facere beatae tenetur doloribus vitae.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="xx" alt="">
                <div class="content">
                    <img src="img" alt="">
                    <h3>Tasty IceCream</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam harum consequatur, consectetur
                        officia dolorem ipsam! Facere beatae tenetur doloribus vitae.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="xx" alt="">
                <div class="content">
                    <img src="img" alt="">
                    <h3>Tasty Treat</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam harum consequatur, consectetur
                        officia dolorem ipsam! Facere beatae tenetur doloribus vitae.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="xx" alt="">
                <div class="content">
                    <img src="img" alt="">
                    <h3>Tasty Cake</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam harum consequatur, consectetur
                        officia dolorem ipsam! Facere beatae tenetur doloribus vitae.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="xx" alt="">
                <div class="content">
                    <img src="img" alt="">
                    <h3>Tasty Drinks</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam harum consequatur, consectetur
                        officia dolorem ipsam! Facere beatae tenetur doloribus vitae.</p>
                </div>
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
