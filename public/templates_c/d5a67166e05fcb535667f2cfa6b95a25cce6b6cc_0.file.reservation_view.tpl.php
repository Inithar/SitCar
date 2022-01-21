<?php
/* Smarty version 3.1.39, created on 2021-06-07 12:02:46
  from 'C:\xampp\htdocs\car_hire\app\views\reservation_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bdeec674fb98_95867550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5a67166e05fcb535667f2cfa6b95a25cce6b6cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\reservation_view.tpl',
      1 => 1623003325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60bdeec674fb98_95867550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109024052760bdeec64e4dc3_27838210', 'navigation');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214533706860bdeec65e5485_03425896', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_109024052760bdeec64e4dc3_27838210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_109024052760bdeec64e4dc3_27838210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
homeView">Home</a>
    <a class="nav-item nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
carsView">Samochody <span class="sr-only"></span></a>
    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
serviceView">Usługi</a>
    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
faqView">FAQ</a>
    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
contactView">Kontakt</a>
    <?php if (\core\RoleUtils::inRole("admin")) {?>
        <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
transactionTableView">Transakcja</a>
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
class Block_214533706860bdeec65e5485_03425896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_214533706860bdeec65e5485_03425896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <section class="login-section d-flex justify-content-center align-items-center">
            <div class="hero-shadow"></div>
            <div class="form-wrapper">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
summationView">
                    <h1 class="text-center text-uppercase fw-bold mb-4">Rezerwacja</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="start-date-reservation">Data odbioru:</label>
                                <input type="datetime-local" id="start-date-reservation" name="start-date-reservation" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->startDateReservation;?>
">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="end-date-reservation">Data zwrotu:</label>
                                <input type="datetime-local" id="end-date-reservation" name="end-date-reservation" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->endDateReservation;?>
">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-box">
                                <label for="service-reservation" class="form-label">Typ usługi:</label>
                                <select id="service-reservation" name="service-reservation" class="form-select" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->serviceReservation;?>
">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                    <option selected>Wybierz typ usługi</option>
                                    <option><?php echo $_smarty_tpl->tpl_vars['s']->value["usługa1"];?>
</option>
                                    <option><?php echo $_smarty_tpl->tpl_vars['s']->value["usługa2"];?>
</option>
                                    <option><?php echo $_smarty_tpl->tpl_vars['s']->value["usługa3"];?>
</option>
                                    <option><?php echo $_smarty_tpl->tpl_vars['s']->value["usługa4"];?>
</option>
                                    <option><?php echo $_smarty_tpl->tpl_vars['s']->value["usługa5"];?>
</option>
                                    <option><?php echo $_smarty_tpl->tpl_vars['s']->value["usługa6"];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-box">
                                <label for="city-reservation">Miasto:</label>
                                <input type="text" id="city-reservation" name="city-reservation" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->cityReservation;?>
">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <label for="postcode-reservation">Kod pocztowy:</label>
                                <input type="text" id="postcode-reservation" name="postcode-reservation" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->postcodeReservation;?>
">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="street-reservation">Ulica:</label>
                                <input type="text" id="street-reservation" name="street-reservation" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->streetReservation;?>
">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-box">
                                <label for="building-number-reservation">Nr budynku:</label>
                                <input type="text" id="building-number-reservation" name="building-number-reservation" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->buildingNumberReservation;?>
">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-box">
                                <label for="flat-number-reservation">Nr mieszkania:</label>
                                <input type="text" id="flat-number-reservation" name="flat-number-reservation" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->flatNumberReservation;?>
">
                            </div>
                        </div>
                    </div>

                    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="control-button mt-3">
                        <button class="reg-next-btn btn btn-primary uniwersal-btn">Dalej</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
<?php
}
}
/* {/block 'main'} */
}
