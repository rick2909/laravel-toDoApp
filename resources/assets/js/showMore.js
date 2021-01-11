var toggler = true;
function removeButton(){
    var text = document.getElementsByClassName('text');
    for (var i = 0; i < text.length; i++) {
        if(text[i].clientHeight < 198){
            var button = document.getElementsByClassName(text[i].id)[0];
            button.style.display = 'none';
        }
    }
}
function readMore(id){
    var text = document.getElementById(id);
    var button = document.getElementsByClassName(id)[0];
    if(toggler){
        text.style.maxHeight = 'none';
        button.innerHTML = '^';
        toggler = false;
    }else{
        text.style.maxHeight = '200px';
        button.innerHTML = '˅';
        toggler = true;
    }
}