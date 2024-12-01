@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-light" style="height:100vh; display: flex; align-items: center; justify-content: center;">
    <div class="container text-center">
        <div class="row align-items-center">
            <!-- Left Section -->
            <div class="col-lg-6 col-md-12 mb-4">
                <h1 class="display-4 text-primary fw-bold" style="font-family: 'Poppins', sans-serif;">Ku Soo Dhawoow TaloWadaag</h1>
                <p class="lead text-secondary" style="font-size: 1.2rem;">Bogga ugu fiican ee ardaydu ay ku wadaagaan fikradahooda, ku bartaan wax cusub, kuna dhiirrigeliyaan is dhexgal wax-ku-ool ah.</p>
                <p class="text-muted">Waxaa sameeyey: <span class="fw-bold text-dark">Gurey Technology</span></p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg mt-3 me-2">Ku Biir Hadda</a>
                    <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg mt-3">Soo Gal</a>
                </div>
            </div>

            <!-- Right Section -->
            <div class="col-lg-6 col-md-12">
                <img src="{{ asset('assets/img/talowada.jpg') }}" alt="TaloWadaag" class="img-fluid rounded shadow-lg" style="max-height: 600px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Additional Sections -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="fw-bold">Maxaan U Dooranayaa TaloWadaag?</h2>
                <p class="lead">Faa'iidooyinka aad ka heli karto boggeena si fudud oo casri ah.</p>
            </div>
        </div>
        <div class="row text-center g-4">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded bg-white text-dark shadow-sm">
                    <i class="fas fa-users fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Is Dhexgal Fudud</h5>
                    <p class="text-muted">Waxaad si fudud u heli kartaa is dhexgal ku saabsan mawduucyada kala duwan oo aad kula wadaagi karto ardayda kale ra'yigaaga iyo fikradahaaga.</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded bg-white text-dark shadow-sm">
                    <i class="fas fa-lightbulb fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Fikrado Cusub</h5>
                    <p class="text-muted">Ku kobci aqoontaada adiga oo baranaya fikrado cusub oo ay la wadaagaan ardayda kale oo isku dan ah.</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded bg-white text-dark shadow-sm">
                    <i class="fas fa-award fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Horumarkaaga</h5>
                    <p class="text-muted">Waxaad heli doontaa horumar joogto ah oo ku saabsan xirfadahaaga iyo aqoontaada adiga oo ka faa'iidaysanaya bulshada.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="fw-bold text-primary">Ra'yiga Isticmaalayaasha</h2>
                <p class="lead text-muted">Ka boggo sheekooyinka guusha isticmaalayaashayada!</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg border-0 text-center">
                    <div class="card-body">
                        <img src="{{ asset('assets/img/team03.jpg') }}" alt="User 1" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
                        <h5 class="fw-bold">Ahmed Ali</h5>
                        <p class="text-muted">"TaloWadaag waxay iga caawisay inaan si fudud u wadaago fikradaha saaxiibaday."</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg border-0 text-center">
                    <div class="card-body">
                        <img src="{{ asset('assets/img/aboutus.webp') }}" alt="User 2" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
                        <h5 class="fw-bold">Layla Hassan</h5>
                        <p class="text-muted">"Madalku waa mid hal-abuur iyo wada shaqeyn leh."</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg border-0 text-center">
                    <div class="card-body">
                        <img src="" alt="User 3" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
                        <h5 class="fw-bold">Khadar Mohamed</h5>
                        <p class="text-muted">"Boggu wuxuu ii suurtageliyay inaan si wanaagsan u horumariyo aqoontayda."</p>
                    </div>
                </div>
            </div>
        </div>{{ asset('assets/img/team01.jpg') }}
    </div>
</section>

