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
                <form method="post" action="{$conf->action_root}summationView">
                    <h1 class="text-center text-uppercase fw-bold mb-4">Rezerwacja</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="start-date-reservation">Data odbioru:</label>
                                <input type="datetime-local" id="start-date-reservation" name="start-date-reservation" class="form-control" value="{$reservationForm->startDateReservation}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="end-date-reservation">Data zwrotu:</label>
                                <input type="datetime-local" id="end-date-reservation" name="end-date-reservation" class="form-control" value="{$reservationForm->endDateReservation}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-box">
                                <label for="service-reservation" class="form-label">Typ usługi:</label>
                                <select id="service-reservation" name="service-reservation" class="form-select" value="{$reservationForm->serviceReservation}">
                                {foreach $services as $s}
                                    <option selected>Wybierz typ usługi</option>
                                    <option>{$s["usługa1"]}</option>
                                    <option>{$s["usługa2"]}</option>
                                    <option>{$s["usługa3"]}</option>
                                    <option>{$s["usługa4"]}</option>
                                    <option>{$s["usługa5"]}</option>
                                    <option>{$s["usługa6"]}</option>
                                {/foreach}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-box">
                                <label for="city-reservation">Miasto:</label>
                                <input type="text" id="city-reservation" name="city-reservation" class="form-control" value="{$reservationForm->cityReservation}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <label for="postcode-reservation">Kod pocztowy:</label>
                                <input type="text" id="postcode-reservation" name="postcode-reservation" class="form-control" value="{$reservationForm->postcodeReservation}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="street-reservation">Ulica:</label>
                                <input type="text" id="street-reservation" name="street-reservation" class="form-control" value="{$reservationForm->streetReservation}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-box">
                                <label for="building-number-reservation">Nr budynku:</label>
                                <input type="text" id="building-number-reservation" name="building-number-reservation" class="form-control" value="{$reservationForm->buildingNumberReservation}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-box">
                                <label for="flat-number-reservation">Nr mieszkania:</label>
                                <input type="text" id="flat-number-reservation" name="flat-number-reservation" class="form-control" value="{$reservationForm->flatNumberReservation}">
                            </div>
                        </div>
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