{extends file="main.tpl"}

{block name=navigation}
    <a class="nav-item nav-link active" href="{$conf->action_root}homeView">Home <span class="sr-only"></span></a>
    <a class="nav-item nav-link" href="{$conf->action_root}carsView">Samochody</a>
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

{block name=header}
    <header>
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
					aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
					aria-label="Slide 4"></button>
			</div>

			<div class="carousel-inner text-light text-center">
				<div class="carousel-item carousel-img-one active">
					<div
						class="carousel-text h-100 p-5 d-flex flex-column justify-content-end justify-content-md-center align-items-center">
						<div class="hero-shadow"></div>
						<p class="display-3">Samochody miejskie</p>
						<p class="d-none d-sm-block">Wypożyczalnia SitCar posiada duży wybór samochodów miejskich</p>
					</div>
				</div>

				<div class="carousel-item carousel-img-two">
					<div
						class="carousel-text h-100 p-5 d-flex flex-column justify-content-end justify-content-md-center align-items-center">
						<div class="hero-shadow"></div>
						<p class="display-3">Samochody luksusowe</p>
						<p class="d-none d-sm-block">Zobacz jaki komfort i luksus może Ci zaoferować wypożyczalnia
							SitCar</p>
					</div>
				</div>

				<div class="carousel-item carousel-img-three">
					<div
						class="carousel-text h-100 p-5 d-flex flex-column justify-content-end justify-content-md-center align-items-center">
						<div class="hero-shadow"></div>
						<p class="display-3">Samochody sportowe</p>
						<p class="d-none d-sm-block">Dla osób lubiących dużą prędkość, proponujemy samochody sportowe
						</p>
					</div>
				</div>

				<div class="carousel-item carousel-img-four">
					<div
						class="carousel-text h-100 p-5 d-flex flex-column justify-content-end justify-content-md-center align-items-center">
						<div class="hero-shadow"></div>
						<p class="display-3">Samochody użytkowe</p>
						<p class="d-none d-sm-block">Wypożyczalnia SitCar oferuje również wynajem aut użytkowych
						</p>
					</div>
				</div>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</header>
{/block}

{block name=main}
    <main>
		<section class="home-boxes">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-4 home-box mb-5 mb-md-0">
						<i class="fas fa-dollar-sign"></i>
						<h3>Bez kaucji</h3>
						<p class="m-0">Możesz zdecydować się na wynajem z kaucją lub wynajem bez kaucji</p>
					</div>

					<div class="col-md-4 home-box mb-5 mb-md-0">
						<i class="fas fa-map-marker-alt"></i>
						<h3>Bez wychodzenia z domu</h3>
						<p class="m-0">Samochód możesz odebrać w salonie lub dowolnie wybranym miejscu</p>
					</div>

					<div class="col-md-4 home-box mb-5 mb-md-0">
						<i class="fas fa-user-clock"></i>
						<h3>Każda pora jest dobra</h3>
						<p class="m-0">Jesteśmy do Twojej dyspozycji przez 24 godziny na dobę. Dzwoń o każdej porze.
							Infolinia: +48 412 000 002</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="home-hero-cars">
			<div class="hero-shadow"></div>
			<div class="row m-0 h-100 align-items-center text-light">
				<div class="col">
					<div class="container p-5">
						<p class="display-4">Szeroki wachlarz usług</p>
						<p> W naszej wypożyczalni możesz zamówić m.in. auto z kierowcą – w pełni profesjonalnym,
							punktualnym i rzetelnie wykonującym swoje obowiązki.</p>
						<div class="d-flex flex-column align-items-center align-items-md-start">
							<button class="service-btn service-btn-animation text-center text-md-start""><a href="{$conf->action_root}serviceView" class="p-md-5">Sprawdź nasze usługi</a></button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="home-why-us py-5">
			<p class="display-3 text-center pt-5 px-3 fw-bold">Wypożyczalnia samochodów &#8211 Sit<span
					class="text-primary">Car</span></p>
			<p class="display-6 text-center pt-2 px-3 fw-bold">Dlaczego właśnie my?</p>

			<div class=" container py-5">
				<div class="row m-0">
					<div class="col-md-4 px-4 py-3">
						<p><b>Po pierwsze</b> &#8211; lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis
							amet aspernatur consequuntur quae nulla nihil. Inventore cupiditate veniam a ex repellat
							modi nemo mollitia dolorum assumenda quisquam possimus at impedit odio, consectetur minus ut
							soluta? Minima veniam alias sequi impedit. Soluta exercitationem odit accusantium, amet
							deserunt distinctio eos provident assumenda. Dolore quod doloribus non atque?
						</p>
					</div>

					<div class="col-md-4 px-4 py-3">
						<p><b>Po drugie</b> &#8211; lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
							repellendus soluta, accusamus veritatis debitis veniam doloribus adipisci, ipsa minima
							tempora quidem nulla saepe error in dolorum? Expedita minima beatae obcaecati debitis sit
							quidem maxime tempora iusto, recusandae corporis sint laudantium voluptas excepturi? Iusto
							minima harum, blanditiis quasi molestiae dolorum saepe omnis porro quisquam, vel corrupti.
						</p>
					</div>

					<div class="col-md-4 px-4 py-3">
						<p><b>Po trzecie</b> &#8211; lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quam
							earum ipsum omnis consectetur magnam obcaecati blanditiis soluta, non dolorem. Dolor, nam? A
							voluptas iusto earum aut quam? Quidem ullam illo assumenda officia ratione labore iste
							voluptatibus iure blanditiis! Sunt, ea atque dolorum deleniti magnam libero, ad dolore quas
							perferendis labore repudiandae iste repellat. Asperiores.
						</p>
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