<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-21 05:58:24
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tour\step7.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2565158f983607725d9_21671058%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '626349bc2fdfcfc9a583ed5c1f776ba96ef665cf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tour\\step7.tpl',
      1 => 1492747023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2565158f983607725d9_21671058',
  'variables' => 
  array (
    'action_url' => 0,
    'option' => 0,
    'step' => 0,
    'id' => 0,
    'sub_day' => 0,
    'agency_id' => 0,
    'tour_id' => 0,
    'day_id' => 0,
    'sub_option' => 0,
    'lable' => 0,
    'current_tab_day' => 0,
    'foo' => 0,
    'base_url_admin' => 0,
    'current_control' => 0,
    'my_sub_day' => 0,
    'schedule_days' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f983608a2ef1_34351797',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f983608a2ef1_34351797')) {
function content_58f983608a2ef1_34351797 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '2565158f983607725d9_21671058';
?>
<div class="container-step7">

    <form class="form-horizontal margin-none" id="tourForm" name="tourForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
">
        <input type="hidden" name="option" id="option" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" />
        <input type="hidden" name="step" id="step" value="<?php echo $_smarty_tpl->tpl_vars['step']->value;?>
" />
        <input type="hidden" name="primary" id="primary" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />

        <input type="hidden" name="hidden[sub_day]" value="<?php echo $_smarty_tpl->tpl_vars['sub_day']->value;?>
">
        <input type="hidden" name="hidden[agency_id]" value="<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
">
        <input type="hidden" name="hidden[tour_id]" value="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
">
        <input type="hidden" name="hidden[day_id]" value="<?php echo $_smarty_tpl->tpl_vars['day_id']->value;?>
">
        <input type="hidden" name="hidden[btn_save]" id="btn_save" value="">
        <input type="hidden" name="hidden[sub_day]" value="<?php echo $_smarty_tpl->tpl_vars['sub_day']->value;?>
">
        <input type="hidden" name="hidden[sub_option]" value="<?php echo $_smarty_tpl->tpl_vars['sub_option']->value;?>
">


        <div class="form-group">
            <label class="control-label text-blue" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_schedule'];?>
 </label>	
        </div>

        <ul class="nav nav-tabs tour-tabs">
            <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['sub_day']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['sub_day']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                <li <?php if ($_smarty_tpl->tpl_vars['current_tab_day']->value == $_smarty_tpl->tpl_vars['foo']->value) {?>class="active"<?php }?>>
                    <a class="tabs" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&step=<?php echo $_smarty_tpl->tpl_vars['step']->value;?>
&t=<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
&a_id=<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
&sub_day=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
&sub_option=edit"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
 <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
                </li>
            <?php }} ?>

            <?php echo smarty_function_math(array('assign'=>'my_sub_day','equation'=>'x+y','x'=>$_smarty_tpl->tpl_vars['sub_day']->value,'y'=>1),$_smarty_tpl);?>

            <li class="plus"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&step=<?php echo $_smarty_tpl->tpl_vars['step']->value;?>
&t=<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
&a_id=<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
&sub_day=<?php echo $_smarty_tpl->tpl_vars['my_sub_day']->value;?>
&sub_option=add"><i class="fa fa-plus"></i></a></li>
        </ul>
        <!--
        http://192.168.1.222/airtrippy/admin/tour/add/?id=16&step=7&t=add&a_id=21 &sub_day=2&sub_option=
        -->	


        <div class="tab-content tour_schedule">

            <div id="tab1" class="fade in active">
                <a data-toggle="confirmation" data-placement="left" href="javascript:void(o)" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/delete/?id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&step=<?php echo $_smarty_tpl->tpl_vars['step']->value;?>
&t=<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
&a_id=<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
&day_id=<?php echo $_smarty_tpl->tpl_vars['day_id']->value;?>
" class="ask btn btn-danger pull-right btn-del" title="Delete"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_delete'];?>
</a>		

                <div class="form-group">
                    <label class="col-sm-2 control-label title" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
 <?php echo $_smarty_tpl->tpl_vars['current_tab_day']->value;?>
</label>
                    <div class="col-sm-6">
                        <input class="form-control" name="schedule[title]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['schedule_days']->value['title'];?>
