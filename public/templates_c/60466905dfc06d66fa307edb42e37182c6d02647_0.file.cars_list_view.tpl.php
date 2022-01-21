<?php
/* Smarty version 3.1.39, created on 2021-06-07 12:30:49
  from 'C:\xampp\htdocs\car_hire\app\views\cars_list_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bdf55948cf71_81026163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60466905dfc06d66fa307edb42e37182c6d02647' => 
    array (
      0 => 'C:\\xampp\\htdocs\\car_hire\\app\\views\\cars_list_view.tpl',
      1 => 1623061847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bdf55948cf71_81026163 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['car']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
    <div class="col-md-4 col-12 d-flex justify-content-center align-items-center">
        <img src="<?php echo $_smarty_tpl->tpl_vars['c']->value["obraz"];?>
" alt="">
    </div>
    <div class="col-md-5 col-12">
        <div class="row h-100 car-info">
            <p class="m-0 mt-3 fw-bold car-name"><?php echo $_smarty_tpl->tpl_vars['c']->value["model"];?>
</p>
            <div class="col-6 d-flex flex-column align-items-start justify-content-between py-4">
                <p><img src="../public/img/cars/icon-1.png" alt=""> <?php echo $_smarty_tpl->tpl_vars['c']->value["paliwo"];?>
</p>
                <p><img src="../public/img/cars/icon-2.png" alt=""></i> <?php echo $_smarty_tpl->tpl_vars['c']->value["klimatyzacja"];?>
</p>
                <p><img src="../public/img/cars/icon-3.png" alt=""></i> <?php echo $_smarty_tpl->tpl_vars['c']->value["skrzynia_biegów"];?>
</p>
                <p><img src="../public/img/cars/icon-4.png" alt=""></i> <?php echo $_smarty_tpl->tpl_vars['c']->value["pojemność_bagażnika"];?>
</p>
            </div>
            <div class="col-6 d-flex flex-column align-items-start justify-content-between py-4">
                <p><img src="../public/img/cars/icon-5.png" alt=""> <?php echo $_smarty_tpl->tpl_vars['c']->value["liczba_drzwi"];?>
</p>
                <p><img src="../public/img/cars/icon-6.png" alt=""></i> <?php echo $_smarty_tpl->tpl_vars['c']->value["napęd"];?>
</p>
                <p><img src="../public/img/cars/icon-7.png" alt=""></i> <?php echo $_smarty_tpl->tpl_vars['c']->value["poduszki_powietrzne"];?>
</p>
                <p><img src="../public/img/cars/icon-8.png" alt=""></i> <?php echo $_smarty_tpl->tpl_vars['c']->value["śr_spalanie"];?>
</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 col-12 d-flex justify-content-center align-items-center flex-column">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationView">
            <p class="car-price text-center"><?php echo $_smarty_tpl->tpl_vars['c']->value["cena_za_dzień"];?>
 zł. / dzień</p>
            <input type="hidden" name="carID" value="<?php echo $_smarty_tpl->tpl_vars['c']->value["idsamochód"];?>
">
            <div class="action-btns d-flex justify-content-center align-items-center flex-column">
                <button class="btn btn-primary action-btn">Rezerwuje</button>
                <?php if (\core\RoleUtils::inRole("admin")) {?>
                    <button class="btn btn-primary action-btn delete-btn" formaction="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deleteCar">Usuń</button>
                <?php }?>
            </div>
        </form>
    </div>  
    <hr class="mb-5 mt-5 mt-md-0">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['visible']->value >= 0) {?>
    <div class="container d-flex justify-content-center">
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['max']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['max']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <form id="pagination<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" onsubmit="ajaxPostForm('pagination<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
pagination','list-car'); return false;">
                <input type="hidden" name="pageNumber" value="page<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                <button class="car-btn btn btn-primary uniwersal-btn" type="submit"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>
            </form>
        <?php }
}
?>
    </div>
<?php }?>

<?php }
}
