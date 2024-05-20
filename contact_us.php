<!-- Header  -->

<?php include('header.php'); ?>


<!-- Contact Us -->

<div class="container-fluid">
    <div class="row">
        <h1 class="text-center mt-3 list-group-item-primary py-5">Contact Us</h1>
        <hr class="my-4">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="cont_location text-center">
                    <i class="bi bi-geo-alt text-danger display-5"></i>
                    <h4 class="my-4">
                        Address:
                        <br>
                        <span>
                            Noida, Ghaziabad, Uttar Pradesh
                        </span>
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cont_location text-center">
                    <i class="bi bi-telephone text-danger display-5"></i>
                    <h4 class="my-4">
                        Mobile:
                        <br>
                        <span>
                            +91 7052141220
                        </span>
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cont_location text-center">
                    <i class="bi bi-envelope text-danger display-5"></i>
                    <h4 class="my-4">
                        Email:
                        <br>
                        <span>
                            rajkumarsharma705214@gmail.com
                        </span>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-light">
        <div class="col-md-6 pt-5">
            <div class="cont_map">
                <h3>
                    Locate Us
                </h3>
                <iframe class="border shadow rounded mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.9684617206467!2d77.5329885752911!3d28.68506277563608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1b78d24d27b%3A0x1ab5eb467e30e71a!2sSunder%20Deep%20Group%20of%20Institution!5e1!3m2!1sen!2sin!4v1715016379666!5m2!1sen!2sin" style="border:0; height: 450px; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-md-6 pt-5">
            <div class="cont_form">
                <h3>
                    Send Massage
                </h3>
                <p class="text-danger">
                    * All fields are required
                </p>
                <form class="row g-3 px-2 needs-validation" novalidate>
                    <div class="form-group mt-4">
                        <label for="validationCustom01" class="form-label">
                            First Name *
                        </label>
                        <input type="text" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Enter Your First Name" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <label for="exampleFormControlInput1">
                            Last Name
                        </label>
                        <input type="text" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Enter Your Last Name">
                    </div>

                    <div class="form-group mt-4">
                        <label for="validationCustom01" class="form-label">
                            Email address *
                        </label>
                        <input type="email" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Enter Your Email" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <label for="exampleFormControlInput1">
                            Phone *
                        </label>
                        <input type="number" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Enter Your Phone" required min="1000000000" max="9999999999">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <label for="exampleFormControlTextarea1">
                            Message *
                        </label>
                        <textarea class="form-control mt-2" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Your Message" required></textarea>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary border-2 border border-primary my-3 w-25 shadow">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Bootstrap Form Validation 

(() => {
    'use strict'
  
    const forms = document.querySelectorAll('.needs-validation')
  
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>


<!-- Footer  -->

<?php include('footer.php'); ?>