<x-frame>
    <x-slot:layout_image>
    </x-slot:layout_image>
    <x-slot:slot_about>
    </x-slot:slot_about>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <link rel="stylesheet" href="{{ asset('css/book.css') }}">
    <h3 class="favorite-txt">Make a <span>Reservation<span></h3>
    <div class="reservation-form">
        <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input class="inside"type="text" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <label for="address">Address of Location</label>
                <select id="address" name="address" class="inside" required>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" data-image="{{ $branch->image }}">
                            {{ $branch->branch_name }} ({{ $branch->address }})
                        </option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="booking-time">Booking Time</label>
                <input class="inside"type="datetime-local" id="booking-time" name="booking-time" required>
            </div>
            <div class="form-group">
                <label for="people">Number of People</label>
                <input class="inside"type="number" id="people" name="people" placeholder="0" min="1"
                    required>
            </div>
            <button type="submit" class="btn-reserve">Submit Reservation</button>
        </form>
    </div>
    
    <script>
        function showImagePopup(imageUrl) {
            var modal = document.createElement('div');
            modal.classList.add('image-modal');
            var image = document.createElement('img');
            image.src = imageUrl;
            modal.appendChild(image);
            document.body.appendChild(modal);
            modal.addEventListener('click', function() {
                modal.remove();
            });
        }
        var select = document.getElementById('address');
        select.addEventListener('change', function() {
            var selectedOption = select.options[select.selectedIndex];
            var imageUrl = selectedOption.getAttribute('data-image');
            if (imageUrl) {
                showImagePopup(imageUrl);
            }
        });
    </script>

</x-frame>
