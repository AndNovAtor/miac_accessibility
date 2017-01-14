/*$('.pop dt').click(function() {
    $(this).toggleClass('opened').next().slideToggle('slow');
    return false;
});
$('.departments .dep-close').click(function() {
    $(this).parent().parent().slideToggle('slow').prev().toggleClass('opened');
    return false;
});
$('.closeme a').click(function() {
    $(this).parent().parent().slideToggle('slow').prev().toggleClass('opened');
    return false;
});

$('.a-settings, .closepopped').click(function() {
    $('.popped').slideToggle('slow');
    return false;
});

});*/
jQuery(function($) {
    function set_item_selected(item_or_item_id) {
        $(item_or_item_id).parent().find("*").each(function () {
            $(this).removeClass("button_element_sel");
        });
        $(item_or_item_id).addClass("button_element_sel");
    }

    function set_font_size() {
        $('body').removeClass('fontsize-normal fontsize-medium fontsize-big').addClass(Cookies.get('blind-font-size'));
    }

    $('#toolbar-fontsize span').click(function () {
        var fontsize = $(this).attr('id').slice(7);
        Cookies.set('blind-font-size', fontsize, {path: '/'});
        set_font_size();
        set_item_selected($(this));
        return false;
    });

    function setImagesState() {
        $('body').removeClass('images-on images-off').addClass(Cookies.get('blind-images_state'));
        if ($('body').hasClass('images-off')) {
            $("#image_on_off_slider").removeClass('button_element_sel');
            $('img').each(function () {
                $(this).before("<div class='div_by_image_alt'"+
                    " style='"+$(this).attr("style").replace("undefined", "") + "'"+
                    "; width: "+$(this).width()+
                    "; height: "+$(this).height()+
                    "; padding: 1px'>" + $(this).attr('alt') + "</div>");
            });
        } else {
            $("#image_on_off_slider").addClass('button_element_sel');
            $('img').each(function () {
                $(this).prev(".div_by_image_alt").remove();
            });
        }
    }

    $('#image_on_off_slider').click(function () {
        $("#image_on_off_slider").toggleClass('button_element_sel');
        if ($('#image_on_off_slider').hasClass('button_element_sel')) {
            Cookies.set('blind-images_state', "images-on", {path: '/'});
        } else {
            Cookies.set('blind-images_state', "images-off", {path: '/'});
        }
        setImagesState();
        return false;
    });

    function set_colors() {
        $('body').removeClass('color-white color-black').addClass(Cookies.get('blind-colors'));
    }

    $('#toolbar-page_color span').click(function () {
        var colors = $(this).attr('id').slice(7);
        Cookies.set('blind-colors', colors, {path: '/'});
        set_colors();
        set_item_selected($(this));
        return false;
    });

    function set_font_family() {
        $('body').removeClass('serif sans-serif').addClass(Cookies.get('blind-font'));
    }

    $('.choose_fontfamily').click(function () {
        font_family = $(this).attr('id').slice(7);
        Cookies.set('blind-font', font_family, {path: '/'});
        set_font_family();
        set_item_selected(this);
        return false;
    });

    function set_spacing() {
        $('body').removeClass('spacing-normal spacing-medium spacing-big').addClass(Cookies.get('blind-spacing'));
    }

    $('.choose_spacing').click(function () {
        spacing = $(this).attr('id').slice(7);
        Cookies.set('blind-spacing', spacing, {path: '/'});
        set_spacing();
        set_item_selected(this);
        return false;
    });

    $('#toolbar-addit_options').click(function () {
        $('#additional_settings_options').slideToggle("fast");
    });
    $('#close_additional_settings').click(function () {
        $('#additional_settings_options').slideToggle("fast");
    });
    $('#restore_settings').click(setDefaiultCoockies);

    /*$('.a-images a').click(function() {
     images = $(this).attr('rel');
     $('body').toggleClass('imageson').toggleClass('imagesoff');
     if ($('body').hasClass('imagesoff')) {
     $('img').each(function () {
     $(this).before( "<div class>"+$(this).attr('alt')+"</div>" );
     });
     } else {
     $('img').each(function () {
     $(this).prev().remove();
     });
     }
     return false;
     });

     $('input[title!=""],textarea[title!=""]').hint();
     */
    function setDefault_font_size() {
        Cookies.set('blind-font-size', 'fontsize-normal', {path: '/'})
    }

    function setDefault_colors() {
        Cookies.set('blind-colors', 'color-white', {path: '/'});
    }

    function setDefaultImagesState() {
        Cookies.set('blind-images_state', "images-on", {path: '/'});
        $("#image_on_off_slider").addClass('button_element_sel');
    }

    function setDefault_font_family() {
        Cookies.set('blind-font', 'sans-serif', {path: '/'});
    }

    function setDefault_spacing() {
        Cookies.set('blind-spacing', 'spacing-normal', {path: '/'});
    }

    function setTemplateSettingsAndSelItems() {
        set_font_size();
        set_item_selected("#choose_" + Cookies.get('blind-font-size'));
        set_colors();
        set_item_selected("#choose_" + Cookies.get('blind-colors'));
        setImagesState();
        set_font_family();
        set_item_selected("#choose_" + Cookies.get('blind-font'));
        set_spacing();
        set_item_selected("#choose_" + Cookies.get('blind-spacing'));
    }

    function setDefaiultCoockies() {
        setDefault_font_size();
        setDefault_colors();
        setDefaultImagesState();
        setDefault_font_family();
        setDefault_spacing();
        setTemplateSettingsAndSelItems();
    }

    if (!Cookies.get('blind-font-size')) {
        setDefault_font_size();
    }

    if (!Cookies.get('blind-colors')) {
        setDefault_colors();
    }

    if (!Cookies.get('blind-images_state')) {
        setDefaultImagesState();
    }

    if (!Cookies.get('blind-font')) {
        setDefault_font_family();
    }

    if (!Cookies.get('blind-spacing')) {
        setDefault_spacing();
    }
    setTemplateSettingsAndSelItems();
    $("body").css("padding-top", $("#template_settings").height());
    $("p.readmore > a").addClass("button_element")
});
