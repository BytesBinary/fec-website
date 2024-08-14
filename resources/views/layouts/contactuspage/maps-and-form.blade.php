<div class="row gy-4 mt-1">
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
    <iframe src="{{$map_and_forms['map_section']['map_url']}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when+-downgrade"></iframe>

    </div>

    <div class="col-lg-6">
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
            <div class="row gy-4">
                <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="{{$map_and_forms['form_section']['form']['name']}}" required="">
                </div>
                <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="{{$map_and_forms['form_section']['form']['email']}}" required="">
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="{{$map_and_forms['form_section']['form']['subject']}}" required="">
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="{{$map_and_forms['form_section']['form']['message']}}" required=""></textarea>
                </div>
                <div class="col-md-12 text-center">
                    <div class="loading">{{$map_and_forms['error_section']['loading']}}</div>
                    <div class="error-message"></div>
                    <div class="sent-message">{{$map_and_forms['error_section']['sent_message']}}</div>
                    <button type="submit">{{$map_and_forms['form_section']['button_text']}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
