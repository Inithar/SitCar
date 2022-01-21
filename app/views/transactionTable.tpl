{extends file="main.tpl"}

{block name=navigation}
    <a class="nav-item nav-link" href="{$conf->action_root}homeView">Home</a>
    <a class="nav-item nav-link" href="{$conf->action_root}carsView">Samochody <span class="sr-only"></span></a>
    <a class="nav-item nav-link" href="{$conf->action_root}serviceView">Usługi</a>
    <a class="nav-item nav-link" href="{$conf->action_root}faqView">FAQ</a>
    <a class="nav-item nav-link" href="{$conf->action_root}contactView">Kontakt</a>
    {if \core\RoleUtils::inRole("admin")}
        <a class="nav-item nav-link active" href="{$conf->action_root}transactionTableView">Transakcja <span class="sr-only"></span></a>
    {/if}
    {if count($conf->roles)>0}
		<a class="nav-item nav-link" href="{$conf->action_root}logout">Wyloguj</a>
	{else}
		<a class="nav-item nav-link" href="{$conf->action_root}mainLogin">Zaloguj</a>
	{/if}
{/block}

{block name=main}
    <table class="table result-table min-vh-100">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Numer transakcji</th>
                <th scope="col">Rozpoczęta</th>
                <th scope="col">Zakończona</th>
                <th scope="col">Cena za dzień</th>
                <th scope="col">Usługa</th>
                <th scope="col">Koszt całkowity</th>
                <th scope="col">Numer użytkownika</th>
                <th scope="col">Numer adresu</th>
                <th scope="col">Numer samochodu</th>
            </tr>
        </thead>
        <tbody id="transactionTable">
            {include file="transactionTableList.tpl"}
        </tbody>
    </table>

    <div class="container d-flex justify-content-center">
        {for $i=1 to $max}
            <form id="transactionPagination{$i}" onsubmit="ajaxPostForm('transactionPagination{$i}','{$conf->action_root}transactionPagination','transactionTable'); return false;">
                <input type="hidden" name="transactionPageNumber" value="transactionPage{$i}">
                <button class="car-btn btn btn-primary uniwersal-btn" type="submit">{$i}</button>
            </form>
        {/for}
    </div>
{/block}

{block name=footer}
    <footer class="bg-dark text-light">
		<p class="p-4 mb-0 text-center"> Copyright &copy; 2021 - Wypożyczalnia samochodów
			<b>Sit<span class="text-primary">Car</span></b>
		</p>
	</footer>	
{/block}