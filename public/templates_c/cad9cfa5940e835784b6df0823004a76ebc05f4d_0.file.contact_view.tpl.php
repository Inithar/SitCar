<?php
/* Smarty version 3.1.39, created on 2021-06-06 20:37:54
  from 'C:\xampp\htdocs\car_hire\app\views\contact_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bd1602bfd083_43111388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cad9cfa5940e835784b6df0823004a76ebc05f4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\contact_view.tpl',
      1 => 1623003348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60bd1602bfd083_43111388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214272476960bd1602bd32e0_03372065', 'navigation');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152421080960bd1602bf42c8_55588396', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105618980660bd1602bfc717_03740179', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_214272476960bd1602bd32e0_03372065 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_214272476960bd1602bd32e0_03372065',
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
    <a class="nav-item nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
contactView">Kontakt <span class="sr-only"></span></a>
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
class Block_152421080960bd1602bf42c8_55588396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_152421080960bd1602bf42c8_55588396',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <section class="top-hero contact-hero">
            <div class="hero-shadow"></div>
            <p class="top-hero-text text-light ">Kontakt</p>
        </section>

        <section class="contact py-5">
            <div class="container">
                <div class="text-center py-5">
                    <p class="display-3">Napisz do nas!</p>
                    <p class="additional-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="row">
                    <div class="col-md-5 col-lg-4">
                        <div class="border p-5 mb-4 text-center">
                            <h2>Dane kontaktowe</h2>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <h3 class="mt-4">adres</h3>
                            <p>ul. Sezamowa 10</p>
                            <p>00-043 Warszawa</p>
                            <h3 class="mt-4">telefon</h3>
                            <p>+48 412 000 002</p>
                            <h3 class="mt-4">e-mail</h3>
                            <p>sitcar@mail.com</p>
                            <div class="contact-logo mt-5 pt-4 mb-n3 border-top fw-bold">
                                <i class="fas fa-car text-primary"></i> Sit<span class="text-primary">Car</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="border p-5 pb-4">
                            <h2 class="text-center">Formularz kontaktowy</h2>
                            <form class="mt-5" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sendMessage">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="contact-name">Imie:</label>
                                            <input type="text" class="form-control" id="contact-name" name="contact-name" value="<?php echo $_smarty_tpl->tpl_vars['contactForm']->value->name;?>
">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="contact-surname">Nazwisko:</label>
                                            <input type="text" class="form-control" id="contact-surname" name="contact-surname" value="<?php echo $_smarty_tpl->tpl_vars['contactForm']->value->surname;?>
">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label for="contact-email">E-mail:</label>
                                            <input type="text" class="form-control" id="contact-email" name="contact-email" value="<?php echo $_smarty_tpl->tpl_vars['contactForm']->value->email;?>
">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label for="contact-topic">Temat:</label>
                                            <input type="text" class="form-control" id="contact-topic" name="contact-topic" value="<?php echo $_smarty_tpl->tpl_vars['contactForm']->value->topic;?>
">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="contact-message">Treść wiadomości:</label>
                                        <textarea class="form-control mb-3" rows="6" id="contact-message" name="contact-message" ></textarea>
                                    </div>

                                    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary">Wyślij</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-map pb-5">
            <div class="container d-flex flex-column align-items-center">
                <p class="display-4 py-4">Mapa dojazdu</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d156388.35438506675!2d20.921112642622653!3d52.233065320871326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc669a869f01%3A0x72f0be2a88ead3fc!2sWarszawa!5e0!3m2!1spl!2spl!4v1620032106369!5m2!1spl!2spl"
                    style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </section>
    </main>
<?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_105618980660bd1602bfc717_03740179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_105618980660bd1602bfc717_03740179',
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
