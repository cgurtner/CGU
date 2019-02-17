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
                                        <h2>Ich</h2>
                                    </header>
                                    <p>
                                        Ich, Cyrill Gurtner, bin ein <?php echo $age; ?> jähriger Softwareentwickler aus
                                        der Schweiz. Sehr früh merkte ich, dass
                                        mich die Programmierung interessiert und startete damit, kleine
                                        Terminal-Applikationen in C++ zu schreiben. Als die Berufswahl in der Schule
                                        ein Thema wurde, wusste ich schnell, dass ich Informatiker in Fachrichtung
                                        Applikationensentwicklung lernen möchte.
                                    </p>
                                    <p>
                                        Mit 16 jahren trat ich in die Informatischule Olten ein und absolvierte dort in
                                        2 Jahren alle Module zum
                                        Applikationsentwickler. Da ich die Möglichkeit hatte, zusätzlich alle Module aus
                                        der Fachrichtung Systemtechnik
                                        zu besuchen, schloss ich auch diese kantonal ab. Zum Abschluss meiner Lehre
                                        schrieb ich die individuelle praktische Arbeit (IPA) mit dem Titel "Web-Tool zur
                                        Protokollführung".
                                        Mit den Technologien HTML/CSS, PHP, MySQL und LaTeX entwickelte ich ein
                                        webbasiertes Tool um Meetings zu protokollieren,
                                        Teilnehmer einzuladen und zu verwalten sowie das Protokoll automatisiert als PDF
                                        zwischen allen Teilnehmer zu verteilen.
                                    </p>
                                    <p>
                                        Im Sommer 2013 schloss ich meine Lehre mit kantonaler Auszeichung ab.
                                    </p>
                                    <p>
                                        In meinem zweiten Lehrjahr startete ich ein Praktikum bei der Datahouse AG im
                                        Herzen von Zürich. Seither beschäftige ich mich dort mit der Konzipierung von
                                        Benutzeroberflächen, Softwarearchitekturen, Aufbau von komplexen Datenmodellen
                                        sowie der Unterhalt von bestehenden Webapplikationen. Auch nach meinem
                                        Praktikum blieb ich der Datahouse AG treu und arbeite bis heute an
                                        spannenden Projekten verschiedenster Branchen.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="row">
                            <div class="col-sm-12 col-box">
                                <div>
                                    <header>
                                        <h2>Werdegang</h2>
                                    </header>
                                    <section>
                                        <header>
                                            <h3>Karriere</h3>
                                        </header>
                                        <section>
                                            <header>
                                                <h4 class="inline">Software Developer ▪
                                                    <a href="https://www.datahouse.ch/" hreflang="de" target="_blank">
                                                        Datahouse AG
                                                    </a>
                                                </h4>
                                            </header>
                                            <dl class="row">
                                                <dt class="col-sm-4">Benutzeroberflächen</dt>
                                                <dd class="col-sm-8">
                                                    Techniche Konzipierung von Benutzeroberflächen mit modernen
                                                    Technologien wie HTML5, CSS3, SASS sowie JavaScript und JQuery.<br />
                                                    Implementation von modernen user interfaces in React in Verbindung
                                                    mit diversen modernen libraries.
                                                </dd>
                                                <dt class="col-sm-4">Softwarearchitektur</dt>
                                                <dd class="col-sm-8">
                                                    Implementation von komplexen Webapplikationen in PHP und Datenwebservices
                                                    in C++. Planung und modellierung von passenden relationalen
                                                    Datenbankmodellen.
                                                </dd>
                                                <dt class="col-sm-4">Schnittstellen</dt>
                                                <dd class="col-sm-8">
                                                    Entwicklung von API Schnittstellen und Bereitstellung für die
                                                    Anbindung an diverse Softwarelösungen. Implementationen
                                                    in Python oder PHP.
                                                </dd>
                                                <dt class="col-sm-4">Betrieb & Support</dt>
                                                <dd class="col-sm-8">
                                                    Instandhaltung von Betriebsprojekten und durchführen von
                                                    Fehleranalysen. Wartung von bestehenden oder entwickelten
                                                    Applikationen.
                                                </dd>
                                            </dl>
                                        </section>
                                    </section>
                                    <section>
                                        <header>
                                            <h3>Ausbildung</h3>
                                        </header>
                                        <section>
                                            <header>
                                                <h4 class="inline">Hochschule für Technik Rapperswil</h4>
                                            </header>
                                            <p>
                                                Duis gravida magna non tristique varius. Integer sagittis, erat quis
                                                blandit
                                                euismod, justo diam auctor erat, quis porta erat est ornare lectus. Duis
                                                ac
                                                urna ipsum. Proin eu vulputate diam. Quisque facilisis bibendum sem id
                                                bibendum. Donec dictum sagittis arcu, in vestibulum magna finibus et.
                                                Nunc
                                                at mauris tempus, finibus arcu et, consectetur sem. Pellentesque rutrum
                                                tincidunt orci in lobortis. Curabitur vitae lobortis purus. Fusce
                                                bibendum
                                                bibendum sagittis.
                                            </p>
                                        </section>
                                        <section>
                                            <header>
                                                <h4 class="inline">AKAD College</h4>
                                            </header>
                                            <p>
                                                Duis gravida magna non tristique varius. Integer sagittis, erat quis
                                                blandit
                                                euismod, justo diam auctor erat, quis porta erat est ornare lectus. Duis
                                                ac
                                                urna ipsum. Proin eu vulputate diam. Quisque facilisis bibendum sem id
                                                bibendum. Donec dictum sagittis arcu, in vestibulum magna finibus et.
                                                Nunc
                                                at mauris tempus, finibus arcu et, consectetur sem. Pellentesque rutrum
                                                tincidunt orci in lobortis. Curabitur vitae lobortis purus. Fusce
                                                bibendum
                                                bibendum sagittis.
                                            </p>
                                        </section>
                                        <section>
                                            <header>
                                                <h4 class="inline">Informatikschule Olten</h4>
                                            </header>
                                            <p>
                                                Duis gravida magna non tristique varius. Integer sagittis, erat quis
                                                blandit
                                                euismod, justo diam auctor erat, quis porta erat est ornare lectus. Duis
                                                ac
                                                urna ipsum. Proin eu vulputate diam. Quisque facilisis bibendum sem id
                                                bibendum. Donec dictum sagittis arcu, in vestibulum magna finibus et.
                                                Nunc
                                                at mauris tempus, finibus arcu et, consectetur sem. Pellentesque rutrum
                                                tincidunt orci in lobortis. Curabitur vitae lobortis purus. Fusce
                                                bibendum
                                                bibendum sagittis.
                                            </p>
                                        </section>
                                    </section>
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
                        <address class="home mt-2">
                            <p>
                                <strong>Cyrill Gurtner</strong><br>
                                Software Developer
                            </p>
                            <p>
                                Bielackerstrasse 72<br>
                                5014 Gretzenbach<br>
                                <a href="<?php echo CONFIG['baseUrl']; ?>"><?php echo CONFIG['baseUrlAsShown']; ?></a>
                            </p>
                            <p>
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