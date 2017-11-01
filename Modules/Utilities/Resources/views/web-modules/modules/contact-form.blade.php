<div class="col-md-{{ $data['width'] }}">
    @include('utilities::web-modules.modules.sub.title', ['h' => 3, 'title'=> $data['title'][$lang]])
    {{--<h3 class="line-bottom mt-0 mb-20">Interested in discussing?</h3>--}}
    {!! $data['text_editor'][$lang] !!}
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
