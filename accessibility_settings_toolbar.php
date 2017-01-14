<div id="template_settings">
    <div id="template_settings_wrapper">
        <div id="settings_toolbar" class="sans-serif">
            <!--      <div class="height_padding_by_parrent" ></div>-->
            <div id="toolbar-fontsize" class="settings_toolbar-item">
                <?=JText::_('TPL_ACCESSIBILITY_FONTSIZE');?>
                <span id="choose_fontsize-normal"></span>
                <span id="choose_fontsize-medium"></span>
                <span id="choose_fontsize-big" class="button_element_sel"></span>
            </div>
            <!--    <div class="vert_separ-wrapper settings_toolbar-item">-->
            <!--      <div class="vert_separ"></div>-->
            <!--    </div>-->
            <div id="toolbar-images_slider" class="settings_toolbar-item">
                <?=JText::_('TPL_ACCESSIBILITY_SHOW_IMAGES');?>
                <span id="image_on_off_slider" class="button_element_sel button_element_cursor"></span>
            </div>
            <!--    <div class="vert_separ-wrapper settings_toolbar-item">-->
            <!--      <div class="vert_separ"></div>-->
            <!--    </div>-->
            <div id="toolbar-page_color" class="settings_toolbar-item">
                <?=JText::_('TPL_ACCESSIBILITY_SITE_COLOR');?>
                <span id="choose_color-white" class="button_element_sel"></span>
                <span id="choose_color-black"></span>
            </div>
            <div class="vert_separ-wrapper settings_toolbar-item">
                <div class="vert_separ"></div>
            </div>
            <div id="toolbar-addit_options" class="settings_toolbar-item button_element_cursor">
                <span id="gear_icon_sett"></span> <?=JText::_('TPL_ACCESSIBILITY_SETTINGS');?>
            </div>
            <div class="vert_separ-wrapper settings_toolbar-item">
                <div class="vert_separ"></div>
            </div>
            <div id="toolbar-normal_version" class="settings_toolbar-item button_element_cursor">
              <a href="<?=explode('?', $_SERVER['REQUEST_URI'], 2)[0], "?template=", $DEFAULT_NORM_TEMLATE_NAME;?>">
                <span id="eye_icon_normal_v"></span>
                  <?=JText::_('TPL_ACCESSIBILITY_STANDART_VERSION');?>
              </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="additional_settings_options" style="display: none">
            <h3>Настройки шрифта:</h3>
            <p class="">
                <?=JText::_('TPL_ACCESSIBILITY_FONT_SETTINGS');?>
                <button class="choose_fontfamily button_element" id="choose_sans-serif">Arial</button>
                <button class="choose_fontfamily button_element" id="choose_serif">Times New Roman</button>
            </p>
            <p class="">
                <?=JText::_('TPL_ACCESSIBILITY_FONT_SETTINGS');?>
                <button class="choose_spacing button_element" id="choose_spacing-normal"><?=JText::_('TPL_ACCESSIBILITY_KERNING_STANDARD');?></button>
                <button class="choose_spacing button_element" id="choose_spacing-medium"><?=JText::_('TPL_ACCESSIBILITY_KERNING_MEDIUM');?></button>
                <button class="choose_spacing button_element" id="choose_spacing-big"><?=JText::_('TPL_ACCESSIBILITY_KERNING_LARGE');?></button>
            </p>
            <div id="additional_settings_buttons">
                <button id="restore_settings" class="button_element"><span></span><?=JText::_('TPL_ACCESSIBILITY_RESET_SETTINGS');?></button>
                <button id="close_additional_settings" class="button_element"><span></span><?=JText::_('TPL_ACCESSIBILITY_CLOSE_ADDITIONAL_PANEL');?></button>
            </div>
        </div>
    </div>
</div>
