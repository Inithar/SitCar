{extends file="main.tpl"}

{block name=navigation}
    <a class="nav-item nav-link" href="{$conf->action_root}homeView">Home</a>
    <a class="nav-item nav-link" href="{$conf->action_root}carsView">Samochody</a>
    <a class="nav-item nav-link active" href="{$conf->action_root}serviceView">Usługi <span class="sr-only"></span></a>
    <a class="nav-item nav-link" href="{$conf->action_root}faqView">FAQ</a>
    <a class="nav-item nav-link" href="{$conf->action_root}contactView">Kontakt</a>
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
        <section class="top-hero service-hero">
            <div class="hero-shadow"></div>
            <p class="top-hero-text text-light ">Usługi</p>
        </section>

        <section class="py-5 service-pricing">
            <div class="container">
                <div class="py-5 text-center">
                    <p class="display-3">Nasze usługi</p>
                    <p class="additional-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint commodi
                        dicta eum! Accusamus natus libero dolorum sed ipsa incidunt quis!</p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion" id='acc'>
                            <div class="card mb-4">
                                <div class="service-hero-box box-one">
                                    <div class="hero-shadow"></div>
                                    <p class="h-100 text-white text-center p-3">Krótkoterminowy wynajem samochodów</p>
                                </div>
                                <div data-bs-toggle="collapse" data-bs-target='#collapseOne' aria-expanded='true'
                                    aria-controls='collapseOne'>
                                    <div class="card-header text-center py-4">Rozwiń opis
                                        <i class="fas fa-angle-double-down ml-4"></i>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent='#acc'>
                                    <div class="card-body px-5 py-4">
                                        <h3>Opis:</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ex a.
                                            Necessitatibus quaerat repellendus totam perferendis.</p>
                                        <h3 class="mt-5">Dla kogo?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nisi
                                            eaque asperiores esse amet, maiores harum.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-dark py-3 px-0"><a href="{$conf->action_root}carsView" class="p-4 px-5">Wybieram</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion" id='acc2'>
                            <div class="card mb-4">
                                <div class="service-hero-box box-two">
                                    <div class="hero-shadow"></div>
                                    <p class="h-100 text-white text-center p-3">Długoterminowy wynajem samochodów</p>
                                </div>
                                <div data-bs-toggle="collapse" data-bs-target='#collapseTwo' aria-expanded='true'
                                    aria-controls='collapseTwo'>
                                    <div class="card-header text-center py-4">Rozwiń opis
                                        <i class="fas fa-angle-double-down ml-4"></i>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent='#acc2'>
                                    <div class="card-body px-5 py-4">
                                        <h3>Opis:</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ex a.
                                            Necessitatibus quaerat repellendus totam perferendis.</p>
                                        <h3 class="mt-5">Dla kogo?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nisi
                                            eaque asperiores esse amet, maiores harum.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-dark py-3 px-0"><a href="{$conf->action_root}carsView" class="p-4 px-5">Wybieram</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion" id='acc3'>
                            <div class="card mb-4">
                                <div class="service-hero-box box-three">
                                    <div class="hero-shadow"></div>
                                    <p class="h-100 text-white text-center p-3">Samochód do ślubu</p>
                                </div>
                                <div data-bs-toggle="collapse" data-bs-target='#collapseThree' aria-expanded='true'
                                    aria-controls='collapseThree'>
                                    <div class="card-header text-center py-4">Rozwiń opis
                                        <i class="fas fa-angle-double-down ml-4"></i>
                                    </div>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent='#acc3'>
                                    <div class="card-body px-5 py-4">
                                        <h3>Opis:</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ex a.
                                            Necessitatibus quaerat repellendus totam perferendis.</p>
                                        <h3 class="mt-5">Dla kogo?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nisi
                                            eaque asperiores esse amet, maiores harum.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-dark py-3 px-0"><a href="{$conf->action_root}carsView" class="p-4 px-5">Wybieram</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion" id='acc4'>
                            <div class="card mb-4">
                                <div class="service-hero-box box-four">
                                    <div class="hero-shadow"></div>
                                    <p class="h-100 text-white text-center p-3">Samochód na lotnisko</p>
                                </div>
                                <div data-bs-toggle="collapse" data-bs-target='#collapseFour' aria-expanded='true'
                                    aria-controls='collapseFour'>
                                    <div class="card-header text-center py-4">Rozwiń opis
                                        <i class="fas fa-angle-double-down ml-4"></i>
                                    </div>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent='#acc4'>
                                    <div class="card-body px-5 py-4">
                                        <h3>Opis:</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ex a.
                                            Necessitatibus quaerat repellendus totam perferendis.</p>
                                        <h3 class="mt-5">Dla kogo?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nisi
                                            eaque asperiores esse amet, maiores harum.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-dark py-3 px-0"><a href="{$conf->action_root}carsView" class="p-4 px-5">Wybieram</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion" id='acc5'>
                            <div class="card mb-4">
                                <div class="service-hero-box box-five">
                                    <div class="hero-shadow"></div>
                                    <p class="h-100 text-white text-center p-3">Samochód z kierowcą</p>
                                </div>
                                <div data-bs-toggle="collapse" data-bs-target='#collapseFive' aria-expanded='true'
                                    aria-controls='collapseFive'>
                                    <div class="card-header text-center py-4">Rozwiń opis
                                        <i class="fas fa-angle-double-down ml-4"></i>
                                    </div>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent='#acc5'>
                                    <div class="card-body px-5 py-4">
                                        <h3>Opis:</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ex a.
                                            Necessitatibus quaerat repellendus totam perferendis.</p>
                                        <h3 class="mt-5">Dla kogo?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nisi
                                            eaque asperiores esse amet, maiores harum.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-dark py-3 px-0"><a href="{$conf->action_root}carsView" class="p-4 px-5">Wybieram</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion" id='acc6'>
                            <div class="card mb-4">
                                <div class="service-hero-box box-six">
                                    <div class="hero-shadow"></div>
                                    <p class="h-100 text-white text-center p-3">Samochód z ochroną</p>
                                </div>
                                <div data-bs-toggle="collapse" data-bs-target='#collapseSix' aria-expanded='true'
                                    aria-controls='collapseSix'>
                                    <div class="card-header text-center py-4">Rozwiń opis
                                        <i class="fas fa-angle-double-down ml-4"></i>
                                    </div>
                                </div>
                                <div id="collapseSix" class="collapse" data-parent='#acc6'>
                                    <div class="card-body px-5 py-4">
                                        <h3>Opis:</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ex a.
                                            Necessitatibus quaerat repellendus totam perferendis.</p>
                                        <h3 class="mt-5">Dla kogo?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nisi
                                            eaque asperiores esse amet, maiores harum.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-dark py-3 px-0"><a href="{$conf->action_root}carsView" class="p-4 px-5">Wybieram</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores,
                    voluptates?</div>
                <hr>
                <div class="text-muted text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores
                    minus quaerat rerum reiciendis, delectus quidem quae recusandae provident deleniti hic doloremque
                    repellat perferendis quo eos ratione ut quod, tenetur odit!</div>
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