<form action="%pp_url%/pp-functions/form_process.php" method="post" id="zen_form"
      onsubmit="return verifyForm('zen_form');">
    <input type="hidden" name="page" value="%step%"/>
    <input type="hidden" name="session" value="%session%"/>

    <div id="zen_content" class="zen_round zen_box_shadow zen_fonts">

        %step_list%

        <p class="zen">%data:description%</p>

        %form%
        <div class="zen_clear"></div>
        %captcha%
    </div>

    <div id="zen_section_footer" class="zen_fonts zen_shadow_light zen_gray">
        <div class="zen_section_right " style="text-align:right;">
            <input type="submit" value="Continue" class="zen_focus" />
        </div>
        <div class="zen_section_left zen_small">
            <span><a href="%pp_url%/register.php?action=reset&sp=%salt%&session=%session%">Cancel
                    Registration</a></span>
        </div>
        <div class="zen_clear"></div>
    </div>

</form>

<script type="text/javascript">
    var check_pwd_strength = '%pass_strength%';
</script>