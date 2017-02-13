/**
 * Created by anovikov on 16.01.2017.
 */
jQuery(function ($) {
    $(document).ready(function () {
        /*var bootstrap2to3NodeIter = document.createNodeIterator(
            document.body,
            NodeFilter.SHOW_ELEMENT,
            function (node) {
                return node.classList.contains('/span.2/i') ||
                node.classList.contains('/offset-(\d+)/') ||
                node.classList.contains('/offset-(\d+)/') ||
                node.classList.contains('/icon-(\w+)/') ||
                node.classList.contains('/hero-unit/') ||
                node.classList.contains('/(row)-fluid/') ||
                node.classList.contains('/nav-(collapse|toggle)/') ||
                node.classList.contains('/(input|btn)-small/') ||
                node.classList.contains('/(input|btn)-large/') ||
                node.classList.contains('/btn-navbar/') ||
                node.classList.contains('/btn-mini/') ||
                node.classList.contains('/unstyled/') ||
                node.classList.contains('/(visible|hidden)-phone/') ||
                node.classList.contains('/(visible|hidden)-tablet/') ||
                node.classList.contains('/(visible|hidden)-desktop/') ||
                node.classList.contains('/input-(prepend|append)/') ||
                node.classList.contains('/input-(prepend|append)/') ||
                node.classList.contains('/input-mini/') ||
                node.classList.contains('/input-small/') ||
                node.classList.contains('/input-medium/') ||
                node.classList.contains('/input-large/') ||
                node.classList.contains('/input-xlarge/') ||
                node.classList.contains('/navbar-fixed-top/') ||
                node.classList.contains('/class="label"/')
                    ? NodeFilter.FILTER_ACCEPT : NodeFilter.FILTER_REJECT;
            }
        );
        var currentNode;
        while (currentNode = bootstrap2to3NodeIter.nextNode()) {
            console.log(currentNode.nodeName);
        }*/
        var allElements;
        if (document.querySelectorAll)
            allElements = document.querySelectorAll("*");
        else
            allElements = document.getElementsByTagName("*");
        for (var i=0, elementClassStr, max=allElements.length; i < max; i++) {
            elementClassStr = allElements[i].className;
            if (elementClassStr !== "") {
                if (elementClassStr.indexOf("span12") !== -1) {
                    var trBol = 1;
                }
                elementClassStr = elementClassStr.replace(/\bspan([1-9]\b|1[012]\b)/i, 'col-md-$1');
                elementClassStr = elementClassStr.replace(/([^-]|^)\boffset-([1-9]\b|1[012]\b)/i, '$1col-md-offset-$2');
                //elementClassStr = elementClassStr.replace(/\bicon-(\w+)/i, 'glyphicon glyphicon-$1');
                elementClassStr = elementClassStr.replace(/hero-unit/i, 'jumbotron');
                elementClassStr = elementClassStr.replace(/(row)-fluid/i, '$1');
                elementClassStr = elementClassStr.replace(/nav-(collapse|toggle)/i, 'navbar-$1');
                elementClassStr = elementClassStr.replace(/(input|btn)-small/i, '$1-sm');
                elementClassStr = elementClassStr.replace(/(input|btn)-large/i, '$1-lg');
                elementClassStr = elementClassStr.replace(/btn-navbar/i, 'navbar-btn');
                elementClassStr = elementClassStr.replace(/btn-mini/i, 'btn-xs');
                elementClassStr = elementClassStr.replace(/unstyled/i, 'list-unstyled');
                elementClassStr = elementClassStr.replace(/(visible|hidden)-phone/i, '$1-sm');
                elementClassStr = elementClassStr.replace(/(visible|hidden)-tablet/i, '$1-md');
                elementClassStr = elementClassStr.replace(/(visible|hidden)-desktop/i, '$1-lg');
                elementClassStr = elementClassStr.replace(/input-(prepend|append)/i, 'input-group');
                elementClassStr = elementClassStr.replace(/input-(prepend|append)/i, 'input-group');
                elementClassStr = elementClassStr.replace(/input-mini/i, 'form-control');
                elementClassStr = elementClassStr.replace(/input-small/i, 'form-control');
                elementClassStr = elementClassStr.replace(/input-medium/i, 'form-control');
                elementClassStr = elementClassStr.replace(/input-large/i, 'form-control');
                elementClassStr = elementClassStr.replace(/input-xlarge/i, 'form-control');
                elementClassStr = elementClassStr.replace(/navbar-fixed-top/i, 'navbar-default navbar-static-top');
                // elementClassStr = elementClassStr.replace(/class="label"/i, 'class="label label-default"');
                allElements[i].className = elementClassStr;
            }
        }
    });
    //$(".pagination").removeClass("pagination").children("ul").addClass("pagination");
});
