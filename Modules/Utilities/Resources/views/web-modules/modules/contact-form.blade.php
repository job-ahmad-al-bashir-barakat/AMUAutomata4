<div class="col-md-8">
    <h3 class="line-bottom mt-0 mb-20">Interested in discussing?</h3>
    <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error optio in quia ipsum quae neque alias eligendi, nulla nisi. Veniam ut quis similique culpa natus dolor aliquam officiis ratione libero. Expedita asperiores aliquam provident amet dolores.</p>
    <!-- Contact Form -->
    <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                </div>
            </div>
        </div>

        <div class="form-group">
            <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
        </div>
        <div class="form-group">
            <input name="form_botcheck" class="form-control" type="hidden" value="" />
            <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
            <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
        </div>
    </form>
</div>
