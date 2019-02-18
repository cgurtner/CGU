<?php

$dateNow = new DateTime();
$birthday = new DateTime('1992-07-20');
$age = $dateNow->diff($birthday)->y;

?>
<main class="fade-in">
    <div class="bg-fullscreen"></div>
    <div class="container">
        <section>
            <header>
                <div class="row pt-5">
                    <div class="col h1-box">
                        <h1 class="text-center">Cyrill Gurtner</h1>
                        <hr/>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                                <li class="breadcrumb-item active" property="itemListElement" typeof="ListItem">
                                    <a property="item" typeof="WebPage" href="home"><span
                                                property="name">Home</span></a>
                                    <meta property="position" content="1">
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </header>
            <div class="row">
                <div class="col-sm-12 col-md-8 mb-3 mb-md-5">
                    <section>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-box">
                                <div>
                                    <header>
                                        <h2>Herzlich willkommen</h2>
                                    </header>
                                    <p>
                                        Ich, Cyrill Gurtner, bin ein <?php echo $age; ?> jähriger Softwareentwickler aus
                                        der Schweiz. Sehr früh merkte ich, dass
                                        mich die Programmierung interessiert und startete damit, kleine
                                        Terminal-Applikationen in C++ zu schreiben. Als die Berufswahl in der Schule
                                        ein Thema wurde, war ich mir sicher, dass ich Informatiker mit Fachrichtung
                                        Applikationensentwicklung lernen werde.
                                    </p>
                                    <p>
                                        Mit 16 Jahren trat ich in die Informatikschule Olten ein und absolvierte dort in
                                        2 Jahren alle Module zum
                                        Applikationsentwickler. Da ich die Möglichkeit hatte, zusätzlich alle Module aus
                                        der Fachrichtung Systemtechnik
                                        zu besuchen, schloss ich auch diese kantonal ab. Zum Abschluss meiner Lehre
                                        schrieb ich die individuelle praktische Arbeit (IPA) mit dem Titel "Web-Tool zur
                                        Protokollführung".
                                        Mit den Technologien HTML/CSS, OO PHP, MySQL und LaTeX entwickelte ich ein
                                        webbasiertes Tool, um Meetings zu protokollieren, Teilnehmer einzuladen und
                                        zu verwalten. Aus den Eingaben im Tool konnte anschliessend ein PDF generiert
                                        werden, welches
                                        automatisch per E-Mail an alle Teilnehmer zur Einsicht freigegeben werden
                                        konnte.
                                    </p>
                                    <p>
                                        Im Sommer 2013 schloss ich meine Lehre mit kantonaler Auszeichung ab.
                                    </p>
                                    <p>
                                        In meinem dritten Lehrjahr startete ich ein Praktikum bei der Datahouse AG im
                                        Herzen von Zürich. Seit diesem Zeitpunkt beschäftige ich mich dort mit der
                                        Konzipierung von
                                        Benutzeroberflächen, mit Softwarearchitekturen, mit dem Aufbau von komplexen
                                        Datenmodellen,
                                        sowie mit dem Unterhalt von bestehenden Webapplikationen. Auch nach meinem
                                        Praktikum blieb ich der Datahouse AG treu und arbeite bis heute an
                                        spannenden Projekten verschiedenster Branchen.
                                    </p>
                                    <div class="text-right p-0">
                                        <a href="werdegang">Zu meinem Werdegang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-sm-12 col-md-4 mb-5 mb-md-0">
                    <div class="character dark-column mb-3">
                        <header>
                            <h2>Kontakt</h2>
                        </header>
                        <address class="home mt-2 mb-0">
                            <p>
                                <strong>Cyrill Gurtner</strong><br>
                                Software Developer
                            </p>
                            <p>
                                Bielackerstrasse 72<br>
                                5014 Gretzenbach<br>
                                <a href="<?php echo CONFIG['baseUrl']; ?>"><?php echo CONFIG['baseUrlAsShown']; ?></a>
                            </p>
                            <p class="mb-0">
                                <a href="kontakt">Kontaktformular</a>
                            </p>
                        </address>
                    </div>
                    <div class="character dark-column">
                        <header>
                            <h2>Technologie</h2>
                        </header>
                        <div class="tech-percent mt-2">
                            <span>PHP | OO PHP | Composer</span>
                            <small class="float-right">100%</small>
                            <div class="tech-perc-bar perc-100"></div>
                        </div>
                        <div class="tech-percent mt-3">
                            <span>HTML5 | CSS3 | SASS</span>
                            <small class="float-right">100%</small>
                            <div class="tech-perc-bar perc-100"></div>
                        </div>
                        <div class="tech-percent mt-3">
                            <span>JavaScript | JQuery</span>
                            <small class="float-right">75%</small>
                            <div class="tech-perc-bar perc-75"></div>
                        </div>
                        <div class="tech-percent mt-3">
                            <span>React</span>
                            <small class="float-right">75%</small>
                            <div class="tech-perc-bar perc-75"></div>
                        </div>
                        <div class="tech-percent mt-3">
                            <span>MySQL | PostgreSQL</span>
                            <small class="float-right">75%</small>
                            <div class="tech-perc-bar perc-75"></div>
                        </div>
                        <div class="tech-percent mt-3">
                            <span>Java</span>
                            <small class="float-right">75%</small>
                            <div class="tech-perc-bar perc-75"></div>
                        </div>
                        <div class="tech-percent mt-3">
                            <span>Python</span>
                            <small class="float-right">50%</small>
                            <div class="tech-perc-bar perc-50"></div>
                        </div>
                        <div class="tech-percent mt-3">
                            <span>Docker | Linux | Server</span>
                            <small class="float-right">50%</small>
                            <div class="tech-perc-bar perc-50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>