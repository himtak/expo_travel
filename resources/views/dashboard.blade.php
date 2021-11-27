@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(session()->has('success'))
        <div class="col-12 alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        {{-- {{ dd(config('settings')) }} --}}

        <h2 style="font-weight:bold;">Header Content</h2>
        <form class="col-12 my-3" method="POST" action="/dashboard/header">
            @csrf
            <label for="whatsapp_number">Whatsapp Number</label>
            <div class="input-group mb-5">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="whatsapp_number_d">+971</span>
                </div>
                <input
                name="whatsapp_number"
                type="text"
                class="form-control"
                id="whatsapp_number"
                placeholder="520000000"
                aria-label="whatsapp_number"
                aria-describedby="whatsapp_number_d"
                value="{{ config('settings.whatsapp_number') }}"
                >
            </div>

            <label for="call_number_main">Call Number (Main)</label>
            <div class="input-group mb-5">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="call_number_main_d">+971</span>
                </div>
                <input
                name="call_number_main"
                type="text"
                class="form-control"
                id="call_number_main"
                placeholder="520000000"
                aria-label="call_number_main"
                aria-describedby="call_number_main_d"
                value="{{ config('settings.call_number_main') }}"

                >
            </div>

            <label for="call_number_sec">Call Number (Secondary)</label>
            <div class="input-group mb-5">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="call_number_sec_d">+971</span>
                </div>
                <input
                name="call_number_sec"
                type="text"
                class="form-control"
                id="call_number_sec"
                placeholder="520000000"
                aria-label="call_number_sec"
                aria-describedby="call_number_sec_d"
                value="{{ config('settings.call_number_sec') }}"
                >
            </div>

            <label for="welcome_message_b">Welcome Message (Big)</label>
            <div class="input-group mb-4">
                <input
                name="welcome_message_b"
                id="welcome_message_b"
                type="text"
                class="form-control"
                value="{{ config('settings.welcome_message_b') }}"
                >
            </div>

            <label for="welcome_message_s">Welcome Message (Small)</label>
            <div class="input-group mb-4">
                <input
                name="welcome_message_s"
                type="text"
                class="form-control"
                id="welcome_message_s"
                value="{{ config('settings.welcome_message_s') }}"
                >
            </div>

            <button class="mb-4 btn btn-block btn-success btn-lg">Save Header</button>
            <hr><br>
        </form>




        <h2 style="font-weight:bold;">Promotions Content</h2>
        <form class="col-12 mb-3" method="POST" action="/dashboard/promotions" enctype="multipart/form-data">
            @csrf
            <div class="mb-5 mt-2">
                Choose how many Promotions to show:
                <select class="custom-select my-1 mr-sm-2" id="promotions_number" name="promtions_number">
                <option value="0" {{ config('settings.promtions_number') == '0' ? 'selected' : ''}}>No Promotions</option>
                <option value="1" {{ config('settings.promtions_number') == '1' ? 'selected' : ''}}>One</option>
                <option value="2" {{ config('settings.promtions_number') == '2' ? 'selected' : ''}}>Two</option>
                <option value="3" {{ config('settings.promtions_number') == '3' ? 'selected' : ''}}>Three</option>
                <option value="4" {{ config('settings.promtions_number') == '4' ? 'selected' : ''}}>Four</option>
                </select>
            </div>

            @for ($i = 1; $i < 5; $i++)
            <h3 class="mb-3" style="font-weight:bold;">Promotion {{ $i }}</h3>
            <label for="promotion_{{ $i }}_photo">Promotion {{ $i }} photo</label>
            <div class="custom-file mb-4">
                <input name="promotion_{{ $i }}_photo" type="file" class="custom-file-input" id="promotion_{{ $i }}__file">
                <label class="custom-file-label" for="promotion_{{ $i }}__file">Choose file</label>
            </div>

            <label for="promotion_{{ $i }}_title">Promotion {{ $i }} Title</label>
            <div class="input-group mb-3">
                <input
                name="promotion_{{ $i }}_title"
                type="text"
                class="form-control"
                id="promotion_{{ $i }}_title"
                value="{{ config('settings.promotion_'.$i.'_title') }}"
                >
            </div>
            <label for="promotion_{{ $i }}_price">Promotion {{ $i }} price</label>
            <div class="input-group mb-3">
                <input
                name="promotion_{{ $i }}_price"
                type="text"
                class="form-control"
                id="promotion_{{ $i }}_price"
                value="{{ config('settings.promotion_'.$i.'_price') }}"

                >
            </div>

            <div class="form-row">
                <div class="col">
                    <label for="promotion_{{ $i }}_start">Promotion {{ $i }} Start Date</label>
                    <div class="input-group mb-3">
                        <input
                        name="promotion_{{ $i }}_start"
                        type="date"
                        class="form-control"
                        id="promotion_{{ $i }}_start"
                        value="{{ config('settings.promotion_'.$i.'_start') }}"
                        >
                    </div>
                </div>
                <div class="col">
                    <label for="promotion_{{ $i }}_end">Promotion {{ $i }} End Date</label>
                    <div class="input-group mb-3">
                        <input
                        name="promotion_{{ $i }}_end"
                        type="date"
                        class="form-control"
                        id="promotion_{{ $i }}_end"
                        value="{{ config('settings.promotion_'.$i.'_end') }}"
                        >
                    </div>
                </div>
            </div>

            <hr><br>
            @if($i < 4)
            <div class="mt-5"></div>
            @endif
            @endfor
            <button class="mb-4 btn btn-block btn-success btn-lg">Save Promotions</button>

            <hr><br>
        </form>



        <h2 style="font-weight:bold;">About Us Content</h2>
        <form class="col-12 my-3" method="POST" action="/dashboard/aboutus">

            @csrf
            <label for="about_title">About Us Title</label>
            <div class="input-group mb-4">
                <input
                name="about_title"
                type="text"
                class="form-control"
                id="about_title"
                value="{{ config('settings.about_title') }}"
                >
            </div>

            <label for="about_decs">About Us Descriptions</label>
            <div class="input-group mb-4">
                <textarea
                id="about_decs"
                rows="5"
                name="about_decs"
                class="form-control"
                aria-label="Welcome Message"
                >{{ config('settings.about_decs') }}</textarea>
            </div>

            <button class="mb-4 btn btn-block btn-success btn-lg">Save About Us</button>
            <hr><br>
        </form>




        <h2 style="font-weight:bold;">Testimonial Content</h2>
        <form class="col-12 my-3" method="POST" action="/dashboard/testimonial">
            @csrf
            @for ($i = 1; $i < 3; $i++)
            <h3 class="mb-3" style="font-weight:bold;">Testimonial {{ $i }}</h3>
            <label for="testimonial_writer_{{ $i }}">Testimonial Writer</label>
            <div class="input-group mb-4">
                <input
                name="testimonial_writer_{{ $i }}"
                type="text"
                class="form-control"
                id="testimonial_writer_{{ $i }}"
                value="{{ config('settings.testimonial_writer_'.$i) }}"
                >
            </div>
            <label for="testimonial_content_{{ $i }}">Testimonial Content</label>
            <div class="input-group mb-4">
                <textarea id="testimonial_content_{{ $i }}" name="testimonial_content_{{ $i }}" class="form-control" aria-label="Welcome Message">{{ config('settings.testimonial_content_'.$i) }}</textarea>
            </div>
            @if($i)

            @endif
            <hr><br>
            @endfor
            <button class="mb-4 btn btn-block btn-success btn-lg">Save Testimonials</button>
            <hr><br>
        </form>



        <h2 style="font-weight:bold;">Services Content</h2>
        <form class="col-12 my-3" method="POST" action="/dashboard/services">
            @csrf
            @for ($i = 1; $i < 6; $i++)
            <h3 class="mb-3" style="font-weight:bold;">Service {{ $i }}</h3>
            <label for="service_title_{{ $i }}">Service Title</label>
            <div class="input-group mb-4">
                <input
                name="service_title_{{ $i }}"
                type="text"
                class="form-control"
                id="service_title_{{ $i }}"
                value="{{ config('settings.service_title_'.$i) }}"
                >
            </div>
            <label for="service_desc_{{ $i }}">Service Descriptions</label>
            <div class="input-group mb-4">
                <textarea id="service_desc_{{ $i }}" name="service_desc_{{ $i }}" class="form-control" aria-label="Welcome Message">{{ config('settings.service_desc_'.$i) }}</textarea>
            </div>
            @if($i)

            @endif
            <hr><br>
            @endfor
            <button class="mb-4 btn btn-block btn-success btn-lg">Save services</button>
            <hr><br>
        </form>





        <h2 style="font-weight:bold;">Video Content</h2>
        <form class="col-12 my-3" method="POST" action="/dashboard/video" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="video_title">Video Title</label>
                <input type="text" name="video_title" id="video_title" class="form-control" value="{{ config('settings.video_title') }}" >
            </div>

            <div class="form-group">
              <label for="video_link">Video Link</label>
              <input type="text" name="video_link" id="video_link" class="form-control" value="{{ config('settings.video_link') }}">
            </div>

            <label for="video_photo">Video photo</label>
            <div class="custom-file mb-4">
                <input name="video_photo" type="file" class="custom-file-input" id="video__photo">
                <label class="custom-file-label" for="video__photo">Choose file</label>
            </div>

            <button class="mb-4 btn btn-block btn-success btn-lg">Save services</button>
            <hr><br>
        </form>



        <h2 style="font-weight:bold;">Social Media Content</h2>
        <form class="col-12 my-3" method="POST" action="/dashboard/social-media">
            @csrf

            <div class="form-group">
                <label for="instagram_link">Instagram Link</label>
                <input type="text" name="instagram_link" id="instagram_link" class="form-control" value="{{ config('settings.instagram_link') }}">
            </div>
            <div class="form-group">
              <label for="twitter_link">Twitter Link</label>
              <input type="text" name="twitter_link" id="twitter_link" class="form-control" value="{{ config('settings.twitter_link') }}">
            </div>
            <div class="form-group">
                <label for="facebook_link">Facebook Link</label>
                <input type="text" name="facebook_link" id="facebook_link" class="form-control" value="{{ config('settings.facebook_link') }}">
            </div>
            <div class="form-group">
            <label for="linkedin_link">Linkedin Link</label>
            <input type="text" name="linkedin_link" id="linkedin_link" class="form-control" value="{{ config('settings.linkedin_link') }}">
            </div>



            <button class="mb-4 btn btn-block btn-success btn-lg">Save services</button>
            <hr><br>
        </form>
    </div>
</div>
@endsection
