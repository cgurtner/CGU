<?php

$dateNow = new DateTime();
$birthday = new DateTime('1992-07-20');

?><main class="fade-in">
    <header>
        <div class="bg">
            <div class="pt-3" style="position: absolute; bottom: 0rem; left: 0; width: 100%; text-align: center; background-color: rgba(250, 250, 250, .5); height: 10rem;">
                <img src="../../gui/image/logo-no-name.png" class="img-fluid"  style="height: 65%;"/>
                <h1 style="letter-spacing: unset; font-size: 37px;"><span
                            style="font-weight: 300;">Cyrill</span>&nbsp;<span
                            style="font-weight: 600;">Gurtner</span></h1>
            </div>
        </div>
    </header>
    <div class="container mt-5">
        <section>
            <div class="row">
                <div class="col-sm-12 col-md-10">
                    <h2 class="text-center text-sm-left">Hi,</h2>
                    <p>
                        Vielen Dank, dass Du meine Webseite besuchst und Dich für meine Arbeit interessierst!
                    </p>
                    <p>
                        Ich, Cyrill Gurtner, bin ein <?php echo $dateNow->diff($birthday)->y; ?> jähriger Softwareentwickler aus der Schweiz. Bereits
                        früh entdeckte ich meine Affinität gegenüber der Softwareentwicklung. So kaufte ich mir mit 15 Jahren das ein Buch über die
                        C++ Programmierung, mit speziellem Fokus auf die Spieleprogrammierung.
                    </p>
                </div>
            </div>
        </section>
    </div>
</main>