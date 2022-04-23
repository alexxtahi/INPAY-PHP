<!DOCTYPE html>
<html lang="fr">

<head>
    @include('include.meta')


    <!-- Css Styles -->
    @include('include.css')
</head>

<body>
    <!-- Header Section -->
    @include('include.header')


    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__pic">
                        <img src="{{ asset('template/img/about/about-us.jfif') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <p>L’Institut national polytechnique Félix Houphouët-Boigny (INP-HB) est un établissement
                    public de formation supérieure, de recherche et de production situé à Yamoussoukro en Côte d'Ivoire.
                    Rassemblant huit écoles supérieures et de nombreux départements de formation et de recherche (DFR),
                    il compte environ 3000 étudiants.</p>

            </div>


            <!-- Breadcrumb Section Begin -->

            <section class="breadcrumb-option">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb__text">
                                <h2><span class="mw-headline" id="Structure">Structure</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <p>L’établissement est constitué de huit grandes écoles</p>
            </p>
            <ul>
                <li>École supérieure d'agronomie (ENSA et IAB)</li>
                <li>École supérieure de commerce et d'administration des entreprises (ESCAE)</li>
                <li>École supérieure d'industrie (ESI)</li>
                <li>École supérieure des mines et géologie (ESMG)</li>
                <li>École supérieure des travaux publics (ESTP)</li>
                <li>École de formation continue et de perfectionnement des cadres (EFCPC)</li>
                <li>École doctorale polytechnique (EDP)</li>
            </ul>

            <section class="breadcrumb-option">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb__text">
                                <h2><span class="mw-headline" id="Structure">Campus</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <p>
                L'Institut compte trois sites : le site sud, centre et nord. Le campus fait 146 hectares
            </p>
            <p>L'Institut compte huit grandes écoles, une classe préparatoire aux grandes écoles (CPGE),
                quatorze départements de formation et de recherche (DFR) et huit laboratoires.</p>
            <p>Il a treize amphithéâtres de 100 à 1500 places, trois bibliothèques, deux restaurants universitaires,
                deux résidences universitaires avec 3008 chambres individuelles, trois centres de santé et deux
                gymnases.</p>

            <section class="breadcrumb-option">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb__text">
                                <h2><span class="mw-headline" id="Structure">Site Sud</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <p>Le site Sud abritait initialement Ecole nationale supérieure des travaux publics (ENSTP).
                Il est reconnaissable par ses imposantes arcades et son architecture futuriste.
                Ses architectes sont Henry Pottier, Philippe Godin, Jacques Rechsteiner et Telesphore Koumé.</p>

            <p>Il comprend aujourd'hui les Ecoles, les Directions et services suivants :</p>
            <ul>
                <li>Ecole supérieure des travaux publics</li>
                <li>Ecole supérieure des mines et géologie</li>
                <li>DFR Mathématiques et Informatique</li>
                <li>DFR Bâtiments et Urbanisme</li>
                <li>DFR Sciences de la Terre et Ressources minières</li>
                <li>DFR Infrastructures et Transport</li>
                <li>Direction des ressources humaines</li>
                <li>Centre de promotion et d'expertise</li>
                <li>Centre régional de formation supérieure en métrologie</li>
            </ul>

            <section class="breadcrumb-option">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb__text">
                                <h2><span class="mw-headline" id="Structure">Site Centre</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <p>Les bâtiments du Site Centre ont à l’origine été ceux de l’Institut National Supérieur de l’Enseignement
                Technique (INSET).</p>

            <section class="breadcrumb-option">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb__text">
                                <h2><span class="mw-headline" id="Structure">Site Nord</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <p>Les bâtiments du Site Centre ont à l’origine été ceux de l’Ecole Nationale Supérieure d’Agronomie (ENSA)
                et de l’Institut Agricole de Bouaké (IAB)</p>


            <!-- About Section End -->

            <!-- Team Section Begin -->
            <section class="team spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <span>Notre Equipe</span>
                                <h2>INPAY</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="team__item">
                                <img src="{{ asset('template/img/team/Abdel.png') }}" alt="">
                                <h4>KONE Abdel</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="team__item">
                                <img src="{{ asset('template/img/team/alex.jpg') }}" alt="">
                                <h4>TAHI Alexandre</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="team__item">
                                <img src="{{ asset('template/img/team/chantal.jpg') }}" alt="">
                                <h4>TAMO Chantal</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="team__item">
                                <img src="{{ asset('template/img/team/olivier.jpg') }}" alt="">
                                <h4>TANOH Olivier</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team Section End -->

            <!-- Footer Section Begin -->
            @include('include.footer')

            <!-- Search Begin -->
            <div class="search-model">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="search-close-switch">+</div>
                    <form class="search-model-form">
                        <input type="text" id="search-input" placeholder="Search
                        here.....">
                    </form>
                </div>
            </div>
            <!-- Search End -->

            <!-- Js Plugins -->
            @include('include.js')
</body>

</html>
