<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SharanForest - A Land of Adventures</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa; /* Light background for contrast */
        }
        .navbar-brand img {
            max-height: 40px; /* Adjust as needed */
        }
        .top-header {
            background-color: #fff; /* White background for top contact */
            padding: 5px 0;
            font-size: 0.9rem;
        }
        .top-header .support-info {
            color: #28a745; /* Green color for phone icon */
        }
        .top-header .btn-success {
            background-color: #28a745; /* Green button */
            border-color: #28a745;
            padding: 0.375rem 0.75rem;
            font-size: 0.9rem;
        }
        .main-nav {
            background-color: #343a40; /* Dark grey for main nav */
            padding: 0.5rem 1rem; /* Reduced padding */
        }
        .main-nav .nav-link {
            color: #f8f9fa !important; /* Light text */
            text-transform: uppercase;
            font-weight: 500;
            padding: 0.5rem 0.75rem; /* Reduced padding for nav items */
            font-size: 0.85rem; /* Slightly smaller font */
        }
        .main-nav .nav-link.active, .main-nav .nav-link:hover {
            color: #28a745 !important; /* Green for active/hover */
        }
        .secondary-nav {
            background-color: #e9ecef; /* Light grey for secondary nav */
            padding: 0.3rem 1rem; /* Reduced padding */
            font-size: 0.8rem; /* Smaller font for secondary nav */
        }
        .secondary-nav .nav-link {
            color: #343a40 !important; /* Dark text */
            padding: 0.25rem 0.5rem; /* Reduced padding */
        }
        .secondary-nav .nav-link:hover {
            color: #28a745 !important; /* Green for hover */
        }

        .booking-form-section {
            background: url('/images/hero-background.jpg') no-repeat center center; /* Replace with an actual image path */
            background-size: cover;
            padding: 100px 0; /* Adjust padding as needed */
            position: relative;
            color: #333; /* Default text color that contrasts with white form */
        }
        .booking-form-container {
            background-color: rgba(255, 255, 255, 0.95); /* Slightly transparent white */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .booking-form-container h3 {
            font-weight: bold;
            color: #28a745; /* Green for step numbers */
            margin-bottom: 5px;
        }
        .booking-form-container .form-label {
            font-weight: 500;
            margin-bottom: 0.3rem;
            font-size: 0.9rem;
        }
        .booking-form-container .form-control, .booking-form-container .form-select {
            border-radius: 0.25rem; /* Softer edges */
            font-size: 0.9rem;
        }
        .booking-step-label {
            display: block;
            font-size: 0.8rem;
            color: #6c757d; /* Grey for "What, Where, When, Who" */
            margin-bottom: 15px;
        }
        .form-check-input:checked {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-proceed {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            width: 100%;
            font-size: 1.1rem;
        }
        .btn-proceed:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .vertical-menu {
            position: fixed;
            right: 0;
            top: 150px; /* Adjust as needed */
            background-color: #28a745; /* Green background */
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            z-index: 1000;
        }
        .vertical-menu a {
            display: block;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            font-size: 0.9rem;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }
        .vertical-menu a:last-child {
            border-bottom: none;
        }
        .vertical-menu a:hover {
            background-color: #218838;
        }

        /* Carousel Styles */
        #hotelDetailsCarousel .carousel-item img {
            height: 300px; /* Or your desired height */
            object-fit: cover;
            width: 100%;
        }
        .hotel-details-content {
            padding: 15px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-top: none;
            border-radius: 0 0 8px 8px;
        }

        @media (max-width: 991.98px) {
            .main-nav .navbar-nav {
                align-items: flex-start; /* Align items to start on smaller screens */
            }
            .top-header .d-flex {
                flex-direction: column;
                align-items: center;
            }
            .top-header .support-info, .top-header .ms-auto {
                margin-bottom: 5px;
                 text-align: center;
            }
             .top-header .btn-group {
                width: 100%;
                display: flex;
                justify-content: center;
            }
            .top-header .btn-group .btn {
                flex-grow: 1;
            }
             .vertical-menu {
                display: none; /* Hide vertical menu on smaller screens or adapt */
            }
        }

         /* Ensure logo is visible */
        .navbar-brand {
            color: #28a745 !important; /* Green or a color that shows on dark/light bg */
            font-weight: bold;
            font-size: 1.5rem; /* Make logo text larger */
        }
        /* If using an image logo, ensure it's styled appropriately */
        /* .navbar-brand img { ... } */

    </style>
</head>
<body>

    <!-- Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="support-info">
                    <i class="bi bi-telephone-fill"></i> 24/7 Support number <a href="tel:+923123040474" class="text-decoration-none text-success fw-bold">+92 345 9668442</a>
                </div>
                <div class="ms-auto btn-group">
                    <a href="#" class="btn btn-success btn-sm">LIST YOUR PROPERTY</a>
                    <a href="#" class="btn btn-success btn-sm ms-2">FIND MY BOOKING</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg main-nav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!-- Assuming text logo based on image "FLYPAKISTAN A LAND OF ADVENTURES" -->
                <span style="color: #FFF;">Sharan</span><span style="color: #28a745;">Forest</span>
                <div style="font-size: 0.6em; color: #DDD; letter-spacing: 1px; margin-top: -5px;">A LAND OF ADVENTURES</div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1) brightness(1.5);"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">City Wise Hotels</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Hotels In Pakistan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Hot Deals</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Attractions In Pakistan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tour Packages</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Rent A Car</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Explore Cities</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Group Bookings</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Secondary Navigation -->
    <nav class="secondary-nav">
        <div class="container">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#">Flypakistan Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Hotel Chains</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blogs</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About us</a></li> <!-- Duplicate About Us, maybe intended for a different section -->
            </ul>
        </div>
    </nav>

    <!-- Floating Vertical Menu (Right Side) -->
    <div class="vertical-menu d-none d-lg-block">
        <a href="#">MY BOOKING</a>
        <a href="#">FOR HOTELIERS</a>
        <a href="#">FOR AGENTS</a>
    </div>


    <!-- Booking Form Section -->
    <section class="booking-form-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-10">
                    <div class="booking-form-container">
                        <form id="bookingForm">
                            <div class="row g-3 align-items-end">
                                <!-- Step 1: What? -->
                                <div class="col-md-2 col-lg-1">
                                    <h3>01</h3>
                                    <label class="form-label">What?</label>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="radio" name="bookingType" id="hotelRadio" value="hotel" checked>
                                        <label class="form-check-label" for="hotelRadio">
                                            Hotel
                                        </label>
                                    </div>
                                </div>

                                <!-- Step 2: Where? -->
                                <div class="col-md-10 col-lg-4">
                                    <h3>02</h3>
                                    <label for="destination" class="form-label">Where?</label>
                                    <small class="booking-step-label d-block">Your destination</small>
                                    <select class="form-select" id="destination" name="destination">
                                        <option value="" selected>Select City</option>
                                        @foreach($hotels as $hotel)
                                            <option value="{{ $hotel['id'] }}" data-name="{{ $hotel['name'] }}">{{ $hotel['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Step 3: When? -->
                                <div class="col-md-6 col-lg-4">
                                    <h3>03</h3>
                                    <label class="form-label">When?</label>
                                    <div class="row g-2">
                                        <div class="col-sm-5">
                                            <small class="booking-step-label d-block">Check-in date</small>
                                            <input type="date" class="form-control" id="checkinDate" name="checkinDate">
                                        </div>
                                        <div class="col-sm-3">
                                            <small class="booking-step-label d-block">Nights</small>
                                            <select class="form-select" id="nights" name="nights">
                                                @for ($i = 1; $i <= 30; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <small class="booking-step-label d-block">Check-out date</small>
                                            <input type="date" class="form-control" id="checkoutDate" name="checkoutDate">
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 4: Who? -->
                                <div class="col-md-6 col-lg-3">
                                    <h3>04</h3>
                                    <label class="form-label">Who?</label>
                                     <div class="row g-2">
                                        <div class="col-4">
                                            <small class="booking-step-label d-block">Rooms</small>
                                            <input type="number" class="form-control" id="rooms" name="rooms" value="1" min="1">
                                        </div>
                                        <div class="col-4">
                                            <small class="booking-step-label d-block">Adults</small>
                                            <input type="number" class="form-control" id="adults" name="adults" value="2" min="1">
                                        </div>
                                        <div class="col-4">
                                            <small class="booking-step-label d-block">Children</small>
                                            <input type="number" class="form-control" id="children" name="children" value="0" min="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row mt-4">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-proceed">PROCEED TO RESULTS</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Hotel Details Section (hidden by default) -->
            <div class="row justify-content-center mt-4" id="hotelDetailsSection" style="display: none;">
                <div class="col-lg-12 col-xl-10">
                    <div id="hotelDetailsCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" id="carouselInnerImages">
                            <!-- Carousel images will be injected here -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#hotelDetailsCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#hotelDetailsCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="hotel-details-content" id="hotelInfoContent">
                        <h4 id="hotelName"></h4>
                        <p id="hotelDescription"></p>
                        <p><strong>Rating:</strong> <span id="hotelRating"></span></p>
                        <p><strong>Room Size:</strong> <span id="hotelRoomSize"></span></p>
                        <p><strong>Attached Bathroom:</strong> <span id="hotelAttachBathroom"></span></p>
                        <p><strong>Contact:</strong> <span id="hotelUploaderNumber"></span></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer class="text-center py-4 mt-5 bg-dark text-white">
        <p>&copy; {{ date('Y') }} SharanForest. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const destinationSelect = document.getElementById('destination');
            const hotelDetailsSection = document.getElementById('hotelDetailsSection');
            const carouselInnerImages = document.getElementById('carouselInnerImages');
            const hotelName = document.getElementById('hotelName');
            const hotelDescription = document.getElementById('hotelDescription');
            const hotelRating = document.getElementById('hotelRating');
            const hotelRoomSize = document.getElementById('hotelRoomSize');
            const hotelAttachBathroom = document.getElementById('hotelAttachBathroom');
            const hotelUploaderNumber = document.getElementById('hotelUploaderNumber');

            // Dummy hotel data structure (ideally fetch this or have it from Blade)
            const hotelsData = {!! json_encode($hotels) !!}.reduce((acc, hotel) => {
                acc[hotel.id] = hotel;
                return acc;
            }, {});

            destinationSelect.addEventListener('change', function () {
                const selectedHotelId = this.value;
                const selectedOption = this.options[this.selectedIndex];

                if (selectedHotelId && hotelsData[selectedHotelId]) {
                    const hotel = hotelsData[selectedHotelId];
                    console.log('Selected Hotel:', hotel.name); // Log selected hotel name

                    // Update dropdown label (Bootstrap 5 doesn't do this by default for select)
                    // The native select already shows the selected option's text.

                    // Populate hotel details
                    hotelName.textContent = hotel.name;
                    hotelDescription.textContent = hotel.description;
                    hotelRating.textContent = hotel.ratings + ' / 5';
                    hotelRoomSize.textContent = hotel.room_size;
                    hotelAttachBathroom.textContent = hotel.attach_bathroom ? 'Yes' : 'No';
                    hotelUploaderNumber.textContent = hotel.uploader_number;

                    // Populate carousel
                    carouselInnerImages.innerHTML = ''; // Clear previous images
                    hotel.photos.forEach((photo, index) => {
                        const div = document.createElement('div');
                        div.className = 'carousel-item' + (index === 0 ? ' active' : '');
                        div.innerHTML = `<img src="${photo}" class="d-block w-100" alt="${hotel.name} photo ${index + 1}">`;
                        carouselInnerImages.appendChild(div);
                    });
                    
                    if (hotel.photos.length > 0) {
                         new bootstrap.Carousel(document.getElementById('hotelDetailsCarousel')); // Reinitialize carousel
                    }


                    hotelDetailsSection.style.display = 'block';
                } else {
                    hotelDetailsSection.style.display = 'none';
                    console.log('No hotel selected or hotel data not found.');
                }
            });

            // Handle form submission (basic console log for now)
            document.getElementById('bookingForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(this);
                const data = {};
                formData.forEach((value, key) => data[key] = value);
                console.log('Form Data:', data);
                alert('Proceeding to results (check console for data). Actual navigation not implemented yet.');
            });

            // Date logic: Set check-in to today and check-out to tomorrow by default
            const checkinDateInput = document.getElementById('checkinDate');
            const checkoutDateInput = document.getElementById('checkoutDate');
            const nightsSelect = document.getElementById('nights');

            const today = new Date();
            const tomorrow = new Date(today);
            tomorrow.setDate(today.getDate() + 1);

            const formatDate = (date) => {
                let d = new Date(date),
                    month = '' + (d.getMonth() + 1),
                    day = '' + d.getDate(),
                    year = d.getFullYear();
                if (month.length < 2) month = '0' + month;
                if (day.length < 2) day = '0' + day;
                return [year, month, day].join('-');
            }

            checkinDateInput.value = formatDate(today);
            checkinDateInput.min = formatDate(today);
            
            checkoutDateInput.value = formatDate(tomorrow);
            checkoutDateInput.min = formatDate(tomorrow);


            function updateCheckoutDate() {
                const checkin = new Date(checkinDateInput.value);
                const numNights = parseInt(nightsSelect.value);
                if (!isNaN(checkin.getTime()) && numNights > 0) {
                    const newCheckout = new Date(checkin);
                    newCheckout.setDate(checkin.getDate() + numNights);
                    checkoutDateInput.value = formatDate(newCheckout);
                    checkoutDateInput.min = formatDate(newCheckout); // checkout should be after checkin + nights
                }
            }

            function updateNights() {
                const checkin = new Date(checkinDateInput.value);
                const checkout = new Date(checkoutDateInput.value);
                if (!isNaN(checkin.getTime()) && !isNaN(checkout.getTime()) && checkout > checkin) {
                    const diffTime = Math.abs(checkout - checkin);
                    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                    if (diffDays > 0 && diffDays <= 30) { // Max 30 nights
                         // Check if the value exists in the select options
                        let optionExists = false;
                        for(let i=0; i<nightsSelect.options.length; i++){
                            if(nightsSelect.options[i].value == diffDays){
                                optionExists = true;
                                break;
                            }
                        }
                        if(optionExists){
                             nightsSelect.value = diffDays;
                        } else {
                            // If not, maybe set to 1 or indicate an issue
                            // For now, let's leave it or set to a default if it becomes invalid
                            // Or create a new option if really needed, but that's more complex for this dropdown
                            console.warn(`Calculated ${diffDays} nights, but it's not a selectable option or out of range.`);
                             // Reset checkout if calculation is off or not making sense
                            // updateCheckoutDate(); // This could cause a loop, be careful
                        }
                    } else if (diffDays <=0) {
                        // Checkout is before or same as checkin, reset checkout based on 1 night
                        nightsSelect.value = 1;
                        updateCheckoutDate();
                    }
                }
            }


            checkinDateInput.addEventListener('change', () => {
                const checkin = new Date(checkinDateInput.value);
                const tomorrowFromCheckin = new Date(checkin);
                tomorrowFromCheckin.setDate(checkin.getDate() + 1);
                checkoutDateInput.min = formatDate(tomorrowFromCheckin);
                if (new Date(checkoutDateInput.value) <= checkin) {
                     checkoutDateInput.value = formatDate(tomorrowFromCheckin);
                }
                updateCheckoutDate(); // Update based on nights as primary
                // updateNights(); // Or update nights if checkout is primary driver
            });

            nightsSelect.addEventListener('change', updateCheckoutDate);
            checkoutDateInput.addEventListener('change', () => {
                const checkin = new Date(checkinDateInput.value);
                const checkout = new Date(checkoutDateInput.value);
                 if (checkout <= checkin) {
                    alert("Check-out date must be after check-in date.");
                    // Reset checkout to be one day after check-in
                    const nextDay = new Date(checkin);
                    nextDay.setDate(checkin.getDate() + parseInt(nightsSelect.value));
                    checkoutDateInput.value = formatDate(nextDay);
                }
                updateNights();
            });

             // Initial call to set checkout based on default 1 night
            updateCheckoutDate();

        });
    </script>
</body>
</html> 