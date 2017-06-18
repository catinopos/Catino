<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='css/opensans.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/default.css"/>
    <link rel="stylesheet" type="text/css" href="css/component.css"/>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/modernizr.js"></script>
    <link rel="stylesheet" href="css/green.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catinoSystem</title>

</head>
<body>


<header class="cd-header">
    <h1>catinoSystem - sistem za restorane</h1>
</header>

<main class="cd-main-content" class="container">
    <div class="cd-tab-filter-wrapper">
        <div class="cd-tab-filter">
            <ul class="cd-filters">
                <li class="placeholder">
                    <a data-type="all" href="#0">Sva jela i pića</a> <!-- selected option on mobile -->
                </li>
                <li class="filter"><a class="selected" href="#0" data-type="all">Sva jela i pića</a></li>
                <li class="filter" data-filter=".predjelo"><a href="#0" data-type="predjelo">Predjela</a></li>
                <li class="filter" data-filter=".sendvic"><a href="#0" data-type="sendvic">Sendviči</a></li>
                <li class="filter" data-filter=".ham"><a href="#0" data-type="ham">Hamgurgeri</a></li>
                <li class="filter" data-filter=".supa"><a href="#0" data-type="supa">Supe</a></li>
                <li class="filter" data-filter=".dezert"><a href="#0" data-type="dezert">Dezerti</a></li>
                <li class="filter" data-filter=".pice"><a href="#0" data-type="pice">Pića</a></li>

            </ul>
        </div>
    </div>

    <section class="cd-gallery">
        <ul>
                    <div class="md-modal md-effect-18" id="modal-<?php echo $row[0] ?>">
                        <div class="md-content">
                            <h3>catinoSystem</h3>
                            <div>
                                <p>Ovo tu je veoma bitno da mušterije ne bi slučajno kupile više.</p>
                                <ul>
                                    <?php echo round($row[2],2) ?>

                                </ul>
                                <button class="md-close">Ok</button>
                            </div>
                        </div>
                    </div>


            <ul id="MixItUp52C30B">
				<li class="mix jelo food apetizers starters entrees predjelo slano" style="display: inline-block;"><img src="img/predjelo.png" class="md-trigger" data-modal="modal-18" alt="Image 1"></li>
				<li class="mix jelo food apetizers starters entrees predjelo slatko" style="display: inline-block;"><img src="img/predjelo1.png" alt="Image 1"></li>
				<li class="mix jelo food sendvic sandwich slano" style="display: inline-block;"><img src="img/sendvic.png" alt="Image 1"></li>
				<li class="mix jelo food ham burger hamburger slano" style="display: inline-block;"><img src="img/hamburger.png" alt="Image 1"></li>
				<li class="mix jelo food supa supica soup slano" style="display: inline-block;"><img src="img/supa.png" alt="Image 1"></li>
				<li class="mix jelo food dezert slatko dezert kolacic dessert" style="display: inline-block;"><img src="img/kolac.png" alt="Image 1"></li>
				<li class="mix pice drink beer alkoholno" style="display: inline-block;"><img src="img/pivo.png" alt="Image 1"></li>
				<li class="mix pice juice drink kola koka gazirano bezalkoholno slatko" style="display: inline-block;"><img src="img/cola.png" alt="Image 1"></li>
				<li class="mix pice drink apple prirodni sokic dete bezalkoholno negazirano slatko" style="display: inline-block;"><img src="img/sokodjabuke.png" alt="Image 1"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
            <li class="gap"></li>
            <li class="gap"></li>
            <li class="gap"></li>
            <li class="gap"></li>
            <li class="gap"></li>
            <li class="gap"></li>
            <li class="gap"></li>
            <li class="gap"></li>
        </ul>
        <div class="cd-fail-message">Nema pronađenih proizvoda</div>
    </section>

    <div class="cd-filter">
        <form>
            <div class="cd-filter-block">
                <h4>Traži</h4>

                <div class="cd-filter-content">
                    <input type="search" placeholder="Slatko, dezert, kolac...">
                </div>
            </div>

            <div class="cd-filter-block">
                <h4>Želim da bude</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter=".slatko" type="checkbox" id="checkbox1">
                        <label class="checkbox-label" for="checkbox1">Slatko</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".slano" type="checkbox" id="checkbox2">
                        <label class="checkbox-label" for="checkbox2">Slano</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".kiselo" type="checkbox" id="checkbox3">
                        <label class="checkbox-label" for="checkbox3">Kiselo</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".gorko" type="checkbox" id="checkbox4">
                        <label class="checkbox-label" for="checkbox4">Gorko</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".gazirano" type="checkbox" id="checkbox5">
                        <label class="checkbox-label" for="checkbox5">Gazirano</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".negazirano" type="checkbox" id="checkbox6">
                        <label class="checkbox-label" for="checkbox6">Negazirano</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".alkoholno" type="checkbox" id="checkbox7">
                        <label class="checkbox-label" for="checkbox7">Alkoholno</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".bezalkoholno" type="checkbox" id="checkbox8">
                        <label class="checkbox-label" for="checkbox8">Bezalkoholno</label>
                    </li>
                </ul>
            </div>
        </form>
        <a class="cd-close">Sakri</a>
    </div>
    <a class="cd-filter-trigger">Filteri</a>
</main>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/main.js"></script>
<div class="md-overlay"></div>
<script src="js/classie.js"></script>
<script src="js/modalEffects.js"></script>
<script>
    var polyfilter_scriptpath = '/js/';
</script>
<script src="js/cssParser.js"></script>
<script src="js/css-filters-polyfill.js"></script>
<div class="logo">
    <img src="img/logo.png"/>
</div>
</body>
</html>