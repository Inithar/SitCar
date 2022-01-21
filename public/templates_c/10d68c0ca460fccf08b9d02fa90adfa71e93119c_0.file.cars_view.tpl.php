<?php
/* Smarty version 3.1.39, created on 2021-06-06 20:55:12
  from 'C:\xampp\htdocs\car_hire\app\views\cars_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bd1a108fd620_38046576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10d68c0ca460fccf08b9d02fa90adfa71e93119c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\cars_view.tpl',
      1 => 1623003352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cars_list_view.tpl' => 1,
  ),
),false)) {
function content_60bd1a108fd620_38046576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35925733560bd1a10865ae8_79836343', 'navigation');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120803771360bd1a10870d41_01820203', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36210652660bd1a108fccd1_28172536', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_35925733560bd1a10865ae8_79836343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_35925733560bd1a10865ae8_79836343',
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
class Block_120803771360bd1a10870d41_01820203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_120803771360bd1a10870d41_01820203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <section class="top-hero cars-hero">
            <div class="hero-shadow"></div>
            <p class="top-hero-text text-light ">Samochody</p>
        </section>

        <section class="py-5 mb-5 cars">
            <div class="container">
                <div class="py-5 text-center">
                    <p class="display-3">Wybierz swój samochód</p>
                    <p class="additional-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi atque
                        odio molestiae. Quidem voluptate, quibusdam adipisci delectus quae eaque facere suscipit hic
                        earum natus porro odit laudantium neque, temporibus tenetur?
                    </p>
                </div>

                <div class="row text-center py-md-5">
                    <div class="col-md-3 col-6">
                        <button class="btn btn-outline-primary car-btn" onclick="ajaxReloadElement('list-car','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
cityCars')">Miejskie</button>
                    </div>
                    <div class="col-md-3 col-6">
                        <button class="btn btn-outline-primary car-btn" onclick="ajaxReloadElement('list-car','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
luxuriousCars')">Luksusowe</button>
                    </div>
                    <div class="col-md-3 col-6">
                        <button class="btn btn-outline-primary car-btn" onclick="ajaxReloadElement('list-car','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sportCars')">Sportowe</button>
                    </div>
                    <div class="col-md-3 col-6">
                        <button class="btn btn-outline-primary car-btn" onclick="ajaxReloadElement('list-car','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
utilityCars')">Użytkowe</button>
                    </div>
                </div>
            </div>

            <div class="container py-5">
                <div id="list-car" class="row">
                    <?php $_smarty_tpl->_subTemplateRender("file:cars_list_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>

        </section>
    </main>
<?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_36210652660bd1a108fccd1_28172536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_36210652660bd1a108fccd1_28172536',
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
