<?php
/* Smarty version 3.1.39, created on 2021-05-23 17:18:46
  from 'C:\xampp\htdocs\car_hire\app\views\car_reservation_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aa7256359821_88431520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dcae7daad68f954cfbfd672e1dbdb2387e2c571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\car_reservation_view.tpl',
      1 => 1621783122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60aa7256359821_88431520 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="text-center text-uppercase fw-bold mb-4">Rezerwacja</h1>
<div class="row">
    <div class="col-md-6">
        <div class="form-box">
            <label for="start-date-reservation">Data odbioru:</label>
            <input type="datetime-local" id="start-date-reservation" name="start-date-reservation" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-box">
            <label for="end-date-reservation">Data zwrotu:</label>
            <input type="datetime-local" id="end-date-reservation" name="end-date-reservation" class="form-control">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-box">
            <label for="end-date-reservation" class="form-label">Typ usługi:</label>
            <select id="end-date-reservation" name="end-date-reservation" class="form-select">
                <option selected>Wybierz typ usługi</option>
                <option>Krótkoterminowy wynajem</option>
                <option>Długoterminowy wynajem</option>
                <option>Samochód na lotnisko (+50 zł)</option>
                <option>Samochód do ślubu (+500 zł / dzień)</option>
                <option>Samochód z kierowcą (+300 zł / dzień)</option>
                <option>Samochód z ochroną (+600 zł / dzień)</option>
            </select>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-box">
            <label for="city-reservation">Miasto:</label>
            <input type="text" id="city-reservation" name="city-reservation" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-box">
            <label for="postcode-reservation">Kod pocztowy:</label>
            <input type="text" id="postcode-reservation" name="postcode-reservation" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-box">
            <label for="street-reservation">Ulica:</label>
            <input type="text" id="street-reservation" name="street-reservation" class="form-control">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-box">
            <label for="building-number-reservation">Nr budynku:</label>
            <input type="text" id="building-number-reservation" name="building-number-reservation" class="form-control">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-box">
            <label for="flat-number-reservation">Nr mieszkania:</label>
            <input type="text" id="flat-number-reservation" name="flat-number-reservation" class="form-control">
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="control-button mt-3">
    <button class="reg-next-btn btn btn-primary uniwersal-btn" onclick="ajaxReloadElement('reservation-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationSummation')">Dalej</button>
</div><?php }
}