<!-- FAQ Section -->
<!-- FAQ Section -->
<section class="py-5 bg-light" id="faq">
    <div class="container">
        <!-- Section Header -->
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="fw-bold text-primary">Su’aalaha Badan La Weydiiyo</h2>
                <p class="lead text-muted">Halkan waxaad ka heli kartaa jawaabaha su’aalaha inta badan la is weydiiyo.</p>
            </div>
        </div>
        
        <!-- FAQ Accordion -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading1">
                            <button class="accordion-button fw-bold text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                Sidee u diiwaangelin karaa?
                            </button>
                        </h2>
                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Waxaad ku diiwaangelin kartaa adiga oo gujinaya badhanka "Ku Biir Hadda", kadibna buuxiya foomka isdiiwaangelinta.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading2">
                            <button class="accordion-button collapsed fw-bold text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                Ma isticmaali karaa si bilaash ah?
                            </button>
                        </h2>
                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Haa, adeegga TaloWadaag waa bilaash waana kuu furan yahay adiga iyo dhammaan isticmaalayaasha.
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading3">
                            <button class="accordion-button collapsed fw-bold text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                Maxaa faa’iido ah oo aan ka heli karaa?
                            </button>
                        </h2>
                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Waxaad ka faa'iidi kartaa is-dhexgalka bulshada, barashada fikrado cusub, iyo kobcinta aqoontaada xirfadeed.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading4">
                            <button class="accordion-button collapsed fw-bold text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                Sideen ula xiriiri karaa taageerada?
                            </button>
                        </h2>
                        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Waxaad nala soo xiriiri kartaa adiga oo isticmaalaya bogga "Nala Soo Xiriir" ama e-mail ku soo diraya support@talowadaag.com.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5 bg-white text-center">
    <div class="container">
        <h2 class="fw-bold text-primary">Soo Degso App-ka TaloWadaag</h2>
        <p class="lead text-muted">Waxaad heli kartaa adeegyo fudud oo deg deg ah oo ku jira gacantaada.</p>
        <div class="d-flex justify-content-center mt-4">
            <a href="#" class="btn btn-dark btn-lg me-3">
                <i class="fab fa-apple me-2"></i> App Store
            </a>
            <a href="#" class="btn btn-success btn-lg">
                <i class="fab fa-google-play me-2"></i> Google Play
            </a>
        </div>
    </div>
</section>


