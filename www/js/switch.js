var currentRight;
var currentRight = true;
function Switch(){
	iframeLeft = document.getElementById('iframeLeft');
	iframeLeft = document.getElementById('iframeLeft')
	iframeRight = document.getElementById('iframeRight');
	if(currentRight){
		iframeRight.style['width'] = "0%";
		iframeLeft.style['width'] = "100%";
	} else {
		iframeRight.style['width'] = "100%";
		iframeLeft.style['width'] = "0%";
	}
	currentRight = !currentRight;
}

document.getElementById('switchBtn').onclick = Switch;