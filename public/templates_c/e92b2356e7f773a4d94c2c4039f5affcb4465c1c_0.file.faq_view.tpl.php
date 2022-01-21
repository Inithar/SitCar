<?php
/* Smarty version 3.1.39, created on 2021-06-06 22:38:46
  from 'C:\xampp\htdocs\car_hire\app\views\faq_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bd325623b8a7_59165501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e92b2356e7f773a4d94c2c4039f5affcb4465c1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\faq_view.tpl',
      1 => 1623003344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bd325623b8a7_59165501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85647930460bd3256230b11_21266825', 'navigation');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27807821860bd325623a948_87266875', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60239062360bd325623b2c0_37301797', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_85647930460bd3256230b11_21266825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_85647930460bd3256230b11_21266825',
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
    <a class="nav-item nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
faqView">FAQ</a>
    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
contactView">Kontakt</a>
    <?php if (\core\RoleUtils::inRole("admin")) {?>
        <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
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
class Block_27807821860bd325623a948_87266875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_27807821860bd325623a948_87266875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <section class="top-hero faq-hero">
            <div class="hero-shadow"></div>
            <p class="top-hero-text text-light ">FAQ</p>
        </section>

        <section class="py-5 faq">
            <div class="container">
                <div class="py-md-5 text-center">
                    <p class="display-3">Najczęściej zadawane pytania</p>
                    <p class="additional-text py-5 py-md-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi atque
                        odio molestiae. Quidem voluptate, quibusdam adipisci delectus quae eaque facere suscipit hic
                        earum natus porro odit laudantium neque, temporibus tenetur?
                    </p>
                </div>

                <div class="row text-center">
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                    <div class="py-md-5 py-3 d-flex flex-column align-items-center">
                        <div class="question-container d-flex flex-column justify-content-end">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, aut?</p>
                        </div>
                        <div class="py-5 px-3 px-md-0">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero esse eius magni? Odit non
                                dignissimos architecto laborum officia tempora, saepe amet, eius expedita dolore sequi minus
                                ullam labore fugiat quos dicta consequuntur ab ipsum, enim magnam sapiente odio animi quo.
                                Voluptas, corporis blanditiis dolore quibusdam ipsam aliquid labore? Aut fugiat rerum,
                                dolores pariatur modi unde in nostrum beatae blanditiis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_60239062360bd325623b2c0_37301797 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_60239062360bd325623b2c0_37301797',
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
