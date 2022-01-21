<?php
/* Smarty version 3.1.39, created on 2021-06-06 20:16:07
  from 'C:\xampp\htdocs\car_hire\app\views\home_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bd10e7035b86_00105239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fd6b5ca3dae59392a6277a43f80a0c46ea084a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\home_view.tpl',
      1 => 1623003339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bd10e7035b86_00105239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136705577460bd10e7026e19_81853563', 'navigation');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102118855860bd10e7033b37_13738003', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106453020760bd10e7034517_46789240', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91010984760bd10e7035474_44910569', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_136705577460bd10e7026e19_81853563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_136705577460bd10e7026e19_81853563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a class="nav-item nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
homeView">Home <span class="sr-only"></span></a>
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
		<a class="nav-item nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
mainLogin">Zaloguj</a>
	<?php }
}
}
/* {/block 'navigation'} */
/* {block 'header'} */
class Block_102118855860bd10e7033b37_13738003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_102118855860bd10e7033b37_13738003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header>
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
					aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
					aria-label="Slide 4"></button>
			</div>

			<div class="carousel-inner text-light text-center">
				<div class="carousel-item carousel-img-one active">
					<div
						class="carousel-text h-100 p-5 d-flex flex-column justify-content-end justify-content-md-center align-items-center">
						<div class="hero-shadow"></div>
						<p class="display-3">Samochody miejskie</p>
						<p class="d-none d-sm-block">Wypożyczalnia SitCar posiada duży wybór samochodów miejskich</p>
					</div>
				</div>

				<div class="carousel-item carousel-img-two">
					<div
						class="carousel-text h-100 p-5 d-flex flex-column justify-content-end justify-content-md-center align-items-center">
						<div class="hero-shadow"></div>
						<p class="display-3">Samochody luksusowe</p>
						<p class="d-none d-sm-block">Zobacz jaki komfort i luksus może Ci zaoferować wypożyczalnia
							SitCar</p>
					</div>
				</div>

				<div class="carousel-item carousel-img-three">
					<div
						class="carousel-text h-100 p-5 d-flex flex-column justify-content-end justify-content-md-center align-items-center">
						<div class="hero-shadow"></div>
						<p class="display-3">Samochody sportowe</p>
						<p class="d-none d-sm-block">Dla osób lubiących dużą prędkość, proponujemy samochody sportowe
						</p>
					</div>
				</div>

				<div class="carousel-item carousel-img-four">
					<div
						class="carousel-text h-100 p-5 d-flex flex-column justify-content-end justify-content-md-center align-items-center">
						<div class="hero-shadow"></div>
						<p class="display-3">Samochody użytkowe</p>
						<p class="d-none d-sm-block">Wypożyczalnia SitCar oferuje również wynajem aut użytkowych
						</p>
					</div>
				</div>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</header>
<?php
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_106453020760bd10e7034517_46789240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_106453020760bd10e7034517_46789240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
		<section class="home-boxes">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-4 home-box mb-5 mb-md-0">
						<i class="fas fa-dollar-sign"></i>
						<h3>Bez kaucji</h3>
						<p class="m-0">Możesz zdecydować się na wynajem z kaucją lub wynajem bez kaucji</p>
					</div>

					<div class="col-md-4 home-box mb-5 mb-md-0">
						<i class="fas fa-map-marker-alt"></i>
						<h3>Bez wychodzenia z domu</h3>
						<p class="m-0">Samochód możesz odebrać w salonie lub dowolnie wybranym miejscu</p>
					</div>

					<div class="col-md-4 home-box mb-5 mb-md-0">
						<i class="fas fa-user-clock"></i>
						<h3>Każda pora jest dobra</h3>
						<p class="m-0">Jesteśmy do Twojej dyspozycji przez 24 godziny na dobę. Dzwoń o każdej porze.
							Infolinia: +48 412 000 002</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="home-hero-cars">
			<div class="hero-shadow"></div>
			<div class="row m-0 h-100 align-items-center text-light">
				<div class="col">
					<div class="container p-5">
						<p class="display-4">Szeroki wachlarz usług</p>
						<p> W naszej wypożyczalni możesz zamówić m.in. auto z kierowcą – w pełni profesjonalnym,
							punktualnym i rzetelnie wykonującym swoje obowiązki.</p>
						<div class="d-flex flex-column align-items-center align-items-md-start">
							<button class="service-btn service-btn-animation text-center text-md-start""><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
serviceView" class="p-md-5">Sprawdź nasze usługi</a></button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="home-why-us py-5">
			<p class="display-3 text-center pt-5 px-3 fw-bold">Wypożyczalnia samochodów &#8211 Sit<span
					class="text-primary">Car</span></p>
			<p class="display-6 text-center pt-2 px-3 fw-bold">Dlaczego właśnie my?</p>

			<div class=" container py-5">
				<div class="row m-0">
					<div class="col-md-4 px-4 py-3">
						<p><b>Po pierwsze</b> &#8211; lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis
							amet aspernatur consequuntur quae nulla nihil. Inventore cupiditate veniam a ex repellat
							modi nemo mollitia dolorum assumenda quisquam possimus at impedit odio, consectetur minus ut
							soluta? Minima veniam alias sequi impedit. Soluta exercitationem odit accusantium, amet
							deserunt distinctio eos provident assumenda. Dolore quod doloribus non atque?
						</p>
					</div>

					<div class="col-md-4 px-4 py-3">
						<p><b>Po drugie</b> &#8211; lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
							repellendus soluta, accusamus veritatis debitis veniam doloribus adipisci, ipsa minima
							tempora quidem nulla saepe error in dolorum? Expedita minima beatae obcaecati debitis sit
							quidem maxime tempora iusto, recusandae corporis sint laudantium voluptas excepturi? Iusto
							minima harum, blanditiis quasi molestiae dolorum saepe omnis porro quisquam, vel corrupti.
						</p>
					</div>

					<div class="col-md-4 px-4 py-3">
						<p><b>Po trzecie</b> &#8211; lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quam
							earum ipsum omnis consectetur magnam obcaecati blanditiis soluta, non dolorem. Dolor, nam? A
							voluptas iusto earum aut quam? Quidem ullam illo assumenda officia ratione labore iste
							voluptatibus iure blanditiis! Sunt, ea atque dolorum deleniti magnam libero, ad dolore quas
							perferendis labore repudiandae iste repellat. Asperiores.
						</p>
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
class Block_91010984760bd10e7035474_44910569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_91010984760bd10e7035474_44910569',
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
