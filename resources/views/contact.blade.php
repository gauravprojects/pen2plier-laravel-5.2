@extends('layouts.master')

@section('content')


<!-- Start contact  -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <!-- start title -->
                    <div class="mu-title">
                        <h2>Get in Touch</h2>
                        <p>Our support team is always available to help you. Please contact us with your query and we assure you to reach back within 4 hours.</p>
                    </div>
                    <!-- end title -->
                    <!-- start contact content -->
                    <div class="mu-contact-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mu-contact-left">

                                    <form class="contactform" action="{{ route('contact_store') }}" method="post">
                                        <p class="comment-form-author">
                                            <label for="author">Name <span class="required">*</span></label>
                                            <input type="text" required="required" size="30" value="" name="author">
                                        </p>
                                        <p class="comment-form-email">
                                            <label for="email">Email <span class="required">*</span></label>
                                            <input type="email" required="required" aria-required="true" value="" name="email">
                                        </p>

                                        <p class="comment-form-number">
                                            <label for="number">Phone Number <span class="required">*</span></label>
                                            <input type="text" required="required" aria-required="true" value="" name="number">
                                        </p>



                                        <p class="comment-form-url">
                                            <label for="subject">Subject</label>
                                            <input type="text" name="subject">
                                        </p>
                                        <p class="comment-form-comment">
                                            <label for="comment">Message</label>
                                            <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                                        </p>
                                        <p class="form-submit">
                                            <input type="submit" value="Send Message" class="mu-post-btn" name="submit">
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mu-contact-right">
                                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC6qQ4kf5emREzP41yBtH09MCTXK9KZkHM
            &q=govindpuram+ghaziabad,up+india
            &center=28.691727,77.493399 &zoom=18" width="600px" height="600px"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end contact content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact  -->

@endsection