<?php
/* Smarty version 3.1.39, created on 2021-05-24 09:34:48
  from 'C:\xampp\htdocs\car_hire\app\views\reservation_summation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ab5718658068_87607709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b85cfa4be82b759bf9f301d031b86f46f5aa8c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\reservation_summation.tpl',
      1 => 1621841666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ab5718658068_87607709 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="border p-5 mb-4 text-center summation">
    <h1 class="text-uppercase fw-bold mb-4">Podsumowanie</h2>
    <h3 class="mt-4">Okres wynajmu</h3>
    <p>od 10.11.1999 20:30 do 10.11.1999 20:30</p>
    <h3 class="mt-4">Adres</h3>
    <p>ul. Sezamowa 10</p>
    <p>00-043 Warszawa</p>
    <h3 class="mt-4">Typ usługi</h3>
    <p>Krótkoterminowy wynajem</p>
    <h3 class="mt-4">Cena</h3>
    <p class="mb-4">2400 zł.</p>
    <div class="control-button mt-3">
        <button class="reg-next-btn btn btn-primary uniwersal-btn" type="button" onclick="ajaxReloadElement('reservation-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
confirmReservation')">Rezerwuje</button>
    </div>
</div><?php }
}
