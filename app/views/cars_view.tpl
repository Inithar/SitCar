{extends file="main.tpl"}

{block name=navigation}
    <a class="nav-item nav-link" href="{$conf->action_root}homeView">Home</a>
    <a class="nav-item nav-link active" href="{$conf->action_root}carsView">Samochody <span class="sr-only"></span></a>
    <a class="nav-item nav-link" href="{$conf->action_root}serviceView">Usługi</a>
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
        <section class="top-hero cars-hero">
            <div class="hero-shadow"></div>
            <p class="top-hero-text text-light ">Samochody</p>
        </section>

        <section class="py-5 mb-5 cars">
            <div class="container">
                <div class="py-5 text-center">
                    <p class="display-3">Wybierz swój samochód</p>
                    <p class="additional-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi atque
                        odio molestiae. Quidem voluptate, quibusdam adipisci delectus quae eaque facere suscipit hic
                        earum natus porro odit laudantium neque, temporibus tenetur?
                    </p>
                </div>

                <div class="row text-center py-md-5">
                    <div class="col-md-3 col-6">
                        <button class="btn btn-outline-primary car-btn" onclick="ajaxReloadElement('list-car','{$conf->action_root}cityCars')">Miejskie</button>
                    </div>
                    <div class="col-md-3 col-6">
                        <button class="btn btn-outline-primary car-btn" onclick="ajaxReloadElement('list-car','{$conf->action_root}luxuriousCars')">Luksusowe</button>
                    </div>
                    <div class="col-md-3 col-6">
                        <button class="btn btn-outline-primary car-btn" onclick="ajaxReloadElement('list-car','{$conf->action_root}sportCars')">Sportowe</button>
                    </div>
                    <div class="col-md-3 col-6">
                        <button class="btn btn-outline-primary car-btn" onclick="ajaxReloadElement('list-car','{$conf->action_root}utilityCars')">Użytkowe</button>
                    </div>
                </div>
            </div>

            <div class="container py-5">
                <div id="list-car" class="row">
                    {include file="cars_list_view.tpl"}
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