<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="fw-bold text-primary">Goobaha iyo Xogta Nala Soo Xiriir</h2>
                <p class="lead text-muted">Ka hel goobaha iyo faahfaahinta muhiimka ah ee naga midka ah khariidada hoose.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h4 class="fw-bold">Nala Soo Xiriir</h4>
                <p class="text-muted">Waxaad nala soo xiriiri kartaa wakhti kasta adiga oo adeegsanaya xogtan hoose:</p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt text-primary"></i> Galkacyo, Somalia</li>
                    <li><i class="fas fa-phone-alt text-primary"></i> +252 0906252473</li>
                    <li><i class="fas fa-envelope text-primary"></i> info@talowadaag.com</li>
                </ul>
                <a href="#" class="btn btn-primary mt-3">Fariin Nagu Soo Dir</a>
            </div>
            <div class="col-lg-6">
                <!-- Embed Google Map -->
                <div class="ratio ratio-16x9">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.9367364551213!2d44.7767295153168!3d2.0334573513254376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3d38bc9a2f83f1f5%3A0xf1742d0c88b9eb90!2sGalkacyo!5e0!3m2!1sen!2sso!4v1697541234567" 
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="fw-bold">Dhacdooyinka Soo Socda</h2>
                <p class="lead">Ka qayb qaado dhacdooyinka xiisaha leh oo horumarkaaga ka qayb qaata.</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Event 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card bg-light text-dark shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary">Webinar: Kobcinta Xirfadaha</h5>
                        <p class="text-muted">Ku biir webinar-ka si aad u barato xirfadaha muhiimka ah ee aad u baahan tahay.</p>
                        <p><i class="fas fa-calendar-alt text-primary"></i> 15-ka December, 2024</p>
                        <a href="#" class="btn btn-primary">Is Diiwaan Geli</a>
                    </div>
                </div>
            </div>
            <!-- Event 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card bg-light text-dark shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary">Tartanka Fikradaha Cusub</h5>
                        <p class="text-muted">Ka qayb qaado tartanka oo soo bandhig fikradaada hal-abuurka ah.</p>
                        <p><i class="fas fa-calendar-alt text-primary"></i> 25-ka December, 2024</p>
                        <a href="#" class="btn btn-primary">Ka Qayb Qaado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light text-center">
    <div class="container">
        <h2 class="fw-bold text-primary">Isku Diiwaangeli Soo Wargelinta</h2>
        <p class="lead text-muted">Ku hel wararka ugu dambeeya iyo maqaallo xiiso leh email-kaaga.</p>
        <form action="#"  class="mt-4">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="email" class="form-control form-control-lg" placeholder="Gali Email-kaaga" required>
                        <button class="btn btn-primary btn-lg" type="submit">Is Diiwaangeli</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="fw-bold text-primary">Kooxdayada</h2>
                <p class="lead text-muted">Kooxda hormuudka ah ee ka dambeysa TaloWadaag.</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Team Member 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg border-0 text-center">
                    <img src="{{ asset('assets/img/team01.jpg') }}" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px;" alt="Team Member">
                    <div class="card-body">
                        <h5 class="fw-bold">Ahmed Gurey</h5>
                        <p class="text-muted">Hogaamiyaha Mashruuca</p>
                        <a href="#" class="btn btn-link text-primary">Raac Profile-ka</a>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg border-0 text-center">
                    <img src="{{ asset('assets/img/team01.jpg') }}" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px;" alt="Team Member">
                    <div class="card-body">
                        <h5 class="fw-bold">Axmed Omar</h5>
                        <p class="text-muted">Xiriirka Bulshada</p>
                        <a href="#" class="btn btn-link text-primary">Raac Profile-ka</a>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-lg border-0 text-center">
                    <img src="{{ asset('assets/img/team03.jpg') }}" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px;" alt="Team Member">
                    <div class="card-body">
                        <h5 class="fw-bold">Mohamed Ali</h5>
                        <p class="text-muted">Hormarinta Teknolojiyada</p>
                        <a href="#" class="btn btn-link text-primary">Raac Profile-ka</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="fw-bold text-primary">Tirakoobyada Muhiimka ah</h2>
                <p class="lead text-muted">Waxaan ka shaqaynay si aan u gaadhno guulo waaweyn.</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Statistic 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow text-center py-4">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="bi bi-person-check fs-1 text-primary"></i>
                        </div>
                        <h2 class="fw-bold">500+</h2>
                        <p class="text-muted">Arday Diiwaangashan</p>
                    </div>
                </div>
            </div>
            <!-- Statistic 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow text-center py-4">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="bi bi-book-half fs-1 text-success"></i>
                        </div>
                        <h2 class="fw-bold">1,000+</h2>
                        <p class="text-muted">Koorsooyin la bixiyay</p>
                    </div>
                </div>
            </div>
            <!-- Statistic 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow text-center py-4">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="bi bi-graph-up-arrow fs-1 text-warning"></i>
                        </div>
                        <h2 class="fw-bold">95%</h2>
                        <p class="text-muted">Guusha Macaamiisha</p>
                    </div>
                </div>
            </div>
            <!-- Statistic 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow text-center py-4">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="bi bi-people fs-1 text-danger"></i>
                        </div>
                        <h2 class="fw-bold">50+</h2>
                        <p class="text-muted">Xubnaha Kooxda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5 text-white position-relative" style="background: linear-gradient(to right, #4e54c8, #8f94fb); overflow: hidden;">
    <!-- Background Decoration -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url(''); opacity: 0.1; z-index: 1;"></div>
    
    <div class="container text-center position-relative" style="z-index: 2;">
        <!-- Heading -->
        <h2 class="display-3 fw-bold text-uppercase mb-4" style="letter-spacing: 3px; text-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
            Ku Biir Bulshadeena Maanta!
        </h2>
        <!-- Subheading -->
        <p class="lead mb-5" style="font-size: 1.25rem; line-height: 1.8; max-width: 700px; margin: 0 auto;">
            Fursad gaar ah oo aad ku noqon karto qof firfircoon, hal-abuur leh, oo ku kobciya xirfadahaaga, una noqda qeyb muhiim ah oo ka mid ah bulshada.
        </p>
        <!-- Buttons -->
        <div class="d-flex justify-content-center gap-4">
            <a href="{{ route('register') }}" class="btn btn-lg btn-primary px-5 py-3 fw-bold text-uppercase shadow" style="border-radius: 50px;">
                <i class="fas fa-user-plus me-2"></i> Ku Biir Hadda
            </a>
            <a href="" class="btn btn-lg btn-outline-light px-5 py-3 fw-bold text-uppercase shadow" style="border-radius: 50px;">
                <i class="fas fa-envelope me-2"></i> Nala Soo Xiriir
            </a>
        </div>
    </div>

    <!-- Decorative Floating Elements -->
    <div class="position-absolute rounded-circle bg-light" style="width: 150px; height: 150px; bottom: -50px; left: -50px; opacity: 0.3; z-index: 0;"></div>
    <div class="position-absolute rounded-circle bg-light" style="width: 200px; height: 200px; top: -70px; right: -70px; opacity: 0.3; z-index: 0;"></div>
</section>


@endsection
