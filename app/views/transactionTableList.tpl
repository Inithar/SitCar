{foreach $records as $r}
{strip}
    <tr class="table-row">
        <td>{$r["idtranzakcja"]}</td>
        <td>{$r["data_rozpoczęcia"]}</td>
        <td>{$r["data_zakończenia"]}</td>
        <td>{$r["cena_auta_dzień"]}</td>
        <td>{$r["wybór_usługi"]}</td>
        <td>{$r["koszt_całkowity"]}</td>
        <td>{$r["użytkownik_id"]}</td>
        <td>{$r["adres_dostawy_id"]}</td>
        <td>{$r["samochód_id"]}</td>
    </tr>
{/strip}
{/foreach}