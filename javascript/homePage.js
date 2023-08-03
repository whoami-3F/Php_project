    // toogle menu
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let HomeMain = document.querySelector('.HomeMain');
    
    toggle.onclick = function() {
        navigation.classList.toggle('active');
        HomeMain.classList.toggle('active');
    };
    
        // add hover class in selected list item
    let list = document.querySelectorAll('.navigation li');
    function activeLink(){
        list.forEach((item)=>
        item.classList.remove('hovered'));
        this.classList.add('hovered');
    }
    list.forEach((item)=>
    item.addEventListener('mouseover',activeLink));