" placeholder="Nhập tiêu đề ngày <?php echo $_smarty_tpl->tpl_vars['current_tab_day']->value;?>
 (Ví dụ: Đà Lạt - Thung lũng vàng)">
                        <span id="valid_title" class="red"></span>
                    </div>				
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_schedule'];?>
</label>
                    <ul class="list-inline">
                        <li><input type="checkbox" class="form-control morning" <?php if ($_smarty_tpl->tpl_vars['schedule_days']->value['morning'] == 1) {?>checked="checked"<?php }?> name="schedule[morning]" value="1"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_morning'];?>
</li>
                        <li><input type="checkbox" class="form-control afternoon" <?php if ($_smarty_tpl->tpl_vars['schedule_days']->value['afternoon'] == 1) {?>checked="checked"<?php }?> name="schedule[afternoon]" value="1"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_afternoon'];?>
</li>
                        <li><input type="checkbox" class="form-control evening" <?php if ($_smarty_tpl->tpl_vars['schedule_days']->value['evening'] == 1) {?>checked="checked"<?php }?> name="schedule[evening]" value="1"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_evening'];?>
</li>
                    </ul>
                </div>

                <div class="schedule-morning ">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><button class="btn-primary btn "><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_morning'];?>
</button></label>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2">
                        <textarea class="form-control" id="" name="schedule[morning_content]" ><?php echo $_smarty_tpl->tpl_vars['schedule_days']->value['morning_content'];?>
</textarea>
                        <span class="ghichu pull-right"><span class="count-char">0</span>-2000 ký tự</span>
                        <span id="valid_description" class="red"></span>
                    </div>
                </div>


                <div class="schedule-afternoon ">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><button class="btn-primary btn "><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_afternoon'];?>
</button></label>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2">
                        <textarea class="form-control" id="" name="schedule[afternoon_content]" ><?php echo $_smarty_tpl->tpl_vars['schedule_days']->value['afternoon_content'];?>
</textarea>
                        <span class="ghichu pull-right"><span class="count-char">0</span>-2000 ký tự</span>
                        <span id="valid_description" class="red"></span>
                    </div>
                </div>

                <div class="schedule-evening ">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><button class="btn-primary btn "><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_evening'];?>
</button></label>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2">
                        <textarea class="form-control" id="evening_content-1" name="schedule[evening_content]" ><?php echo $_smarty_tpl->tpl_vars['schedule_days']->value['evening_content'];?>
</textarea>
                        <span class="ghichu pull-right"><span class="count-char">0</span>-2000 ký tự</span>
                        <span id="valid_description" class="red"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label title" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_experience'];?>
 </label>
                    <div class="col-sm-6">
                        <input class="form-control" name="schedule[experience]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['schedule_days']->value['experience'];?>
" placeholder=" Nhập nội dung. Ví dụ: Thăm chợ Đà Lạt; Thử chè hé" >
                        <span id="valid_title" class="red"></span>
                    </div>				
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label title" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_good_food'];?>
 </label>
                    <div class="col-sm-6">
                        <input class="form-control" name="schedule[good_food]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['schedule_days']->value['good_food'];?>
" placeholder="Nhập nội dung. Ví dụ: Khoai lang nướng chợ Đà Lạt" >
                        <span id="valid_title" class="red"></span>
                    </div>				
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label title" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_include'];?>
 </label>
                    <div class="col-sm-6">
                        <input class="form-control" name="schedule[included]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['schedule_days']->value['included'];?>
" placeholder=" Nhập nội dung. Ví dụ: Vé đi cáp treo, ăn sáng">
                        <span id="valid_title" class="red"></span>
                    </div>				
                </div>

            </div>
            <div id="tab2" class="tab-pane fade in active">

            </div>
        </div>	
    </form>  
    <div class="hidden">
        <div class="title">
            <li><a data-toggle="tab" class="tabs" href="#tab2"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
 2</a></li>
        </div>
        <div class="content">
            <div id="tab2" class="tab-pane fade animated fadeInUp"></div>
        </div>	
    </div>


    <div class="col-sm-offset-2">
        <?php echo $_smarty_tpl->getSubTemplate ("tour/dropzone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
    </div>

    <button class="btn btn-success btn-save pull-right">Save</button>

</div><?php }
}
?>