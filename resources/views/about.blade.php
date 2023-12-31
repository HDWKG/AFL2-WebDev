<x-frame>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <x-slot:layout_image>
        <img src="https://i.pinimg.com/564x/0c/b2/ba/0cb2ba8ca9f85621c4ddbca735ea7008.jpg" style="width:100%"
            class="p-0">
    </x-slot:layout_image>
    <x-slot:slot_about>
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">

        <div style="height:50px">
        </div>

        <div class="about-content">
            <div class="fade-up-element">
                <h1 class="about-heading">About Us</h1>
                <p class="about-p1">Welcome to Fast Food Delight, where gastronomy and contemporary convenience converge
                    to
                    redefine the fast food experience. At Fast Food Delight, we pride ourselves on being much more than
                    just
                    your typical fast food establishment. We are on a mission to take you on a culinary adventure,
                    introducing you to an array of delectable flavors and crafting unforgettable moments with every
                    bite.</p>
            </div>
            <img class="rounded-image" src="https://i.pinimg.com/564x/eb/af/22/ebaf22b531f72ee00f406c9e21e6920e.jpg"
                alt="">
        </div>

        <div class="spacer"></div>

        <div class="about-content">
            <img class="rounded-image" src="https://i.pinimg.com/564x/85/4c/20/854c20122b48fdbfcf5a4ba0b0d18b95.jpg" alt="">
            <div>
                <h2 class="about-subheading">Our Story</h2>
                <p class="about-p1">Our epic journey embarked on an exciting path back in the year 1985 when our visionary founder, John Smith, envisioned a sanctuary for food enthusiasts to savor mouthwatering fast food that not only satisfies hunger but also ignites the senses. What began as a small food stall in a bustling corner of the city has grown into a culinary empire known for redefining the fast food experience.</p>
                <div class="expand-btn" tabindex="0" onclick="toggleExpand()">Read More...</div>
            </div>
        </div>
    
        <div class="hidden1" id="expanded-section">
            <div class="about-content">
                <img class="rounded-image" src="https://i.pinimg.com/564x/71/43/8c/71438c9f0799db9ee6c465fd743f6b26.jpg" alt="">
                <div>
                    <p class="about-p1">Our commitment to excellence has remained steadfast throughout our journey. We have meticulously crafted a menu that combines classic favorites with innovative creations, ensuring that every bite is a culinary revelation. We take pride in using only the finest and freshest ingredients to create dishes that resonate with the essence of pure flavor. Our chefs work tirelessly to perfect each recipe, delivering an exceptional dining experience that is simply unforgettable. Over the years, we've ventured into uncharted culinary territories, experimenting with new flavors and international influences.</p>
                </div>
            </div>
            <div class="about-content">
                <img class="rounded-image" src="https://i.pinimg.com/564x/85/0f/a2/850fa21a46ac10029572017242e1b380.jpg" alt="">
                <div>
                    <p class="about-p1">Our menu is a testament to our relentless pursuit of perfection. From savory gourmet burgers to artisanal pizzas and fusion delicacies that spark culinary curiosity, our offerings cater to a diverse array of palates. Our story is woven with passion, dedication, and an unwavering commitment to serving our community. We believe that food is a universal language that brings people together. We're not just a restaurant; we're a gathering place where friends and families create cherished memories over a shared meal. Fast Food Delight is more than a culinary destination; it's a reflection of our love for food and the people we serve. We invite you to join us on this gastronomic journey, where every visit promises a delightful experience, and every dish tells a story of our dedication to culinary artistry.</p>
                </div>
            </div>
        </div>

        <div class="spacer"></div>

        <h2 class="about-subheading">Our Values</h2>
        <div class="about-list about-p">
            <p class="card-body hidden"><strong>Quality Excellence</strong> <br> We are committed to sourcing the
                highest-quality
                ingredients,
                ensuring that every dish is a masterpiece of taste and texture.</p>
            <p class="card-body hidden"><strong>Exceptional Service</strong> <br> Our friendly and efficient team is
                dedicated to
                making your visit a
                delight, ensuring your needs are met with a warm smile and prompt service.</p>
            <p class="card-body hidden"><strong>Clean and Comfortable</strong> We take great care in maintaining clean
                and
                comfortable dining
                environments, creating a welcoming space for you to enjoy your meal.</p>
            <p class="card-body hidden"><strong>Community Engagement</strong> We believe in giving back to the
                communities that
                support us. We
                actively engage in initiatives that make a positive impact and foster a sense of togetherness.</p>
        </div>

        <div class="spacer"></div>

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
        <script defrer src="{{ asset('js/about.js') }}"></script>
    </x-slot:slot_about>
</x-frame>
