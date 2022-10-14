
var searchDisplay = false;

function switchBtn() {
var add = document.getElementById('add');
var sr = document.getElementById('search');
    if(searchDisplay) {
        sr.style.display = 'none'
        add.style.display = 'flex'
        searchDisplay = false
    }
    else {
        sr.style.display = 'flex'
        add.style.display = 'none'
        searchDisplay = true 
    }


}