{extends file="main.tpl"}

{block name=navigation}
    <a class="nav-item nav-link" href="{$conf->action_root}homeView">Home</a>
    <a class="nav-item nav-link" href="{$conf->action_root}carsView">Samochody</a>
    <a class="nav-item nav-link" href="{$conf->action_root}serviceView">Usługi</a>
    <a class="nav-item nav-link active" href="{$conf->action_root}faqView">FAQ</a>
    <a class="nav-item nav-link" href="{$conf->action_root}contactView">Kontakt</a>
    {if \core\RoleUtils::inRole("admin")}
        <a class="nav-item nav-link" href="{$conf->action_root}transactionTableView">Transakcja <span class="sr-only"></span></a>
    {/if}
    {if count($conf->roles)>0}
		<a class="nav-item nav-link" href="{$conf->action_root}logout">Wyloguj</a>
	{else}
		<a class="nav-item nav-link" href="{$conf->action_root}mainLogin">Zaloguj</a>
	{/if}
{/block}

{block name=main}
    <main>
        <section class="top-hero faq-hero">
            <div class="hero-shadow"></div>
            <p class="top-hero-text text-light ">FAQ</p>
        </section>

        <section class="py-5 faq">
            <div class="container">
                <div class="py-md-5 text-center">
                    <p class="display-3">Najczęściej zadawane pytania</p>
                    <p class="additional-text py-5 py-md-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi atque
                        odio molestiae. Quidem voluptate, quibusdam adipisci delectus quae eaque facere suscipit hic
                        earum natus porro odit laudantium neque, temporibus tenetur?
                    </p>
                </div>

                <div class="row text-center">
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                </div>
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