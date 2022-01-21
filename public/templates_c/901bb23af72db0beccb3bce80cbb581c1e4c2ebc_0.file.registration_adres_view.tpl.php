<?php
/* Smarty version 3.1.39, created on 2021-05-15 21:47:38
  from 'C:\xampp\htdocs\car_hire\app\views\registration_adres_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a0255a99db98_85282422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '901bb23af72db0beccb3bce80cbb581c1e4c2ebc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\registration_adres_view.tpl',
      1 => 1621108055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60a0255a99db98_85282422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143559375160a0255a990265_78800718', 'navigation');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140846432060a0255a997760_86000931', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_143559375160a0255a990265_78800718 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_143559375160a0255a990265_78800718',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
homeView">Home</a>
    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
carsView">Samochody</a>
    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
serviceView">Usługi</a>
    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
faqView">FAQ</a>
    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
contactView">Kontakt</a>
	<a class="nav-item nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginView">Zaloguj <span class="sr-only"></span></a>	
<?php
}
}
/* {/block 'navigation'} */
/* {block 'main'} */
class Block_140846432060a0255a997760_86000931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_140846432060a0255a997760_86000931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <section class="login-section d-flex justify-content-center align-items-center">
            <div class="hero-shadow"></div>
            <div class="reg-wrapper">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerUser">
                    <h1>Rejestracja</h1>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-box">
                                <label for="city-register">Miasto:</label>
                                <input type="tel" id="city-register" name="city-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerAddressForm']->value->city;?>
">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <label for="postcode-register">Kod pocztowy:</label>
                                <input type="text" id="postcode-register" name="postcode-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerAddressForm']->value->postcode;?>
">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="street-register">Ulica:</label>
                                <input type="text" id="street-register" name="street-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerAddressForm']->value->street;?>
">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-box">
                                <label for="building-number-register">Nr budynku:</label>
                                <input type="text" id="building-number-register" name="building-number-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerAddressForm']->value->buildingNumber;?>
">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-box">
                                <label for="flat-number-register">Nr mieszkania:</label>
                                <input type="text" id="flat-number-register" name="flat-number-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerAddressForm']->value->flatNumber;?>
">
                            </div>
                        </div>
                    </div>

                    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    
                    <div class="control-button">
                        <button class="reg-next-btn btn btn-primary uniwersal-btn">Zarejestruj</button>
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
