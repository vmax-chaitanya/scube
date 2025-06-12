  <!-- jequery plugins -->
  <script src="<?php echo base_url(); ?>assets/home/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/slick.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/leaflet.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/appear.js"></script>
  <!-- Custom script -->
  <script src="<?php echo base_url(); ?>assets/home/js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- ////custom scripts  -->


  <script>
    $(document).ready(function() {
      $(".client-logo-carousel").owlCarousel({
        loop: true, // Infinite loop
        margin: 10, // Space between logos
        nav: false, // Hide navigation arrows
        autoplay: true, // Auto-slide
        autoplayTimeout: 2000, // 2 seconds per slide
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 2
          }, // 2 logos on small screens
          600: {
            items: 3
          }, // 3 logos on medium screens
          1000: {
            items: 5
          } // 5 logos on large screens
        }
      });
    });
  </script>

  <script>
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
  </script>

  <script>
    $(document).ready(function() {
      // toastr.success('hiiii');
      $('.captcha-refresh').on('click', function() {
        $.get('<?php echo base_url() . 'generate-captcha/1'; ?>', function(data) {
          console.log(data);
          $('#image_captcha').html(data);
        });
      });
    });
  </script>
  <script>
    $(function() {
      $("form[name='contact']").validate({
        rules: {
          name: "required",
          subject: "required",
          email: {
            required: true,
            email: true
          },
          mobile: {
            required: true,
            minlength: 10,
            maxlength: 10
          },

          message: "required",
          captcha: {
            required: true,
            minlength: 6,
            maxlength: 6
          }
        },
        messages: {
          name: "Enter Name",
          subject: "Enter Subject",
          mobile: {
            required: "Enter Mobile Number",
            minlength: "Enter Valid  Number",
            maxlength: "Enter Valid  Number",
          },

          email: "Enter Valid Email Address",
          message: "Please write a message",
          captcha: "Please enter captcha"
        },
        errorPlacement: function(error, element) {
          // Ensure error messages appear below the input fields without hiding them
          error.insertAfter(element);
        },
        highlight: function(element) {
          $(element).addClass("error").removeClass("valid");
        },
        unhighlight: function(element) {
          $(element).removeClass("error").addClass("valid");
        },
        submitHandler: function(form) {
          // Hide loading indicator
          $(".loading-indicator").hide();
          $(".button-text").show();
          // var services_ids = $("input[name='service[]']:checked").map(function() {
          //   return this.value;
          // }).get();

          var formData = $(form).serializeArray();
          formData.push({
            name: "services_ids",
            value: services_ids
          });

          $.ajax({
            method: "POST",
            url: "<?php echo base_url('contact-enquiry'); ?>",
            data: formData,
            success: function(response) {
              // Hide loading indicator
              // $(".loading-indicator").hide();
              // $(".button-text").show();
              // $('#exampleModal').modal('hide');
              // alert(response);

              // Parse the JSON response
              var responseData = JSON.parse(response);
              console.log(responseData.status);
              // Check status of the response
              if (responseData.status == "success") {
                // If success, show success message
                toastr.success(responseData.message);
                $('#contact-form')[0].reset();
                $('.contact-form')[0].reset();
              } else {
                // If error, show error message
                toastr.error(responseData.message);
              }
            },
            error: function(xhr, status, error) {
              // Hide loading indicator
              $(".loading-indicator").hide();
              $(".button-text").show();
              // Show error message
              toastr.error("Error: " + xhr.responseText);
            }
          });
        }
      });
    });



    $(function() {
      $("form[name='careeerForm']").validate({
        rules: {
          career_name: "required",
          subject: "required",
          career_email: {
            required: true,
            email: true
          },
          careeer_mobile: {
            required: true,
            minlength: 10,
            maxlength: 10
          },
          career_list: "required",
          resume: "required",

          message: "required",
          captcha: "required",
        },
        messages: {
          career_name: "Enter Name",
          subject: "Enter Subject",
          careeer_mobile: {
            required: "Enter Mobile Number",
            minlength: "Enter Valid  Number",
            maxlength: "Enter Valid  Number",
          },
          career_list: "Please select an option",
          resume: "",

          career_email: "Enter email address",
          message: "Please write a message",
          captcha: "Please write a Captcha",

        },
        errorPlacement: function(error, element) {
          // Ensure error messages appear below the input fields without hiding them
          error.insertAfter(element);
        },
        highlight: function(element) {
          $(element).addClass("error").removeClass("valid");
        },
        unhighlight: function(element) {
          $(element).removeClass("error").addClass("valid");
        },
        submitHandler: function(form) {

          // Show loading indicator
          $(".button-text").hide();
          $(".loading-indicator").show();

          var formData = new FormData(form);

          // Add any additional fields or data to the FormData if needed
          formData.append('otherField', 'otherValue');

          $.ajax({
            method: "POST",
            url: "<?php echo base_url('career-form'); ?>",
            data: formData,
            contentType: false,
            processData: false, // These two options are important for file uploads
            success: function(response) {
              // Hide loading indicator
              $(".loading-indicator").hide();
              $(".button-text").show();

              // Parse the JSON response
              var responseData = JSON.parse(response);

              // Handle the response
              if (responseData.status === "success") {
                // If success, display success message
                toastr.success(responseData.message);

                // Reset form
                form.reset();
              } else {
                // If error, display error message
                toastr.error(responseData.message);
              }
            }

          });
        }
      });
    });
  </script>