<?php

$contactForm = checkContactForm();
$emailSent = '';
if (isset($contactForm['err']) && !in_array(false, $contactForm['err'])) {
    if (sendEmail($contactForm)) {
        $contactForm = null;
        $emailSent = '<div class="alert alert-success">';
        $emailSent .= 'Danke für Deine Nachricht! Normalerweise melde ich mich innerhalb von 48h bei Dir.';
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
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et
                    ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                    ipsum
                    dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                    dolore
                    magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                    Stet
                    clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et
                    ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                    ipsum
                    dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                    dolore
                    magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                    Stet
                    clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et
                    ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                    ipsum
                    dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                    dolore
                    magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                    Stet
                    clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

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