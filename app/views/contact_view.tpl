{extends file="main.tpl"}

{block name=navigation}
    <a class="nav-item nav-link" href="{$conf->action_root}homeView">Home</a>
    <a class="nav-item nav-link" href="{$conf->action_root}carsView">Samochody</a>
    <a class="nav-item nav-link" href="{$conf->action_root}serviceView">Usługi</a>
    <a class="nav-item nav-link" href="{$conf->action_root}faqView">FAQ</a>
    <a class="nav-item nav-link active" href="{$conf->action_root}contactView">Kontakt <span class="sr-only"></span></a>
    {if \core\RoleUtils::inRole("admin")}
        <a class="nav-item nav-link" href="{$conf->action_root}transactionTableView">Transakcja</a>
    {/if}
    {if count($conf->roles)>0}
		<a class="nav-item nav-link" href="{$conf->action_root}logout">Wyloguj</a>
	{else}
		<a class="nav-item nav-link" href="{$conf->action_root}mainLogin">Zaloguj</a>
	{/if}
{/block}

{block name=main}
    <main>
        <section class="top-hero contact-hero">
            <div class="hero-shadow"></div>
            <p class="top-hero-text text-light ">Kontakt</p>
        </section>

        <section class="contact py-5">
            <div class="container">
                <div class="text-center py-5">
                    <p class="display-3">Napisz do nas!</p>
                    <p class="additional-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="row">
                    <div class="col-md-5 col-lg-4">
                        <div class="border p-5 mb-4 text-center">
                            <h2>Dane kontaktowe</h2>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <h3 class="mt-4">adres</h3>
                            <p>ul. Sezamowa 10</p>
                            <p>00-043 Warszawa</p>
                            <h3 class="mt-4">telefon</h3>
                            <p>+48 412 000 002</p>
                            <h3 class="mt-4">e-mail</h3>
                            <p>sitcar@mail.com</p>
                            <div class="contact-logo mt-5 pt-4 mb-n3 border-top fw-bold">
                                <i class="fas fa-car text-primary"></i> Sit<span class="text-primary">Car</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="border p-5 pb-4">
                            <h2 class="text-center">Formularz kontaktowy</h2>
                            <form class="mt-5" method="post" action="{$conf->action_root}sendMessage">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="contact-name">Imie:</label>
                                            <input type="text" class="form-control" id="contact-name" name="contact-name" value="{$contactForm->name}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="contact-surname">Nazwisko:</label>
                                            <input type="text" class="form-control" id="contact-surname" name="contact-surname" value="{$contactForm->surname}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label for="contact-email">E-mail:</label>
                                            <input type="text" class="form-control" id="contact-email" name="contact-email" value="{$contactForm->email}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label for="contact-topic">Temat:</label>
                                            <input type="text" class="form-control" id="contact-topic" name="contact-topic" value="{$contactForm->topic}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="contact-message">Treść wiadomości:</label>
                                        <textarea class="form-control mb-3" rows="6" id="contact-message" name="contact-message" ></textarea>
                                    </div>

                                    {include file='messages.tpl'}

                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary">Wyślij</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-map pb-5">
            <div class="container d-flex flex-column align-items-center">
                <p class="display-4 py-4">Mapa dojazdu</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d156388.35438506675!2d20.921112642622653!3d52.233065320871326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc669a869f01%3A0x72f0be2a88ead3fc!2sWarszawa!5e0!3m2!1spl!2spl!4v1620032106369!5m2!1spl!2spl"
                    style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </section>
    </main>
{/block}

{block name=footer}
    <footer class="bg-dark text-light">
		<p class="p-4 mb-0 text-center"> Copyright &copy; 2021 - Wypożyczalnia samochodów
			<b>Sit<span class="text-primary">Car</span></b>
		</p>
	</footer>	
{/block}