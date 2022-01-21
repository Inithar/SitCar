<?php
/* Smarty version 3.1.39, created on 2021-06-06 21:09:52
  from 'C:\xampp\htdocs\car_hire\app\views\transactionTableList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bd1d80cadc04_69072708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '704c38fe877dd07635e168a5aa7444f664576301' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\transactionTableList.tpl',
      1 => 1623006581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bd1d80cadc04_69072708 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
<tr class="table-row"><td><?php echo $_smarty_tpl->tpl_vars['r']->value["idtranzakcja"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["data_rozpoczęcia"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["data_zakończenia"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["cena_auta_dzień"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["wybór_usługi"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["koszt_całkowity"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["użytkownik_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["adres_dostawy_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["samochód_id"];?>
</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
