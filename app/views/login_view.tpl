{extends file="main.tpl"}

{block name=navigation}
    <a class="nav-item nav-link" href="{$conf->action_root}homeView">Home</a>
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
		<a class="nav-item nav-link active" href="{$conf->action_root}mainLogin">Zaloguj <span class="sr-only"></span></a>
	{/if}
{/block}

{block name=main}
    <main>
        <section class="login-section d-flex justify-content-center align-items-center">
            <div class="hero-shadow"></div>
            <div class="wrapper">
                <form method="post">
                    <h1>Logowanie</h1>
                    <div class="form-box">
                        <label for="email">Adres e-mail:</label>
                        <input type="text" id="email" name="email" placeholder="Podaj e-mail" class="form-control">
                    </div>
                    <div class="form-box">
                        <label for="pass">Hasło:</label>
                        <input type="password" id="pass" name="pass" placeholder="Podaj hasło" class="form-control">
                    </div>
                    
                    {include file='messages.tpl'}

                    <div class="control-button">
                        <button class="btn btn-primary login-btn lef-login-btn uniwersal-btn" 
                        {if $form->whereToGo == 0}
                            formaction="{$conf->action_root}reservationLogin"
                        {else}
                            formaction="{$conf->action_root}login"
                        {/if}
                        >Zaloguj</button>
                        <button class="btn btn-primary login-btn uniwersal-btn" formaction="{$conf->action_root}regView">Zarejestruj</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
{/block}