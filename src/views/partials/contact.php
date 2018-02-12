<div class="container-fluid">
    <div class="row bg-dark contactBanner">
        <div class="col-12 text-center">
            <div class="h-100 text-primary">
                <i class="fas fa-envelope fa-fw fa-5x"></i>
                <h1 class="text-light"><b>Get in Touch With Us</b></h1>
            </div>
        </div>
    </div>
</div><!-- end contact banner --> 
<div class="container" id="contact">
    <h1><b>Contact</b> Us</h1>
    <div class="row">
        <div class="col-md-8">
            <?php 
            // replace the email with yours
            $email = "email@domain.com";
            ?>
            <form action="https://formspree.io/<?= $email ?>" method="POST" class="text-primary">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" 
                                required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" name="phone" 
                                required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" name="email" 
                                required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea rows="10" cols="100" class="form-control" name="message" 
                                    required data-validation-required-message="Please enter your message" 
                                    maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <input type="hidden" name="_next" value="/">
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        <div class="col-md-4">
            <h5 class="text-primary">Get in <b>touch</b></h5>
            <p>Contact us and let us help you.</p>
            <hr>
            <h5 class="text-primary">How to <b>reach us</b></h5>
            <p>You can fill in the contact form or send an email to info@domain.com or call us at 123 456 789.</p>
        </div>
    </div>
</div><!-- end contact -->