<?php
/* Smarty version 3.1.39, created on 2021-06-07 12:16:11
  from 'C:\xampp\htdocs\car_hire\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bdf1ebd93936_52811953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d1f2611c0f896e5dd00a0f8b8f3089b70d3247c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\login_view.tpl',
      1 => 1623060967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60bdf1ebd93936_52811953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60139424460bdf1ebd7f456_07950122', 'navigation');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195929153460bdf1ebd8ce14_04882460', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_60139424460bdf1ebd7f456_07950122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_60139424460bdf1ebd7f456_07950122',
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
    <?php if (\core\RoleUtils::inRole("admin")) {?>
        <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
transactionTableView">Transakcja</a>
    <?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
		<a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a>
	<?php } else { ?>
		<a class="nav-item nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
mainLogin">Zaloguj <span class="sr-only"></span></a>
	<?php }
}
}
/* {/block 'navigation'} */
/* {block 'main'} */
class Block_195929153460bdf1ebd8ce14_04882460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_195929153460bdf1ebd8ce14_04882460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <section class="login-section d-flex justify-content-center align-items-center">
            <div class="hero-shadow"></div>
            <div class="wrapper">
                <form method="post">
                    <h1>Logowanie</h1>
                    <div class="form-box">
                        <label for="email">Adres e-mail:</label>
                        <input type="text" id="email" name="email" placeholder="Podaj e-mail" class="form-control">
                    </div>
                    <div class="form-box">
                        <label for="pass">Hasło:</label>
                        <input type="password" id="pass" name="pass" placeholder="Podaj hasło" class="form-control">
                    </div>
                    
                    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="control-button">
                        <button class="btn btn-primary login-btn lef-login-btn uniwersal-btn" 
                        <?php if ($_smarty_tpl->tpl_vars['form']->value->whereToGo == 0) {?>
                            formaction="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationLogin"
                        <?php } else { ?>
                            formaction="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login"
                        <?php }?>
                        >Zaloguj</button>
                        <button class="btn btn-primary login-btn uniwersal-btn" formaction="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
regView">Zarejestruj</button>
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
