@extends("layouts.app")

@section('title')
    Notice
@endsection

@section('content')
    <main class="main">
        <section id="notice" class="section notice">
            <div class="container page-top-headline">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8 text-center" data-aos="fade-in">
                        <h2>Notices</h2>
                    </div>
                </div>
                <div class="top-author" style="padding-left: 20px;">
                    <div class="author-items">

                        <!-- Single Item -->
                        <div class="item">
                            <div class="info" style="width: 100%;" data-aos="fade-up">
                                <h5 style="text-align: justify;">
                                    <a href="#notice" target="_blank">"আখেরি চাহার শোম্বা" উপলক্ষে নোটিশ</a>
                                </h5>
                                <ul>
                                    <li class="border">
                                        <span>Published: date</span>
                                    </li>
                                    <li>
                                        <a href="#notice" target="_blank" class="btn circle btn-dark border btn-sm text-center">
                                            <i class="fas fa-plus" style="color: #002147;"></i> Read More
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Repeat Single Item for other notices -->
                        <div class="item">
                            <div class="info" style="width: 100%;" data-aos="fade-in">
                                <h5 style="text-align: justify;">
                                    <a href="#notice" target="_blank">...</a>
                                </h5>
                                <ul>
                                    <li class="border"><span>Published: </span></li>
                                    <li>
                                        <a href="#notice" target="_blank" class="btn circle btn-dark border btn-sm text-center">
                                            <i class="fas fa-plus" style="color: #002147;"></i> Read More
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="more-btn col-md-12 text-center" style="padding-top: 25px;">
                            <a href="#notice" class="btn btn-success btn-md">View All Notices</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
