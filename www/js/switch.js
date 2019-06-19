
function iframe_switch_to(index){
	var iframes = document.getElementsByTagName('iframe');
	for(var i = 0; i < iframes.length; i++){
		iframes[i].style['display'] = 'none';
	}
	var target_iframe = document.getElementById('iframe_' + index);
	target_iframe.style['display'] = 'initial';

	current_iframe_index = index;
}

function iframe_show_all(){
	var iframes = document.getElementsByTagName('iframe');
	for(var i = 0; i < iframes.length; i++){
		iframes[i].style['display'] = 'initial';
	}
}

function iframe_loop_switch(){
	current_iframe_index += 1;
	current_iframe_index %= iframe_count;
	iframe_switch_to(current_iframe_index);
}

function resize_handler(){
	var now_width = window.innerWidth;
	if(last_width >= 768 && now_width < 768){
		iframe_switch_to(current_iframe_index);
	} 
	if(last_width < 768 && now_width >= 768){
		iframe_show_all();
	}
	last_width = now_width;
}

if(window.innerWidth < 768){
	iframe_switch_to(current_iframe_index);
}

window.addEventListener("resize", resize_handler);
document.getElementById('switchBtn').onclick = iframe_loop_switch;
