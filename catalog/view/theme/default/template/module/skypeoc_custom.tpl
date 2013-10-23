<script>
    $(function(){
        $('.<?=$skype_custom_class_call?>').click(function(){
            $(this).after('<iframe style="display: none;" src="skype:<?=$skype_login;?>?call" width="0" height="0"></iframe>');
        });
        $('.<?=$skype_custom_class_video?>').click(function(){
            $(this).after('<iframe style="display: none;" src="skype:<?=$skype_login;?>?call&video=true" width="0" height="0"></iframe>');
        });
        $('.<?=$skype_custom_class_chat?>').click(function(){
            $(this).after('<iframe style="display: none;" src="skype:<?=$skype_login;?>?chat" width="0" height="0"></iframe>');
        });
    });
</script>
