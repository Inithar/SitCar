<?php
/* Smarty version 3.1.39, created on 2021-06-06 22:38:52
  from 'C:\xampp\htdocs\car_hire\app\views\service_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bd325c443bc1_35158233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6925f141d319ff55fa804e58349f6da2f901a80f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\service_view.tpl',
      1 => 1623003322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bd325c443bc1_35158233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174351856160bd325c435281_61675330', 'navigation');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136304731560bd325c440859_00230172', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28242746260bd325c4434d5_46951273', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_174351856160bd325c435281_61675330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_174351856160bd325c435281_61675330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
homeView">Home</a>
    <a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
carsView">Samochody</a>
    <a class="nav-item nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
serviceView">Usługi <span class="sr-only"></span></a>
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
class Block_136304731560bd325c440859_00230172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_136304731560bd325c440859_00230172',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <section class="top-hero service-hero">
            <div class="hero-shadow"></div>
            <p class="top-hero-text text-light ">Usługi</p>
        </section>

        <section class="py-5 service-pricing">
            <div class="container">
                <div class="py-5 text-center">
                    <p class="display-3">Nasze usługi</p>
                    <p class="additional-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint commodi
                        dicta eum! Accusamus natus libero dolorum sed ipsa incidunt quis!</p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion" id='acc'>
                            <div class="card mb-4">
                                <div class="service-hero-box box-one">
                                    <div class="hero-shadow"></div>
                                    <p class="h-100 text-white text-center p-3">Krótkoterminowy wynajem samochodów</p>
                                </div>
                                <div data-bs-toggle="collapse" data-bs-target='#collapseOne' aria-expanded='true'
                                    aria-controls='collapseOne'>
                                    <div class="card-header text-center py-4">Rozwiń opis
                                        <i class="fas fa-angle-double-down ml-4"></i>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent='#acc'>
                                    <div class="card-body px-5 py-4">
                                        <h3>Opis:</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ex a.
                                            Necessitatibus quaerat repellendus totam perferendis.</p>
                                        <h3 class="mt-5">Dla kogo?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nisi
                                            eaque asperiores esse amet, maiores harum.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-dark py-3 px-0"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
carsView" class="p-4 px-5">Wybieram</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion" id='acc2'>
                            <div class="card mb-4">
                                <div class="service-hero-box box-two">
                                    <div class="hero-shadow"></div>
                                    <p class="h-100 text-white text-center p-3">Długoterminowy wynajem samochodów</p>
                                </div>
                                <div data-bs-toggle="collapse" data-bs-target='#collapseTwo' aria-expanded='true'
                                    aria-controls='collapseTwo'>
                                    <div class="card-header text-center py-4">Rozwiń opis
                                        <i class="fas fa-angle-double-down ml-4"></i>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent='#acc2'>
                                    <div class="card-body px-5 py-4">
                                        <h3>Opis:</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ex a.
                                            Necessitatibus quaerat repellendus totam perferendis.</p>
                                        <h3 class="mt-5">Dla kogo?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nisi
                                            eaque asperiores esse amet, maiores harum.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-dark py-3 px-0"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
carsView" class="p-4 px-5">Wybieram</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion" id='acc3'>
                            <div class="card mb-4">
                                <div class="service-hero-box box-three">
                                    <div class="hero-shadow"></div>
                                    <p class="h-100 text-white text-center p-3">Samochód do ślubu</p>
                                </div>
                                <div data-bs-toggle="collapse" data-bs-target='#collapseThree' aria-expanded='true'
                                    aria-controls='collapseThree'>
                                    <div class="card-header text-center py-4">Rozwiń opis
                                        <i class="fas fa-angle-double-down ml-4"></i>
                                    </div>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent='#acc3'>
                                    <div class="card-body px-5 py-4">
                                        <h3>Opis:</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ex a.
                                            Necessitatibus quaerat repellendus totam perferendis.</p>
                                        <h3 class="mt-5">Dla kogo?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nisi
                                            eaque asperiores esse amet, maiores harum.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-dark py-3 px-0"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
carsView" class="p-4 px-5">Wybieram</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion" id='acc4'>
                            <div class="card mb-4">
                                <div class="service-hero-box box-four">
                                    <div class="hero-shadow"></div>
                                    <p class="h-100 text-white text-center p-3">Samochód na lotnisko</p>
                                </div>
                                <div data-bs-toggle="collapse" data-bs-target='#collapseFour' aria-expanded='true'
                                    aria-controls='collapseFour'>
                                    <div class="card-header text-center py-4">Rozwiń opis
                                        <i class="fas fa-angle-double-down ml-4"></i>
                                    </div>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent='#acc4'>
                                    <div class="card-body px-5 py-4">
                                        <h3>Opis:</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ex a.
                                            Necessitatibus quaerat repellendus totam perferendis.</p>
                                        <h3 class="mt-5">Dla kogo?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nisi
                                            eaque asperiores esse amet, maiores harum.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-dark py-3 px-0"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
carsView" class="p-4 px-5">Wybieram</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion" id='acc5'>
                            <div class="card mb-4">
                                <div class="service-hero-box box-five">
                                    <div class="hero-shadow"></div>
                                    <p class="h-100 text-white text-center p-3">Samochód z kierowcą</p>
                                </div>
                                <div data-bs-toggle="collapse" data-bs-target='#collapseFive' aria-expanded='true'
                                    aria-controls='collapseFive'>
                                    <div class="card-header text-center py-4">Rozwiń opis
                                        <i class="fas fa-angle-double-down ml-4"></i>
                                    </div>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent='#acc5'>
                                    <div class="card-body px-5 py-4">
                                        <h3>Opis:</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ex a.
                                            Necessitatibus quaerat repellendus totam perferendis.</p>
                                        <h3 class="mt-5">Dla kogo?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nisi
                                            eaque asperiores esse amet, maiores harum.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-dark py-3 px-0"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
carsView" class="p-4 px-5">Wybieram</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="accordion" id='acc6'>
                            <div class="card mb-4">
                                <div class="service-hero-box box-six">
                                    <div class="hero-shadow"></div>
                                    <p class="h-100 text-white text-center p-3">Samochód z ochroną</p>
                                </div>
                                <div data-bs-toggle="collapse" data-bs-target='#collapseSix' aria-expanded='true'
                                    aria-controls='collapseSix'>
                                    <div class="card-header text-center py-4">Rozwiń opis
                                        <i class="fas fa-angle-double-down ml-4"></i>
                                    </div>
                                </div>
                                <div id="collapseSix" class="collapse" data-parent='#acc6'>
                                    <div class="card-body px-5 py-4">
                                        <h3>Opis:</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ex a.
                                            Necessitatibus quaerat repellendus totam perferendis.</p>
                                        <h3 class="mt-5">Dla kogo?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nisi
                                            eaque asperiores esse amet, maiores harum.</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-dark py-3 px-0"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
carsView" class="p-4 px-5">Wybieram</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores,
                    voluptates?</div>
                <hr>
                <div class="text-muted text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores
                    minus quaerat rerum reiciendis, delectus quidem quae recusandae provident deleniti hic doloremque
                    repellat perferendis quo eos ratione ut quod, tenetur odit!</div>
            </div>
        </section>
    </main>
<?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_28242746260bd325c4434d5_46951273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_28242746260bd325c4434d5_46951273',
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
