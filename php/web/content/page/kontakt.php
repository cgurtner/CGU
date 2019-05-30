<?php

$alert = '';
if (isset($_POST['contact'])) {
    $contactFormData = contactFormData();
    $contactFormError = contactFormError($contactFormData);
    if (isset($contactFormError) && !in_array(false, $contactFormError)) {
        if (sendEmail($contactFormData)) {
            unset($contactFormData);
            $alert = '<div id="alert-contact" class="alert alert-success">';
            $alert .= '<strong>Danke für Ihre Nachricht!</strong><br>';
            $alert .= 'Normalerweise melde ich mich innerhalb von 48 Stunden.';
            $alert .= '</div>';
        }
    } else if (isset($contactFormError) && in_array(false, $contactFormError)) {
        $alert = '<div id="alert-contact" class="alert alert-danger">';
        $alert .= '<strong>Falscheingaben</strong><br>';
        $alert .= 'Bitte prüfen Sie Ihre Eingaben.';
        $alert .= '</div>';
    }
}

?>
<main class="fade-in">
    <div class="container">
        <section>
            <?php include_once("content/comp/header.php"); ?>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p class="mb-3">
                        Sie haben fachliche Fragen und wünschen nähere Informationen?
                        Nutzen Sie das nebenstehende Kontaktformular. Innerhalb von 48 Stunden erhalten Sie meine
                        Antwort.
                    </p>
                    <address>
                        <p>
                            <strong>Cyrill Gurtner</strong><br>
                            Software Developer
                        </p>
                        <p>
                            Bielackerstrasse 72<br>
                            CH-5014 Gretzenbach
                        </p>
                        <p>
                            <a id="cml"></a><br>
                            <a href="<?php echo CONFIG['baseUrl']; ?>"><?php echo CONFIG['baseUrlAsShown']; ?></a>
                        </p>
                    </address>
                    <p>
                        <strong>Cryptographic Data</strong><br>
                        <a href="file/id_rsa.pub">SSH-RSA</a>
                    </p>
                </div>
                <div class="col-12 col-sm-6 mb-5">
                    <?php echo $alert; ?>
                    <form method="post" action="<?php echo $page['url']; ?>">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="vname">Vorname</label>
                                    <input type="text" name="vname"
                                           value="<?php echo (isset($contactFormData['vname'])) ? $contactFormData['vname'] : ''; ?>"
                                           class="form-control <?php echo (isset($contactFormError['vname-valid']) && $contactFormError['vname-valid'] == false) ? 'is-invalid' : ''; ?>"
                                           id="vname">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text"
                                           value="<?php echo (isset($contactFormData['name'])) ? $contactFormData['name'] : ''; ?>"
                                           class="form-control <?php echo (isset($contactFormError['name-valid']) && $contactFormError['name-valid'] == false) ? 'is-invalid' : ''; ?>"
                                           id="name" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input type="text"
                                           value="<?php echo (isset($contactFormData['email'])) ? $contactFormData['email'] : ''; ?>"
                                           class="form-control <?php echo (isset($contactFormError['email-valid']) && $contactFormError['email-valid'] == false) ? 'is-invalid' : ''; ?>"
                                           id="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="message">Nachricht</label>
                                    <textarea
                                            class="form-control <?php echo (isset($contactFormError['message-valid']) && $contactFormError['message-valid'] == false) ? 'is-invalid' : ''; ?>"
                                            id="message" name="message"
                                            rows="10"><?php echo (isset($contactFormData['message'])) ? $contactFormData['message'] : ''; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="g-recaptcha"
                                     data-sitekey="<?php echo CONFIG['recaptcha-client-key']; ?>"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <button type="submit" class="btn btn-primary d-inline-block mt-3" name="contact"
                                            value="sent">Senden
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>