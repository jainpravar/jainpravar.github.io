var start=0;
var images[];
var time =3000;
var slide = document.getElementById('slide').value;

images[0]='Images/banner3.jpg';
images[1]='Images/banner4.jpg';
images[2]='Images/banner5.jpg';
images[3]='Images/banner6.jpg';

function changeImg(){
	document.slide.src= images[start];

	if(start< images.length()-1){
		start++;
	}
	else{
		start=0;
	}
	startTimeout("changeImg()",time);
}
window.onload = changeImg;