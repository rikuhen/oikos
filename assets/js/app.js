( function()  {
    
    clickFunction = function(e) {
        if(e.srcElement.href != '') {
            window.location.href = e.srcElement.href;
        }
    }

    var el =  document.querySelector('a.dropdown-toggle');

    el.addEventListener('click',clickFunction);




})()

    

