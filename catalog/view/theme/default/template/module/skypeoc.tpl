<script>
$(function(){
    if ($('#<?=SKYPE_CALL?>').html() == undefined)
    {
        $('.skypeoc_cap').html($('.skypeoc_cap').html()+'<?=$this->skypeoc->create(SKYPE_CALL);?>');
    }
    if ($('#<?=SKYPE_VIDEO?>').html() == undefined)
    {
        $('.skypeoc_cap').html($('.skypeoc_cap').html()+'<?=$this->skypeoc->create(SKYPE_VIDEO);?>');
    }
    if ($('#<?=SKYPE_CHAT?>').html() == undefined)
    {
        $('.skypeoc_cap').html($('.skypeoc_cap').html()+'<?=$this->skypeoc->create(SKYPE_CHAT);?>');
    }
    Skype.ui({
            name: "call",
            element: "<?=SKYPE_CALL?>",
            participants: ["<?=$skype_login?>"],
            imageSize: <?=$skype_image_size?>,
            imageColor: "<?=$skype_image_color?>"
        });
    Skype.ui({
            name: "call",
            video: "true",
            element: "<?=SKYPE_VIDEO?>",
            participants: ["<?=$skype_login?>"],
            imageSize: <?=$skype_image_size?>,
            imageColor: "<?=$skype_image_color?>"
        });
    Skype.ui({
            name: "chat",
            element: "<?=SKYPE_CHAT?>",
            participants: ["<?=$skype_login?>"],
            imageSize: <?=$skype_image_size?>,
            imageColor: "<?=$skype_image_color?>"
        });
});
</script>
<div class="skypeoc_cap"></div>