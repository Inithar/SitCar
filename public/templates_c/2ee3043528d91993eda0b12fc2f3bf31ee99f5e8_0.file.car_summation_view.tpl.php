<?php
/* Smarty version 3.1.39, created on 2021-05-23 17:23:25
  from 'C:\xampp\htdocs\car_hire\app\views\car_summation_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aa736daccfb5_54654081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ee3043528d91993eda0b12fc2f3bf31ee99f5e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\car_summation_view.tpl',
      1 => 1621783160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60aa736daccfb5_54654081 (Smarty_Internal_Template $_smarty_tpl) {
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
</div>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="control-button mt-3">
    <button class="reg-next-btn btn btn-primary uniwersal-btn" onclick="ajaxReloadElement('reservation-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationSummation')">Dalej</button>
</div><?php }
}
