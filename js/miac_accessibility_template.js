function detectIE() {
  var ua = window.navigator.userAgent;

  // Test values; Uncomment to check result …

  // IE 10
  // ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)';
  
  // IE 11
  // ua = 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko';
  
  // Edge 12 (Spartan)
  // ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36 Edge/12.0';
  
  // Edge 13
  // ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';

  var msie = ua.indexOf('MSIE ');
  if (msie > 0) {
    // IE 10 or older => return version number
    return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
  }

  var trident = ua.indexOf('Trident/');
  if (trident > 0) {
    // IE 11 => return version number
    var rv = ua.indexOf('rv:');
    return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
  }

  var edge = ua.indexOf('Edge/');
  if (edge > 0) {
    // Edge (IE 12+) => return version number
    return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
  }

  // other browser
  return false;
}
jQuery(function($) {
    function set_item_selected(item_or_item_id) {
        $(item_or_item_id).parent().find("*").removeClass("button_element_sel");
        $(item_or_item_id).addClass("button_element_sel");
    }

    function set_font_size() {
        $('body').removeClass('fontsize-normal fontsize-medium fontsize-big').addClass(Cookies.get('blind-font-size'));
    }

    $('#toolbar-fontsize').find('span').click(function () {
        var fontsize = $(this).attr('id').slice(7);
        Cookies.set('blind-font-size', fontsize, {expires: 365});
        set_font_size();
        set_item_selected($(this));
        return false;
    });

    function set_colors() {
        $('body').removeClass('color-white color-black').addClass(Cookies.get('blind-colors'));
    }

    $('#toolbar-page_color').find('span').click(function () {
        var colors = $(this).attr('id').slice(7);
        Cookies.set('blind-colors', colors, {expires: 365});
        set_colors();
        set_item_selected($(this));
        return false;
    });

    function set_font_family() {
        $('body').removeClass('serif sans-serif').addClass(Cookies.get('blind-font'));
    }

    $('.choose_fontfamily').click(function () {
        var font_family = $(this).attr('id').slice(7);
        Cookies.set('blind-font', font_family, {expires: 365});
        set_font_family();
        set_item_selected(this);
        return false;
    });

    function set_spacing() {
        $('body').removeClass('spacing-normal spacing-medium spacing-big').addClass(Cookies.get('blind-spacing'));
    }

    $('.choose_spacing').click(function () {
        var spacing = $(this).attr('id').slice(7);
        Cookies.set('blind-spacing', spacing, {expires: 365});
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
    function setDefault_font_size() {
        Cookies.set('blind-font-size', 'fontsize-normal', {expires: 365})
    }

    function setDefault_colors() {
        Cookies.set('blind-colors', 'color-white', {expires: 365});
    }

    function setDefault_font_family() {
        Cookies.set('blind-font', 'sans-serif', {expires: 365});
    }

    function setDefault_spacing() {
        Cookies.set('blind-spacing', 'spacing-normal', {expires: 365});
    }

    function setTemplateSettingsAndSelItems() {
        set_font_size();
        set_item_selected("#choose_" + Cookies.get('blind-font-size'));
        set_colors();
        set_item_selected("#choose_" + Cookies.get('blind-colors'));
        set_font_family();
        set_item_selected("#choose_" + Cookies.get('blind-font'));
        set_spacing();
        set_item_selected("#choose_" + Cookies.get('blind-spacing'));
    }

    function setDefaiultCoockies() {
        setDefault_font_size();
        setDefault_colors();
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

    if (!Cookies.get('blind-font')) {
        setDefault_font_family();
    }

    if (!Cookies.get('blind-spacing')) {
        setDefault_spacing();
    }
    setTemplateSettingsAndSelItems();
    var browserVersion = detectIE();
    if (browserVersion !== false) {
        if (browserVersion > 9) {
            $("body").css("padding-top", $("#template_settings").height());
        }
    }
    /*var pagin = $("div.pagination");
    if (pagin.length) {
        if (pagin.children("ul.pagination").length) {
            pagin.removeClass("pagination");
        }
    }*/
    //$("p.readmore > a").addClass("button_element"
    $(".blog").find(".item-image").each(function() {
        if (!($( this ).find("img").attr("width"))) {
            $(this).removeClass("pull-left");
        }
    });
    $("*[style*='color']").each(function() {$(this).css('color','');});
});
