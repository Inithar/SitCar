<?php
/* Smarty version 3.1.39, created on 2021-06-07 11:01:59
  from 'C:\xampp\htdocs\car_hire\app\views\transactionTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bde0877b1459_22090143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbc5efb17739da53f3230aaf96ff7fafde8298f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\transactionTable.tpl',
      1 => 1623056515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:transactionTableList.tpl' => 1,
  ),
),false)) {
function content_60bde0877b1459_22090143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195456546560bde08779f246_90185897', 'navigation');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171881410760bde0877a94d9_21168457', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194757780760bde0877b0e36_69732541', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_195456546560bde08779f246_90185897 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_195456546560bde08779f246_90185897',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
homeView">Home</a>
    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
carsView">Samochody <span class="sr-only"></span></a>
    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
serviceView">Usługi</a>
    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
faqView">FAQ</a>
    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
contactView">Kontakt</a>
    <?php if (\core\RoleUtils::inRole("admin")) {?>
        <a class="nav-item nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
transactionTableView">Transakcja <span class="sr-only"></span></a>
    <?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
		<a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a>
	<?php } else { ?>
		<a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
mainLogin">Zaloguj</a>
	<?php }
}
}
/* {/block 'navigation'} */
/* {block 'main'} */
class Block_171881410760bde0877a94d9_21168457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_171881410760bde0877a94d9_21168457',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
            <?php $_smarty_tpl->_subTemplateRender("file:transactionTableList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </tbody>
    </table>

    <div class="container d-flex justify-content-center">
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['max']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['max']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <form id="transactionPagination<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" onsubmit="ajaxPostForm('transactionPagination<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
transactionPagination','transactionTable'); return false;">
                <input type="hidden" name="transactionPageNumber" value="transactionPage<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                <button class="car-btn btn btn-primary uniwersal-btn" type="submit"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>
            </form>
        <?php }
}
?>
    </div>
<?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_194757780760bde0877b0e36_69732541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_194757780760bde0877b0e36_69732541',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="bg-dark text-light">
		<p class="p-4 mb-0 text-center"> Copyright &copy; 2021 - Wypożyczalnia samochodów
			<b>Sit<span class="text-primary">Car</span></b>
		</p>
	</footer>	
<?php
}
}
/* {/block 'footer'} */
}
