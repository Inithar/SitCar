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
        <section class="login-section d-flex justify-content-center align-items-center">
            <div class="hero-shadow"></div>
            <div class="form-wrapper">
                <form method="post" action="{$conf->action_root}sendReservation">
                    <h1 class="text-center text-uppercase fw-bold mb-4">Podsumowanie</h1>
                    <div class="mb-4 text-center summation-box">
                        <h3>Okres wynajmu</h3>
                        <p>{$reservationForm->startDateReservation} - {$reservationForm->endDateReservation}</p>
                        <input type="hidden" id="start-date-reservation" name="start-date-reservation" class="form-control" value="{$reservationForm->startDateReservation}">
                        <input type="hidden" id="end-date-reservation" name="end-date-reservation" class="form-control" value="{$reservationForm->endDateReservation}">
                        <h3 class="mt-4">Typ usługi</h3>
                        <p>{$reservationForm->serviceReservation}</p>
                        <input type="hidden" id="service-reservation" name="service-reservation" class="form-control" value="{$reservationForm->serviceReservation}">
                        <h3 class="mt-4">Koszt całkowity</h3>
                        <p>{$totalCost}</p>
                        <h3 class="mt-4">Adres odbioru</h3>
                        <p>{$reservationForm->cityReservation} {$reservationForm->postcodeReservation} </p>
                        <p>{$reservationForm->streetReservation} {$reservationForm->buildingNumberReservation} {$reservationForm->flatNumberReservation}</p>
                        <input type="hidden" name="city-reservation" value="{$reservationForm->cityReservation}">
                        <input type="hidden" name="postcode-reservation" value="{$reservationForm->postcodeReservation}">
                        <input type="hidden" name="street-reservation" value="{$reservationForm->streetReservation}">
                        <input type="hidden" name="building-number-reservation" value="{$reservationForm->buildingNumberReservation}">
                        <input type="hidden" name="flat-number-reservation" value="{$reservationForm->flatNumberReservation}">
                    </div>
                    
                    {include file='messages.tpl'}

                    <div class="control-button mt-3">
                        <button class="reg-next-btn btn btn-primary uniwersal-btn">Dalej</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
{/block}