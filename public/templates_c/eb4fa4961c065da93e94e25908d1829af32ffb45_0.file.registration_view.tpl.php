<?php
/* Smarty version 3.1.39, created on 2021-05-31 16:57:30
  from 'C:\xampp\htdocs\car_hire\app\views\registration_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b4f95abbf452_23779126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb4fa4961c065da93e94e25908d1829af32ffb45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\registration_view.tpl',
      1 => 1622473011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60b4f95abbf452_23779126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201749014760b4f95ab2e475_06627810', 'navigation');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50676824960b4f95ab362d3_90333515', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_201749014760b4f95ab2e475_06627810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_201749014760b4f95ab2e475_06627810',
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
mainLogin">Zaloguj <span class="sr-only"></span></a>	
<?php
}
}
/* {/block 'navigation'} */
/* {block 'main'} */
class Block_50676824960b4f95ab362d3_90333515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_50676824960b4f95ab362d3_90333515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <section class="registration-section d-flex justify-content-center align-items-center">
            <div class="reg-hero-shadow"></div>
            <div class="form-wrapper">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerUser">
                    <h1>Rejestracja</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="name-register">Imie:</label>
                                <input type="text" id="name-register" name="name-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerForm']->value->name;?>
">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="surname-register">Nazwisko:</label>
                                <input type="text" id="surname-register" name="surname-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerForm']->value->surname;?>
">
                            </div>
                        </div>
                        <div>
                            <div class="form-box">
                                <label for="email-register">Adres e-mail:</label>
                                <input type="text" id="email-register" name="email-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerForm']->value->email;?>
">
                            </div>
                        </div>                       
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="pass-register">Hasło:</label>
                                <input type="password" id="pass-register" name="pass-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerForm']->value->password;?>
">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="pass-register2">Powtórz hasło:</label>
                                <input type="password" id="pass-register2" name="pass-register2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerForm']->value->password2;?>
">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <label for="birthday-register">Data urodzenia:</label>
                                <input type="date" max="2020-12-31" id="birthday-register" name="birthday-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerForm']->value->birthday;?>
">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-box">
                                <label for="phone-number-register">Numer telefonu:</label>
                                <input type="tel" id="phone-number-register" name="phone-number-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerForm']->value->phoneNumber;?>
">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-box">
                                <label for="city-register">Miasto:</label>
                                <input type="text" id="city-register" name="city-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerForm']->value->city;?>
">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <label for="postcode-register">Kod pocztowy:</label>
                                <input type="text" id="postcode-register" name="postcode-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerForm']->value->postcode;?>
">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="street-register">Ulica:</label>
                                <input type="text" id="street-register" name="street-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerForm']->value->street;?>
">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-box">
                                <label for="building-number-register">Nr budynku:</label>
                                <input type="text" id="building-number-register" name="building-number-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerForm']->value->buildingNumber;?>
">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-box">
                                <label for="flat-number-register">Nr mieszkania:</label>
                                <input type="text" id="flat-number-register" name="flat-number-register" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['registerForm']->value->flatNumber;?>
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
