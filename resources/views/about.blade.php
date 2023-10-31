<x-frame>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <x-slot:layout_image>
        <img src="{{ asset('images/banner1.jpg') }}" style="width:100%" class="p-0">
    </x-slot:layout_image>
    <x-slot:slot_about>
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
        <h1 class="about-heading">About Us</h1>
        <div class="about-text">
            <p class="about-p">Fast Food Delight welcomes you to a world where culinary excellence meets the convenience
                of modern life. We are not just a fast food establishment; we are an epicurean journey through
                delectable flavors and memorable experiences. Our unwavering dedication is to provide our cherished
                patrons with fast food that transcends the ordinary, offering tantalizing taste and unparalleled quality
                that leaves a lasting impression.</p>

            <h2 class="about-subheading">Our Story</h2>
            <p class="about-p">Our epic journey embarked on an exciting path back in the year 20XX when our visionary
                founder, John Smith, envisioned a sanctuary for food enthusiasts to savor mouthwatering fast food that
                not only satisfies hunger but also ignites the senses. What began as a small food stall in a bustling
                corner of the city has grown into a culinary empire known for redefining the fast food experience.</p>
            <div class="expand-button">
                <div tabindex="0"><span>Our commitment to excellence has remained steadfast throughout our
                        journey. We have meticulously crafted a menu that combines classic favorites with innovative
                        creations, ensuring that
                        every bite is a culinary revelation. We take pride in using only the finest and freshest
                        ingredients
                        to create dishes that resonate with the essence of pure flavor. Our chefs work tirelessly to
                        perfect
                        each recipe, delivering an exceptional dining experience that is simply unforgettable.Over the
                        years,
                        we've ventured into uncharted culinary territories, experimenting
                        with new flavors and international influences. Our menu is a testament to our relentless pursuit
                        of
                        perfection. From savory gourmet burgers to artisanal pizzas and fusion delicacies that spark
                        culinary curiosity, our offerings cater to a diverse array of palates.Our story is woven with
                        passion, dedication, and an unwavering commitment to
                        serving our community. We believe that food is a universal language that brings people together.
                        We're not just a restaurant; we're a gathering place where friends and families create cherished
                        memories
                        over
                        a shared meal.Fast Food Delight is more than a culinary destination; it's a
                        reflection of our love for food and the people we serve. We invite you to join us on this
                        gastronomic journey, where every visit promises a delightful experience, and every dish tells a
                        story of our dedication to culinary artistry.</span></div>
            </div>

            <h2 class="about-subheading">Our Values</h2>
            <p class="about-p">At the heart of our success lies a set of core values that define who we are and
                guide
                everything we do:</p>
            <ul class="about-list about-p">
                <li><strong>Quality Excellence:</strong> We are committed to sourcing the highest-quality
                    ingredients,
                    ensuring that every dish is a masterpiece of taste and texture.</li>
                <li><strong>Exceptional Service:</strong> Our friendly and efficient team is dedicated to making
                    your
                    visit a delight, ensuring your needs are met with a warm smile and prompt service.</li>
                <li><strong>Clean and Comfortable:</strong> We take great care in maintaining clean and comfortable
                    dining environments, creating a welcoming space for you to enjoy your meal.</li>
                <li><strong>Community Engagement:</strong> We believe in giving back to the communities that support
                    us.
                    We actively engage in initiatives that make a positive impact and foster a sense of
                    togetherness.
                </li>
            </ul>

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
    </x-slot:slot_about>
</x-frame>
