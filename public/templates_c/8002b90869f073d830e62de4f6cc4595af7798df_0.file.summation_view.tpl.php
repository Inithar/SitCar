<?php
/* Smarty version 3.1.39, created on 2021-06-07 18:11:24
  from 'C:\xampp\htdocs\car_hire\app\views\summation_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be452c0ece42_45335809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8002b90869f073d830e62de4f6cc4595af7798df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\summation_view.tpl',
      1 => 1623082281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60be452c0ece42_45335809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67857881360be452c0d3fb1_88756889', 'navigation');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169622530860be452c0e1c21_59627021', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_67857881360be452c0d3fb1_88756889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_67857881360be452c0d3fb1_88756889',
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
class Block_169622530860be452c0e1c21_59627021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_169622530860be452c0e1c21_59627021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <section class="login-section d-flex justify-content-center align-items-center">
            <div class="hero-shadow"></div>
            <div class="form-wrapper">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sendReservation">
                    <h1 class="text-center text-uppercase fw-bold mb-4">Podsumowanie</h1>
                    <div class="mb-4 text-center summation-box">
                        <h3>Okres wynajmu</h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->startDateReservation;?>
 - <?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->endDateReservation;?>
</p>
                        <input type="hidden" id="start-date-reservation" name="start-date-reservation" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->startDateReservation;?>
">
                        <input type="hidden" id="end-date-reservation" name="end-date-reservation" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->endDateReservation;?>
">
                        <h3 class="mt-4">Typ usługi</h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->serviceReservation;?>
</p>
                        <input type="hidden" id="service-reservation" name="service-reservation" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->serviceReservation;?>
">
                        <h3 class="mt-4">Koszt całkowity</h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['totalCost']->value;?>
</p>
                        <h3 class="mt-4">Adres odbioru</h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->cityReservation;?>
 <?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->postcodeReservation;?>
 </p>
                        <p><?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->streetReservation;?>
 <?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->buildingNumberReservation;?>
 <?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->flatNumberReservation;?>
</p>
                        <input type="hidden" name="city-reservation" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->cityReservation;?>
">
                        <input type="hidden" name="postcode-reservation" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->postcodeReservation;?>
">
                        <input type="hidden" name="street-reservation" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->streetReservation;?>
">
                        <input type="hidden" name="building-number-reservation" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->buildingNumberReservation;?>
">
                        <input type="hidden" name="flat-number-reservation" value="<?php echo $_smarty_tpl->tpl_vars['reservationForm']->value->flatNumberReservation;?>
">
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
