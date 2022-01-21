{extends file="main.tpl"}

{block name=navigation}
    <a class="nav-item nav-link" href="{$conf->action_root}homeView">Home</a>
    <a class="nav-item nav-link" href="{$conf->action_root}carsView">Samochody</a>
    <a class="nav-item nav-link" href="{$conf->action_root}serviceView">Usługi</a>
    <a class="nav-item nav-link" href="{$conf->action_root}faqView">FAQ</a>
    <a class="nav-item nav-link" href="{$conf->action_root}contactView">Kontakt</a>
	<a class="nav-item nav-link active" href="{$conf->action_root}mainLogin">Zaloguj <span class="sr-only"></span></a>	
{/block}

{block name=main}
    <main>
        <section class="registration-section d-flex justify-content-center align-items-center">
            <div class="reg-hero-shadow"></div>
            <div class="form-wrapper">
                <form method="post" action="{$conf->action_root}registerUser">
                    <h1>Rejestracja</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="name-register">Imie:</label>
                                <input type="text" id="name-register" name="name-register" class="form-control" value="{$registerForm->name}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="surname-register">Nazwisko:</label>
                                <input type="text" id="surname-register" name="surname-register" class="form-control" value="{$registerForm->surname}">
                            </div>
                        </div>
                        <div>
                            <div class="form-box">
                                <label for="email-register">Adres e-mail:</label>
                                <input type="text" id="email-register" name="email-register" class="form-control" value="{$registerForm->email}">
                            </div>
                        </div>                       
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="pass-register">Hasło:</label>
                                <input type="password" id="pass-register" name="pass-register" class="form-control" value="{$registerForm->password}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="pass-register2">Powtórz hasło:</label>
                                <input type="password" id="pass-register2" name="pass-register2" class="form-control" value="{$registerForm->password2}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <label for="birthday-register">Data urodzenia:</label>
                                <input type="date" max="2020-12-31" id="birthday-register" name="birthday-register" class="form-control" value="{$registerForm->birthday}">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-box">
                                <label for="phone-number-register">Numer telefonu:</label>
                                <input type="tel" id="phone-number-register" name="phone-number-register" class="form-control" value="{$registerForm->phoneNumber}">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-box">
                                <label for="city-register">Miasto:</label>
                                <input type="text" id="city-register" name="city-register" class="form-control" value="{$registerForm->city}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <label for="postcode-register">Kod pocztowy:</label>
                                <input type="text" id="postcode-register" name="postcode-register" class="form-control" value="{$registerForm->postcode}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="street-register">Ulica:</label>
                                <input type="text" id="street-register" name="street-register" class="form-control" value="{$registerForm->street}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-box">
                                <label for="building-number-register">Nr budynku:</label>
                                <input type="text" id="building-number-register" name="building-number-register" class="form-control" value="{$registerForm->buildingNumber}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-box">
                                <label for="flat-number-register">Nr mieszkania:</label>
                                <input type="text" id="flat-number-register" name="flat-number-register" class="form-control" value="{$registerForm->flatNumber}">
                            </div>
                        </div>
                    </div>

                    {include file='messages.tpl'}

                    <div class="control-button">
                        <button class="reg-next-btn btn btn-primary uniwersal-btn">Zarejestruj</button>
                    </div>
                </form>
            </div>
        </section>
    </main>   
{/block}