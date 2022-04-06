@extends('layouts.app')

@section('content')

    <div class="page-top" id="templatemo_contact">
    </div> <!-- /.page-header -->

    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6 map-wrapper">
                    <h3 class="widget-title">Our Location</h3>
                    <div class="contact-infos">
                        <ul>
                            <li>Tashkent city</li>
                            <li>Business centre</li>
                            <li>Tel: +99899-301-1798</li>
                            <li>Email: <a href="mailto:shukrullobk@gmail.com">shukrullobk@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <h3 class="widget-title">Contact Us</h3>
                    <div class="contact-form">
                        <form name="contactform" id="contactform" action="#" method="post">
                            <p>
                                <input name="name" type="text" id="name" placeholder="Your Name">
                            </p>
                            <p>
                                <input name="email" type="text" id="email" placeholder="Your Email">
                            </p>
                            <p>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                            </p>
                            <p>
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </p>
                            <input type="submit" class="mainBtn" id="submit" value="Send Message">
                        </form>
                    </div> <!-- /.contact-form -->
                </div>
            </div>
        </div>
    </div>


@endsection
