@extends('base')

@section('title')
    {{ $person->firstname }} {{ $person->lastname }}
@endsection

@section('headerImg')
    {{ Storage::url($person->headerImage) }}
@endsection

@section('name')
    {{ $person->firstname }} {{ $person->lastname }}
@endsection
{{-- headerImg --}}

@section('content')
    <!-- ======= Hero Section ======= -->
    <section style="background: url({{ Storage::url($person->coverImage) }}) top center; background-size: cover" id="hero"
        class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1 class="mb-5">{{ $person->firstname }} {{ $person->lastname }}</h1>
            <p>I'm in {{ $person->domain }} Domain</p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="{{ Storage::url($person->aboutImage) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3 class="mb-5">{{ $person->domain }}</h3>

                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Birthday:</strong> <span>{{ $person->birthday }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Phone:</strong> <span>{{ $person->phone }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                        <span>{{ $person->city }}, {{ $person->country }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>{{ $age }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>{{ $person->degree }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>{{ $person->email }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p style="text-align: justify">{{ $person->presentation }}</p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p style="text-align: justify">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Experience Section ======= -->

        <section id="experience" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Experience</h2>
                </div>
                <div class="d-flex-lg justify-content-center" data-aos="fade-up">
                    <div class="resume-item">
                        <h4>Master of Fine Arts Graphic Design</h4>
                        <h5>2015 - 2016</h5>
                        <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                        <p style="text-align: justify">Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero
                            voluptatum qui ut dignissimos deleniti nerada porti sand markend
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Experience Section -->

        <!-- ======= Education Section ======= -->
        <section id="education" class="resume section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Education</h2>
                </div>
                <div class="d-flex-lg justify-content-center" data-aos="fade-up">
                    <div class="resume-item">
                        <h4>Master of Fine Arts Graphic Design</h4>
                        <h5>2015 - 2016</h5>
                        <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                        <p style="text-align: justify">Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero
                            voluptatum qui ut dignissimos deleniti nerada porti sand markend
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Education Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p style="text-align: justify">
                        Envie d'en savoir plus sur mon profil contacter-moi par e-mail
                        ou directement par téléphone !
                    </p>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch h-50">
                        <div class="info">
                            <div class="address">
                                <a href="https://www.google.com/maps/place/{{ $person->city }}" target="_blank"
                                    rel="noopener">
                                    <i class="bi bi-geo-alt"></i>
                                </a>
                                <h4>Location:</h4>
                                <p>{{ $person->city }}, {{ $person->country }}</p>
                            </div>

                            <div class="email">
                                <a href="mailto:{{ $person->email }}">
                                    <i class="bi bi-envelope"></i>
                                </a>
                                <h4>Email:</h4>
                                <p>{{ $person->email }}</p>
                            </div>

                            <div class="phone">
                                <a href="tel:{{ $phone }}">
                                    <i class="bi bi-phone"></i>
                                </a>
                                <h4>Call:</h4>
                                <p>{{ $person->phone }}</p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Dynamic Portfolio</span></strong>
            </div>
            <div class="credits">
                by <a href="https://bootstrapmade.com/">Djimbalinux</a>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
