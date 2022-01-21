{foreach $car as $c}
    <div class="col-md-4 col-12 d-flex justify-content-center align-items-center">
        <img src="{$c["obraz"]}" alt="">
    </div>
    <div class="col-md-5 col-12">
        <div class="row h-100 car-info">
            <p class="m-0 mt-3 fw-bold car-name">{$c["model"]}</p>
            <div class="col-6 d-flex flex-column align-items-start justify-content-between py-4">
                <p><img src="../public/img/cars/icon-1.png" alt=""> {$c["paliwo"]}</p>
                <p><img src="../public/img/cars/icon-2.png" alt=""></i> {$c["klimatyzacja"]}</p>
                <p><img src="../public/img/cars/icon-3.png" alt=""></i> {$c["skrzynia_biegów"]}</p>
                <p><img src="../public/img/cars/icon-4.png" alt=""></i> {$c["pojemność_bagażnika"]}</p>
            </div>
            <div class="col-6 d-flex flex-column align-items-start justify-content-between py-4">
                <p><img src="../public/img/cars/icon-5.png" alt=""> {$c["liczba_drzwi"]}</p>
                <p><img src="../public/img/cars/icon-6.png" alt=""></i> {$c["napęd"]}</p>
                <p><img src="../public/img/cars/icon-7.png" alt=""></i> {$c["poduszki_powietrzne"]}</p>
                <p><img src="../public/img/cars/icon-8.png" alt=""></i> {$c["śr_spalanie"]}</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 col-12 d-flex justify-content-center align-items-center flex-column">
        <form method="post" action="{$conf->action_root}reservationView">
            <p class="car-price text-center">{$c["cena_za_dzień"]} zł. / dzień</p>
            <input type="hidden" name="carID" value="{$c["idsamochód"]}">
            <div class="action-btns d-flex justify-content-center align-items-center flex-column">
                <button class="btn btn-primary action-btn">Rezerwuje</button>
                {if \core\RoleUtils::inRole("admin")}
                    <button class="btn btn-primary action-btn delete-btn" formaction="{$conf->action_root}deleteCar">Usuń</button>
                {/if}
            </div>
        </form>
    </div>  
    <hr class="mb-5 mt-5 mt-md-0">
{/foreach}

{if $visible>=0}
    <div class="container d-flex justify-content-center">
        {for $i=1 to $max}
            <form id="pagination{$i}" onsubmit="ajaxPostForm('pagination{$i}','{$conf->action_root}pagination','list-car'); return false;">
                <input type="hidden" name="pageNumber" value="page{$i}">
                <button class="car-btn btn btn-primary uniwersal-btn" type="submit">{$i}</button>
            </form>
        {/for}
    </div>
{/if}

