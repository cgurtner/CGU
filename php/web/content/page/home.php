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
                                        zu verwalten. Aus den Eingaben im Tool konnte anschliessend ein PDF generiert werden, welches
                                        automatisch per E-Mail an alle Teilnehmer zur Einsicht freigegeben werden konnte.
                                    </p>
                                    <p>
                                        Im Sommer 2013 schloss ich meine Lehre mit kantonaler Auszeichung ab.
                                    </p>
                                    <p>
                                        In meinem dritten Lehrjahr startete ich ein Praktikum bei der Datahouse AG im
                                        Herzen von Zürich. Seit diesem Zeitpunkt beschäftige ich mich dort mit der Konzipierung von
                                        Benutzeroberflächen, mit Softwarearchitekturen, mit dem Aufbau von komplexen Datenmodellen,
                                        sowie mit dem Unterhalt von bestehenden Webapplikationen. Auch nach meinem
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
                                                <h4 class="inline">Software Developer<br />
                                                    <a href="https://www.datahouse.ch/" hreflang="de" target="_blank">
                                                        Datahouse AG
                                                    </a>
                                                </h4>
                                            </header>
                                            <dl class="row">
                                                <dt class="col-sm-4">Benutzeroberflächen</dt>
                                                <dd class="col-sm-8">
                                                    Techniche Konzipierung von Benutzeroberflächen mit modernen
                                                    Technologien wie HTML5/CSS3 inkl. SASS sowie JavaScript und JQuery.<br />
                                                    Implementation von modernen User-Interfaces in React in Verbindung
                                                    mit diversen modernen Libraries.
                                                </dd>
                                                <dt class="col-sm-4">Softwarearchitektur</dt>
                                                <dd class="col-sm-8">
                                                    Implementation von komplexen Webapplikationen in PHP und Datenwebservices
                                                    in C++. Planung und Modellierung von passenden relationalen
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
                                                <h4 class="inline">
                                                    Hochschule für Technik Rapperswil<br />
                                                    <a href="https://www.hsr.ch/" hreflang="de" target="_blank">hsr.ch</a>
                                                </h4>
                                            </header>
                                            <dl class="row">
                                            <dt class="col-sm-4">BSc FHO in Informatik</dt>
                                            <dd class="col-sm-8">
                                                Abschluss diverser Module in den Spezialisierungen
                                                Application Design, Software Engineering und
                                                Data Engineering.
                                            </dd>
                                            </dl>
                                        </section>
                                        <section>
                                            <header>
                                                <h4 class="inline">
                                                    AKAD College<br />
                                                    <a href="https://www.akad.ch/de-CH" hreflang="de" target="_blank">akad.ch</a>
                                                </h4>
                                            </header>
                                            <dl class="row">
                                            <dt class="col-sm-4">Eidg. Tech. Berufsmaturität</dt>
                                            <dd class="col-sm-8">
                                                Abschluss der technischen Berufsmaturität an der AKAD College
                                                in Zürich, Oerlikon. Teilnahme im Teilzeitpensum und
                                                parallele Weiteranstellung bei der Datahouse AG.
                                            </dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-4">Schwerpunkt & Abschluss</dt>
                                                <dd class="col-sm-8">
                                                    Schwerpunktfächer der technischen Berufsmaturität ist Mathematik und
                                                    die Naturwissenschaften Chemie & Physik. Abgschlossen habe ich
                                                    mit der interdisziplinären Projektarbeit (IDPA) im Fach
                                                    Physik.
                                                </dd>
                                            </dl>
                                        </section>
                                        <section>
                                            <header>
                                                <h4 class="inline">
                                                    Informatikschule Olten<br/>
                                                    <a href="https://www.informatikschuleolten.ch/" hreflang="de" target="_blank">informatikschuleolten.ch</a>
                                                </h4>
                                            </header>
                                            <dl class="row">
                                                <dt class="col-sm-4">Informatiker EFZ</dt>
                                                <dd class="col-sm-8">
                                                    Abschluss der vierjährigen Lehre zum Informatiker EFZ mit
                                                    Fachrichtung Applikationsentwicklung. Ab dem dritten Lehrjahr
                                                    Beginn meiner Anstellung bei der Datahouse AG.
                                                </dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-4">Systemtechnik</dt>
                                                <dd class="col-sm-8">
                                                    Alle Module die im Rahmen der Fachrichtung Systemtechnik
                                                    angeboten werden, habe ich ebenfalls besucht und
                                                    bestanden.
                                                </dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-4">IPA</dt>
                                                <dd class="col-sm-8">
                                                    Abschluss der Lehre mit der IPA "Web-Tool zur Protokollführung" mit
                                                    sehr guter Note und kantonaler Auszeichnung.
                                                </dd>
                                            </dl>
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