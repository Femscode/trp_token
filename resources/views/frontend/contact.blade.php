@extends('frontend.master')
@section('header')
@endsection

@section('content')

<main>
    <div class="pattern-square"></div>
    <!--Pageheader start-->
    <section class="py-5 py-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1 col-md-12 col-12">
                    <h1 class="mb-3">Contact us</h1>
                    <p class="mb-0 lead">Please reach out to us if you have questions about our enterprise offerings, or
                        anything else.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Pageheader end-->
    <!--Contact us start-->
    <section class="mb-xl-9 my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="row g-xl-7 gy-5">
                        <div class="col-md-7 col-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                <form id="contactForm" class="row g-3 needs-validation" novalidate>
    @csrf
    <div class="col-lg-6 col-md-12">
        <label for="contactFirstNameInput" class="form-label">First Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="first_name" required>
        <div class="invalid-feedback">Please enter firstname.</div>
    </div>
    <div class="col-lg-6 col-md-12">
        <label for="contactLastNameInput" class="form-label">Last Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="last_name" required>
        <div class="invalid-feedback">Please enter lastname.</div>
    </div>
    <div class="col-md-12">
        <label for="contactEmailInput" class="form-label">Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control" name="email" required>
        <div class="invalid-feedback">Please enter email.</div>
    </div>
    <div class="col-md-12">
        <label for="contactPhoneInput" class="form-label">Phone</label>
        <input type="tel" class="form-control" name="phone">
        <div class="invalid-feedback">Please enter phone.</div>
    </div>
    <div class="col-md-12">
        <label for="contactTextarea" class="form-label">Message</label>
        <textarea class="form-control" name="message" placeholder="Write to us" rows="4" required></textarea>
        <div class="invalid-feedback">Please enter a message.</div>
    </div>
    <div class="d-grid">
        <button class="btn btn-primary" type="submit">Send</button>
    </div>
   
</form>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="mb-7">
                                <div class="icon-shape bg-primary bg-opacity-10 rounded icon-md mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headset text-primary" viewBox="0 0 16 16">
                                        <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4>Technical support</h4>
                                    <p class="mb-0">
                                        Found a persistent bug, or need help setting a new team member up? Can’t crack a
                                        feature?
                                        <h6>Contacts :  <a href="tel:07081943867" class="text-primary">+234 708 1943 867</a> ,  <a href="tel:+447867250155" class="text-primary">+44 7867 250155</a></h6>
                                     </p>
                                </div>
                            </div>
                            <div class="mb-7">
                                <div class="icon-shape bg-primary bg-opacity-10 rounded icon-md mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots text-primary" viewBox="0 0 16 16">
                                        <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                                        <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4>General chat</h4>
                                    <p class="mb-0">
                                        Billing issues, customizations, plan changes--anything that doesn’t fit in the other
                                        two brackets, goes here.
                                        <a href="mailto:headtraxsolutions@gmail.com" class="text-primary">Email Us</a>
                                    </p>
                                </div>
                            </div>
                            <div class="mb-7">
                                <div class="icon-shape bg-primary bg-opacity-10 rounded icon-md mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper text-primary" viewBox="0 0 16 16">
                                        <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"></path>
                                        <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4>FAQ</h4>
                                    <p class="mb-0">
                                        Check out frequently asked questions!
                                        <a href="#faq" class="text-primary">Visit Help Center</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Contact us end-->
    <!--Location start-->
   <!--asked question-->
<section class="mb-xl-9 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                <div class="text-center mb-7">
                    <h2>Frequently asked questions</h2>
                    <p class="mb-0">
                        Can’t find any answer for your question?
                        <br />
                        Ask our
                        <a href="https://wa.me/2347081943867" class="text-primary">customer
                            support</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                <div class="accordion" id="accordionExample">
                    <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                            <a href="#"
                                class="text-reset d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"
                                aria-expanded="false"
                                aria-controls="collapseOne">
                                Do I need technical knowledge to use Headtrax Solutions?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseOne"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                            No, you don’t need any coding or technical skills. Our platform is designed for easy, no-code integration, allowing you to set up and manage your communication tools effortlessly.
                            </div>
                        </div>
                    </div>

                    <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                            <a href="#"
                                class="text-reset d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="true"
                                aria-controls="collapseTwo">
                                How does Headtrax Solutions help with local language support?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseTwo"
                            class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                            We support multiple major Nigerian languages, making it easy to communicate with your customers in their preferred language, which enhances customer satisfaction and engagement.
                            </div>
                        </div>
                    </div>
                    <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                            <a href="#"
                                class="text-reset d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree">
                                Is Headtrax Solutions affordable for small businesses?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseThree"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                            Yes, we offer flexible pricing plans tailored for SMEs, ensuring that businesses of all sizes can access powerful communication tools at a budget-friendly rate.
                            </div>
                        </div>
                    </div>
                    <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                            <a href="#"
                                class="text-reset d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFour"
                                aria-expanded="false"
                                aria-controls="collapseFour">
                                What payment methods do you offer?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseFour"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                We offer several payment methods ranging from bank transfer, credit card and paypal.
                            </div>
                        </div>
                    </div>
                    <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                            <a href="#"
                                class="text-reset d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFive"
                                aria-expanded="false"
                                aria-controls="collapseFive">
                                What is your refund policy?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseFive"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Within 48hrs, your refund will be processed, provided...
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</section>
<!--asked question-->
    <!--Location end-->
</main>
@endsection


@section('script')

<!-- Add jQuery if it's not already included -->

<script>
$(document).ready(function() {
    $('#contactForm').on('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting via the browser
        Swal.fire('submitting, please wait');

        // Serialize form data
        let formData = $(this).serialize();


        // Send the form data via AJAX
        $.ajax({
            url: '/savecontact-us',  // Your route to handle saving contact
            type: 'POST',
            data: formData,
            success: function(response) {
                // Handle success - show a success message or clear form fields
               Swal.fire('success','Message sent successfully!','success')
                // Optionally clear the form
            },
            error: function(xhr) {
                // Handle error - show error message
               Swal.fire('error', 'Opps, error encourtered while sending message, try again later','error')
            }
        });
    });
});
</script>

@endsection