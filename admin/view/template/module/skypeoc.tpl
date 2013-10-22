<?php echo $header; ?>
<div id="content">
    <div class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
        <?php } ?>
    </div>
    <?php if ($error_warning) { ?>
    <div class="warning"><?php echo $error_warning; ?></div>
    <?php } ?>
    <div class="box">
        <div class="heading">
            <h1><img src="view/image/skype.png" alt="" /> <?php echo $heading_title; ?></h1>
            <div class="buttons">
                <a id="submit_form" class="button"><?php echo $button_save; ?></a>
                <a onclick="location = '<?php echo $cancel; ?>';" class="button"><?php echo $button_cancel; ?></a>
            </div>
        </div>
        <div class="content">
            <div class="htabs">
                <a href="#tab-settings"><?=$tab_settings;?></a>
                <a href="#tab-help"><?=$tab_help;?></a>
                <a href="#tab-callback"><?=$tab_callback;?></a>
            </div>
            <div id="tab-settings">
                <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form">
                    <table class="form">
                        <tr>
                            <td>
                                <span class="required">*</span>
                                <?= $entry_skype_login; ?>
                                <br/>
                                <div class="help"><?= $help_skype_login; ?></div>
                            </td>
                            <td><input name="skype_login" id="skype_login" value="<?=$skype_login?>" /></td>
                        </tr>
                        <tr>
                            <td>
                                <?= $entry_skype_gen_output; ?>
                                <br/>
                                <div class="help"><?= $help_skype_gen_output; ?></div>
                            </td>
                            <td>
                                <select id="skype_gen_output" name="skype_gen_output" >
                                    <?php foreach($skype_gen_methods as $key => $skype_gen_methods_item) :?>
                                    <?php if ($key == $skype_gen_output) :?>
                                    <option value="<?=$key?>" selected="selected"><?=$skype_gen_methods_item?></option>
                                    <?php else :?>
                                    <option value="<?=$key?>"><?=$skype_gen_methods_item?></option>
                                    <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </td>
                        </tr>
                        <tr class="standart_gen">
                            <td>
                                <span class="required">*</span>
                                <?= $entry_skype_tag; ?>
                                <br/>
                                <div class="help"><?= $help_skype_tag; ?></div>
                            </td>
                            <td><input name="skype_tag" id="skype_tag" value="<?=$skype_tag?>" /></td>
                        </tr>
                        <tr class="standart_gen">
                            <td>
                                <?= $entry_skype_class; ?>
                                <br/>
                                <div class="help"><?= $help_skype_class; ?></div>
                            </td>
                            <td><input name="skype_class" id="skype_tag" value="<?=$skype_class?>" /></td>
                        </tr>
                        <tr class="standart_gen">
                            <td>
                                <?= $entry_skype_image_size; ?>
                                <br/>
                                <div class="help"><?= $help_skype_image_size; ?></div>
                            </td>
                            <td>
                                <select name="skype_image_size" >
                                    <?php foreach($skype_image_sizes as $skype_image_sizes_item) :?>
                                    <?php if ($skype_image_sizes_item == $skype_image_size) :?>
                                    <option selected="selected"><?=$skype_image_sizes_item?></option>
                                    <?php else :?>
                                    <option><?=$skype_image_sizes_item?></option>
                                    <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </td>
                        </tr>
                        <tr class="standart_gen">
                            <td>
                                <?= $entry_skype_image_color; ?>
                                <br/>
                                <div class="help"><?= $help_skype_image_color; ?></div>
                            </td>
                            <td>
                                <select name="skype_image_color" >
                                    <?php foreach($skype_image_colors as $skype_image_colors_item) :?>
                                    <?php if ($skype_image_colors_item == $skype_image_color) :?>
                                    <option selected="selected"><?=$skype_image_colors_item?></option>
                                    <?php else :?>
                                    <option><?=$skype_image_colors_item?></option>
                                    <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </td>
                        </tr>
                        <tr class="custom_gen">
                            <td>
                                <span class="required">*</span>
                                <label><?=$entry_skype_custom_html_call;?></label>
                            </td>
                            <td>
                                <textarea name="skype_custom_output_html_call"><?=$skype_custom_output_html_call?></textarea>
                            </td>
                        </tr>
                        <tr class="custom_gen">
                            <td>
                                <span class="required">*</span>
                                <label><?=$entry_skype_custom_html_video;?></label>
                            </td>
                            <td>
                                <textarea name="skype_custom_output_html_video"><?=$skype_custom_output_html_video?></textarea>
                            </td>
                        </tr>
                        <tr class="custom_gen">
                            <td>
                                <span class="required">*</span>
                                <label><?=$entry_skype_custom_html_chat;?></label>
                            </td>
                            <td>
                                <textarea name="skype_custom_output_html_chat"><?=$skype_custom_output_html_chat?></textarea>
                            </td>
                        </tr>
                        <tr class="custom_gen">
                            <td>
                                <span class="required">*</span>
                                <label><?=$entry_skype_custom_class_call;?></label>
                            </td>
                            <td>
                                <input name="skype_custom_output_class_call" value="<?=$skype_custom_output_class_call?>" />
                            </td>
                        </tr>
                        <tr class="custom_gen">
                            <td>
                                <span class="required">*</span>
                                <label><?=$entry_skype_custom_class_video;?></label>
                            </td>
                            <td>
                                <input name="skype_custom_output_class_video" value="<?=$skype_custom_output_class_video?>" />
                            </td>
                        </tr>
                        <tr class="custom_gen">
                            <td>
                                <span class="required">*</span>
                                <label><?=$entry_skype_custom_class_chat;?></label>
                            </td>
                            <td>
                                <input name="skype_custom_output_class_chat" value="<?=$skype_custom_output_class_chat?>" />
                            </td>
                        </tr>
                    </table>

                    <h4><?=$entry_skype_enable_module?></h4>
                    <a href="#" id="enable_all"><?=$entry_skype_enable_all;?></a> / <a href="#" id="disable_all"><?=$entry_skype_disable_all;?></a>
                    <table id="module" class="list">
                        <thead>
                            <tr>
                                <td class="left"><?=$entry_skype_table_page?></td>
                                <td class="left"><?=$entry_skype_table_status?></td>
                            </tr>
                        </thead>
                        <?php $module_row = 0; ?>
                        <?php foreach ($modules as $module) { ?>
                        <tbody id="module-row<?php echo $module_row; ?>">
                            <tr>
                                <td class="left">
                                    <input type="hidden" hidden="hidden" value="<?php echo $module['layout_id']; ?>" name="skypeoc_module[<?php echo $module_row; ?>][layout_id]" />
                                    <input type="hidden" hidden="hidden" value="0" name="skypeoc_module[<?php echo $module_row; ?>][sort_order]" />
                                    <input type="hidden" hidden="hidden" value="content_top" name="skypeoc_module[<?php echo $module_row; ?>][position]" />
                                    <?php foreach ($layouts as $layout) { ?>
                                    <?php if ($layout['layout_id'] == $module['layout_id']) { ?>
                                    <?php echo $layout['name']; ?>
                                    <?php } ?>
                                    <?php } ?>
                                </td>
                                <td class="left">
                                    <select name="skypeoc_module[<?php echo $module_row; ?>][status]">
                                        <?php if ($module['status']) { ?>
                                        <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                                        <option value="0"><?php echo $text_disabled; ?></option>
                                        <?php } else { ?>
                                        <option value="1"><?php echo $text_enabled; ?></option>
                                        <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                        <?php $module_row++; ?>
                        <?php } ?>
                    </table>
                </form>
            </div>
            <div id="tab-help">
                <h2><?=$entry_skype_help_settings;?></h2>
                <table id="module" class="list">
                    <thead>
                        <tr>
                            <td class="left"><?=$entry_skype_help_settings_sett;?></td>
                            <td class="left"><?=$entry_skype_help_settings_desc;?></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="left"><img src="view/image/skypeoc_help1.png" /></td>
                            <td class="left"><?=$entry_skype_help_setting1;?></td>
                        </tr>
                        <tr>
                            <td class="left"><img src="view/image/skypeoc_help2.png" /></td>
                            <td class="left"><?=$entry_skype_help_setting2;?></td>
                        </tr>
                        <tr>
                            <td class="left"><img src="view/image/skypeoc_help3.png" /></td>
                            <td class="left"><?=$entry_skype_help_setting3;?></td>
                        </tr>
                        <tr>
                            <td class="left"><img src="view/image/skypeoc_help4.png" /></td>
                            <td class="left"><?=$entry_skype_help_setting4;?></td>
                        </tr>
                        <tr>
                            <td class="left"><img src="view/image/skypeoc_help5.png" /></td>
                            <td class="left"><?=$entry_skype_help_setting5;?></td>
                        </tr>
                        <tr>
                            <td class="left"><img src="view/image/skypeoc_help6.png" /></td>
                            <td class="left"><?=$entry_skype_help_setting6;?></td>
                        </tr>
                        <tr>
                            <td class="left"><img src="view/image/skypeoc_help7.png" /></td>
                            <td class="left"><?=$entry_skype_help_setting7;?></td>
                        </tr>
                        <tr>
                            <td class="left"><img src="view/image/skypeoc_help8.png" /></td>
                            <td class="left"><?=$entry_skype_help_setting8;?></td>
                        </tr>
                        <tr>
                            <td class="left"><img src="view/image/skypeoc_help9.png" /></td>
                            <td class="left"><?=$entry_skype_help_setting9;?></td>
                        </tr>
                        <tr>
                            <td class="left"><img src="view/image/skypeoc_help10.png" /></td>
                            <td class="left"><?=$entry_skype_help_setting10;?></td>
                        </tr>
                        <tr>
                            <td class="left"><img src="view/image/skypeoc_help11.png" /></td>
                            <td class="left"><?=$entry_skype_help_setting11;?></td>
                        </tr>
                        <tr>
                            <td class="left"><img src="view/image/skypeoc_help12.png" /></td>
                            <td class="left"><?=$entry_skype_help_setting12;?></td>
                        </tr>
                        <tr>
                            <td class="left"><img src="view/image/skypeoc_help13.png" /></td>
                            <td class="left"><?=$entry_skype_help_setting13;?></td>
                        </tr>
                    </tbody>
                </table>
                <h2><?=$entry_skype_help_using;?></h2>
                <div><?=$entry_skype_help_setting14;?></div>
                <div><?=$entry_skype_help_setting15;?></div>
                <div><?=$entry_skype_help_setting16;?></div>

                <h2><?=$entry_skype_help_video?></h2>
                <h4><?=$entry_skype_help_video_call?></h4>
                <object id="videoplayer319" type="application/x-shockwave-flash" data="http://test.makxxx.ru/image/data/uppod.swf" width="500" height="375"><param name="bgcolor" value="#ffffff" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="movie" value="http://test.makxxx.ru/image/data/uppod.swf" /><param name="flashvars" value="comment=Звонок с сайта&amp;m=video&amp;file=http://test.makxxx.ru/image/data/call.flv" /></object>
                <h4><?=$entry_skype_help_video_custom;?></h4>
                <object id="videoplayer321" type="application/x-shockwave-flash" data="http://test.makxxx.ru/image/data/uppod.swf" width="500" height="375"><param name="bgcolor" value="#ffffff" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="movie" value="http://test.makxxx.ru/image/data/uppod.swf" /><param name="flashvars" value="comment=Настраиваемый способ генерации Skype ссылки&amp;m=video&amp;file=http://test.makxxx.ru/image/data/changestandarttocustom.flv" /></object>
                <h4><?=$entry_skype_help_video_add;?></h4>
                <object id="videoplayer322" type="application/x-shockwave-flash" data="http://test.makxxx.ru/image/data/uppod.swf" width="500" height="375"><param name="bgcolor" value="#ffffff" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="movie" value="http://test.makxxx.ru/image/data/uppod.swf" /><param name="flashvars" value="comment=Добавляем Skype ссылки в шаблон сайта&amp;m=video&amp;file=http://test.makxxx.ru/image/data/addlinks.flv" /></object>
            </div>
            <div id="tab-callback">
                <form id="feedback">
                    <table class="form">
                        <tr>
                            <td>
                                <span class="required">*</span>
                                <?=$entry_skype_feedback_name;?>
                            </td>
                            <td><input id="skype_feedback_name" name="skype_feedback_name" value="<?=$config_owner?>" /></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="required">*</span>
                                <?=$entry_skype_feedback_email;?>
                            </td>
                            <td><input id="skype_feedback_email" name="skype_feedback_email" value="<?=$config_email?>" /></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="required">*</span>
                                <?=$entry_skype_feedback_question?>
                            </td>
                            <td><textarea id="skype_feedback_question" name="skype_feedback_question" ></textarea></td>
                        </tr>
                    </table>
                </form>
                <a id="submit_feedback" class="button"><?=$entry_skype_feedback_send;?></a>
            </div>
        </div>
    </div >
</div>
<script type="text/javascript" src="view/javascript/jquery/jquery.validate.min.js"></script>
<script type="text/javascript"><!--
    $('.htabs a').tabs();

    $(function(){
    $("#form").validate({
        rules:{
            skype_login:{
                required: true
            },
            skype_tag:{
                required: true
            },
            skype_custom_output_html:{
                required: true
            },
            skype_custom_output_id:{
                required: true
            }
        },
        messages:{
            skype_login:{
                required: "<?=$error_empty_skype_login?>"
            },
            skype_tag:{
                required: "<?=$error_empty_skype_tag?>"
            },
            custom_output_html:{
                required: "<?=$error_empty_skype_custom_html?>"
            },
            custom_output_id:{
                required: "<?=$error_empty_skype_custom_id?>"
            }
        }
    });
    $("#feedback").validate({
        rules:{
            skype_feedback_name:{
                required: true
            },
            skype_feedback_email:{
                required: true,
                email: true
            },
            skype_feedback_question:{
                required: true,
                minlength: 10,
                maxlength: 5000
            }
        },
        messages:{
            skype_feedback_name:{
                required: "<?=$error_empty_skype_feedback_name;?>"
            },
            skype_feedback_email:{
                required: "<?=$error_empty_skype_feedback_email;?>",
                email: "<?=$error_valid_skype_feedback_email;?>"
            },
            skype_feedback_question:{
                required: "<?=$error_empty_skype_feedback_question;?>",
                minlength: "<?=$error_empty_skype_feedback_min;?>",
                maxlength: "<?=$error_empty_skype_feedback_max;?>"
            }
        }
    });
    function check_output()
    {
        if ($('#skype_gen_output option:selected').val() == 'custom')
        {
            $('.standart_gen').hide();
            $('.custom_gen').show();
        }
        else
        {
            $('.custom_gen').hide();
            $('.standart_gen').show();
        }
    }
    check_output();
    $('#skype_gen_output').change(function(){
        check_output();
    });

    $('#submit_form').click(function(){
        $('.htabs a[href=#tab-settings]').click();
        $('#form').submit();
    });
    $('#submit_feedback').click(function(){
        $('#feedback').submit();
    });
    $('#feedback').submit(function(){
        if ( $('#feedback').valid())
        {
            $('#submit_feedback').before('<img class="ajax_load" src="view/image/skypeoc-ajax-loader.gif" />');
            $('#submit_feedback').hide();
            $.post('<?=$send_feedback?>&token=<?=$token?>',
                {
                    name : $('#skype_feedback_name').val(),
                    email : $('#skype_feedback_email').val(),
                    question : $('#skype_feedback_question').val()
                },
                function(response){
                $('.success, .warning, .ajax_load').remove();
                $('#submit_feedback').show();
                if (response == '1')
                {
                    $('#submit_feedback').before('<div class="success"><?=$text_success_send_feedback;?></div>');
                }
                else
                {
                    $('#submit_feedback').before('<div class="warning"><?=$error_send_email_skype_feedback;?></div>');
                }
            });
        }
        return false;
    });

    $('#enable_all').click(function(){
        $('.list option[value=1]').attr('selected', 'selected');
        return false;
    });
    $('#disable_all').click(function(){
        $('.list option[value=0]').attr('selected', 'selected');
        return false;
    });
});
//--></script>
<?php echo $footer; ?>