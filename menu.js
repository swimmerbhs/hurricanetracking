
    var toggleMenu = {
    init : function(sContainerClass, sHiddenClass) {
    if (!document.getElementById || !document.createTextNode) {return;} // Check for DOM support
    var arrMenus = this.getElementsByClassName(document, 'ul', sContainerClass); // Find all menus
    var arrSubMenus, oSubMenu, oLink;
    for (var i = 0; i < arrMenus.length; i++) { // In each menu...
    arrSubMenus = arrMenus[i].getElementsByTagName('ul'); // ...find all sub menus
    for (var j = 0; j < arrSubMenus.length; j++) { // For each sub menu...
    oSubMenu = arrSubMenus[j];
    oLink = oSubMenu.parentNode.getElementsByTagName('a')[0]; // ...find the link that toggles it...
    oLink.onclick = function(){toggleMenu.toggle(this.parentNode.getElementsByTagName('ul')[0], sHiddenClass); return false;} // ... add an event handler to the link...
    this.toggle(oSubMenu, sHiddenClass); // ... and hide the sub menu
    }
    }
    },
    toggle : function(el, sHiddenClass) {
    var oRegExp = new RegExp("(^|\\s)" + sHiddenClass + "(\\s|$)");
    el.className = (oRegExp.test(el.className)) ? el.className.replace(oRegExp, '') : el.className + ' ' + sHiddenClass; // Add or remove the class name that hides the element
    },
    /* addEvent and getElementsByClassName functions omitted for brevity */
    };
    // Initialise the menu
    toggleMenu.addEvent(window, 'load', function(){toggleMenu.init('menu','hidden');});
