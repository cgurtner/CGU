<?php

$contactForm = checkContactForm();
$emailSent = '';
if (isset($contactForm['err']) && !in_array(false, $contactForm['err'])) {
    if (sendEmail($contactForm)) {
        $contactForm = null;
        $emailSent = '<div class="alert alert-success">';
        $emailSent .= 'Danke für Ihre Nachricht! Normalerweise melde ich mich innerhalb von 48 Stunden.';
        $emailSent .= '</div>';
    }
}

?>

<main>
    <div class="container">
        <section>
            <?php include_once("content/comp/header.php"); ?>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <p class="mb-3">
                        Sie haben fachliche Fragen oder möchten sich über eine mögliche
                        Zusammenarbeit erkunden? Dann nutzen Sie das nebenstehende Kontaktformular
                        und melden Sie sich bei mir. Normalerweise antworte ich innerhalb von 48 Stunden.
                    </p>
                    <address>
                        <p>
                            <strong>Cyrill Gurtner</strong><br>
                            Software Developer
                        </p>
                        <p>
                            Bielackerstrasse 72<br>
                            5014 Gretzenbach<br>
                            <a href="<?php echo CONFIG['baseUrl']; ?>"><?php echo CONFIG['baseUrlAsShown']; ?></a>
                        </p>
                    </address>
                    <p>
                        <strong>Cryptographic Data</strong><br>
                        <a href="file/id_rsa.pub">SSH-RSA</a>
                    </p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <?php echo $emailSent; ?>
                    <form method="post" action="<?php echo $page['url']; ?>">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="vname">Vorname</label>
                                    <input type="text" name="vname"
                                           value="<?php echo (isset($contactForm['data']['vname'])) ? $contactForm['data']['vname'] : ''; ?>"
                                           class="form-control <?php echo (isset($contactForm['err']['vname-empty']) && $contactForm['err']['vname-empty'] == false) ? 'is-invalid' : ''; ?>"
                                           id="vname">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text"
                                           value="<?php echo (isset($contactForm['data']['name'])) ? $contactForm['data']['name'] : ''; ?>"
                                           class="form-control <?php echo (isset($contactForm['err']['name-empty']) && $contactForm['err']['name-empty'] == false) ? 'is-invalid' : ''; ?>"
                                           id="name" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input type="email"
                                           value="<?php echo (isset($contactForm['data']['email'])) ? $contactForm['data']['email'] : ''; ?>"
                                           class="form-control <?php echo (isset($contactForm['err']['email-empty']) && ($contactForm['err']['email-empty'] == false || $contactForm['err']['email-invalid'] == false)) ? 'is-invalid' : ''; ?>"
                                           id="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="message">Nachricht</label>
                                    <textarea
                                            class="form-control <?php echo (isset($contactForm['err']['message-empty']) && $contactForm['err']['message-empty'] == false) ? 'is-invalid' : ''; ?>"
                                            id="message" name="message"
                                            rows="10"><?php echo (isset($contactForm['data']['message'])) ? $contactForm['data']['message'] : ''; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group justify-content-end">
                                    <button type="submit" class="btn btn-primary" name="contact">Senden</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>