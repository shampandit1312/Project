<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>contact us</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">  
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <?php include 'header.php';?>
  <main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg mt-5" style="margin-top: 20px;">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">
              <div class="address">
                 
                <h4>Apply for Passport via e-Form Submission</h4>
                <ul>
                <li>To apply for fresh or reissue of passport via e-Form Submission, users need to register on Passport Seva Portal.</li>
                <li>After registering, login to the Passport Seva Portal.</li>
                <li>Download the e-Form for fresh or reissue of Passport.</li>
                <li>Fill the downloaded e-Form and click the Validate & Save button. This will generate an XML file which will be required later for uploading in the system.</li>
                <li>Upload the XML file through the Upload e-Form. Do not upload the PDF form at this stage as only XML file is accepted by the system.</li>
                <li>After uploading the form for fresh or reissue of Passport, click the "Pay and Schedule Appointment" link to schedule an appointment at Passport Seva Kendra (PSK).</li>

                <li>Search for Passport Seva Kendra (PSK) location and select your PSK.</li>
                <li>After booking the appointment at selected PSK, you can make an online payment through Credit/Debit Card (MasterCard & Visa), Internet Banking (State Bank of India (SBI) and Associate Banks Only) or SBI Bank Challan.</li>
                <li>You can calculate the fee for passport services through Online Fee Calculator.</li>

              </ul> 
              </div>

               
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->








  </main><!-- End #main -->

   <?php include 'footer.php';?>
</body>

</html>