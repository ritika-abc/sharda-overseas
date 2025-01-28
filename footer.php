



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel"> Sharda Overseas
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-6 my-2">
                            <input type="text" class="form-control name" value="" placeholder="Enter Your Name" />
                        </div>
                        <div class="col-12 col-md-6 my-2">
                            <input type="number" class="form-control number" value="" placeholder="Enter Your Number" />
                        </div>
                        <div class="col-12  my-2">
                            <input type="email" class="form-control email" value="" placeholder="Enter Your Email" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="go()" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background-color: black !important;">
        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-lg-5 pe-lg-4">
                    <h4 class="text-white"><q>Sharda Overseas</q></h4>
                    <p class="fs-5 mb-4">At Sharda Overseas we are a trusted name in the import-export industry,
                        based in Ahmedabad, Gujarat. With a commitment to excellence and quality, we specialize in
                        exporting a diverse range of high-quality industrial products and eco-friendly solutions.
                    </p>

                    <div class="d-flex mt-4">
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>

                        <a class="btn btn-lg-square btn-primary me-2" href=" "><i class="fab fa-linkedin-in"></i></a>

                    </div>

                </div>
                <div class="col-lg-7 ps-lg-5">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Contact Now</h4>
                            <p><i class="fa fa-map-marker-alt me-2"></i>350/12 Ahmedabad Audhyogik Vasahat Sangh ,
                                Ahmedabad , Gujarat , India-380004</p>
                            <p><i class="fa fa-phone-alt me-2"></i>+91 96625 83083</p>

                            <p><i class="fa fa-envelope me-2"></i>shardaoverseasinfo@gmail.com</p>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Popular Links</h4>
                            <a class="btn btn-link" href="about.php">About Us</a>
                            <a class="btn btn-link" href="contact.php">Contact Us</a>
                            <a class="btn btn-link" href="all-product.php">Our Products</a>
                            <a class="btn btn-link" href="service.php">Our Services</a>

                        </div>
                        <div class="col-sm-12 text-start text-md-end">

                            <a href="https://web2export.com" target="_blank">
                                <img src="image/logo/webexport.jpg" height="70px" width="200px" class="p-1 rounded"
                                    alt="  ">

                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->





    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <a href="/"> Sharda Overseas</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <p class="mb-0">Designed by <a href="https://web2export.com" target="_blank">web2export.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
    <script>
        function contact() {
            var na = document.querySelector(".name").value;
            var em = document.querySelector(".email").value;
            var phone = document.querySelector(".phone").value;
            var mes = document.querySelector(".message").value;
            var url1 = "https://wa.me/919662583083?text=" +
                "Name: " +
                na + " " +
                "Email: " +
                em + " " +
                "Phone :" + phone +
                "Message :" + mes;
            window.open(url1, "_blank").focus();
        }
    </script>
    <script>
        function go() {
            var name = document.querySelector(".name").value;
            var email = document.querySelector(".email").value;
            var number = document.querySelector(".number").value;
            var url = "https://wa.me/919662583083?text=" +
                "Name: " +
                name + " " +
                "Number: " +
                number + " " +
                "Email :" + email;
            window.open(url, "_blank").focus();
        }
    </script>
 
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>