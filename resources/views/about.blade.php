<x-frame>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <x-slot:layout_image>
        <img src="{{ asset('images/banner1.jpg') }}" style="width:100%" class="p-0">
    </x-slot:layout_image>
    <x-slot:slot_about>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">

        <div data-aos="fade-up" data-aos-duration="1000">
            <h1 class="about-heading">About Us</h1>
            <p class="about-p1">Welcome to Fast Food Delight, where gastronomy and contemporary convenience converge to
                redefine the fast food experience. At Fast Food Delight, we pride ourselves on being much more than just
                your typical fast food establishment. We are on a mission to take you on a culinary adventure,
                introducing you to an array of delectable flavors and crafting unforgettable moments with every bite.

                Our commitment to excellence is unwavering, as we tirelessly strive to offer our beloved patrons fast
                food that rises above the ordinary. We understand that fast food doesn't have to mean sacrificing
                quality or flavor, and our menu is a testament to this belief. We meticulously source the finest
                ingredients to create dishes that not only tantalize your taste buds but also leave an indelible mark on
                your culinary journey. With Fast Food Delight, you can expect a fast food experience that transcends the
                mundane, elevating your dining moments to a realm of unrivaled taste and unparalleled quality. Come join
                us and savor the difference at Fast Food Delight - where every bite is a delightful step into a world of
                extraordinary flavors and cherished memories.</p>
        </div>


        <h2 class="about-subheading">Our Story</h2>
        <p class="about-p1">Our epic journey embarked on an exciting path back in the year 1985 when our
            visionary
            founder, John Smith, envisioned a sanctuary for food enthusiasts to savor mouthwatering fast food
            that
            not only satisfies hunger but also ignites the senses. What began as a small food stall in a
            bustling
            corner of the city has grown into a culinary empire known for redefining the fast food experience.
        </p>
        <div class="expand-button">
            <div tabindex="0"><span>
                    <p class="about-p1">Our commitment to excellence has remained steadfast throughout our
                        journey. We have meticulously crafted a menu that combines classic favorites with
                        innovative
                        creations, ensuring that
                        every bite is a culinary revelation. We take pride in using only the finest and freshest
                        ingredients
                        to create dishes that resonate with the essence of pure flavor. Our chefs work
                        tirelessly to
                        perfect
                        each recipe, delivering an exceptional dining experience that is simply
                        unforgettable.Over
                        the
                        years,
                        we've ventured into uncharted culinary territories, experimenting
                        with new flavors and international influences.</p>
                    <p class="about-p1">Our menu is a testament to our relentless pursuit
                        of
                        perfection. From savory gourmet burgers to artisanal pizzas and fusion delicacies that
                        spark
                        culinary curiosity, our offerings cater to a diverse array of palates.Our story is woven
                        with
                        passion, dedication, and an unwavering commitment to
                        serving our community. We believe that food is a universal language that brings people
                        together.
                        We're not just a restaurant; we're a gathering place where friends and families create
                        cherished
                        memories
                        over
                        a shared meal.Fast Food Delight is more than a culinary destination; it's a
                        reflection of our love for food and the people we serve. We invite you to join us on
                        this
                        gastronomic journey, where every visit promises a delightful experience, and every dish
                        tells a
                        story of our dedication to culinary artistry.</p>
                </span></div>
        </div>

        <h2 class="about-subheading">Our Values</h2>
        <div class="about-list about-p">
            <p class="card-body" data-aos="fade-right"><strong>Quality Excellence</strong> <br> We are committed to sourcing the highest-quality
                ingredients,
                ensuring that every dish is a masterpiece of taste and texture.</p>
            <p class="card-body" data-aos="fade-right"><strong>Exceptional Service</strong> <br> Our friendly and efficient team is dedicated to
                making your visit a
                delight, ensuring your needs are met with a warm smile and prompt service.</p>
            <p class="card-body" data-aos="fade-right"><strong>Clean and Comfortable</strong> We take great care in maintaining clean and
                comfortable dining
                environments, creating a welcoming space for you to enjoy your meal.</p>
            <p class="card-body" data-aos="fade-right"><strong>Community Engagement</strong> We believe in giving back to the communities that
                support us. We
                actively engage in initiatives that make a positive impact and foster a sense of togetherness.</p>
        </div>

        <h2 class="about-subheading">Our Commitment</h2>
        <p class="about-p">Fast Food Delight is more than just a place to eat; it's a promise to our customers.
            Our
            commitment is to continually enhance your dining experience. We are dedicated to exploring new and
            exciting flavors, creating innovative menu items, and staying ahead of culinary trends. We take your
            feedback seriously, and it motivates us to evolve and adapt to meet your evolving tastes and
            preferences.</p>

        <p class="about-p">In addition to our culinary commitment, we hold a strong commitment to our
            communities.
            We believe in being a responsible corporate citizen, supporting local causes, and fostering a sense
            of
            belonging. We are proud to be a part of the fabric of your community, and we are dedicated to making
            it
            a better place for all.</p>

        <p class="about-p">Thank you for being a part of the Fast Food Delight family. We look forward to
            serving
            you not just a meal, but an experience. Join us as we continue to delight your senses and make every
            visit a memorable moment in your culinary journey.</p>
        </div>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </x-slot:slot_about>
</x-frame>
