function reload_page(){
    document.body.style['display'] = 'none';
    document.location.reload();
}

var btn_reload = document.createElement('button');
btn_reload.innerText = 'Reload';
btn_reload.addEventListener('click', reload_page);
document.body.appendChild(btn_reload);
