var Laufvariable = 0;
function Shop_Item_TextLoad(){
	var x = document.getElementsByClassName("Shop_Item_P")
	if(x[Laufvariable].innerHTML.length > 300){
		document.getElementsByClassName("Shop_Item_Span")[Laufvariable].innerHTML = x[Laufvariable].innerHTML.slice(301, x[Laufvariable].length);
		x[Laufvariable].innerHTML = x[Laufvariable].innerHTML.slice(0, 300) + " . . .";
	}
	test = Laufvariable;
	document.getElementsByClassName("Shop_Item_Span_Weiterlesen")[Laufvariable].onclick = function() {MehrButton(test)};
	document.getElementsByClassName("Shop_Item_Span_Weniger")[Laufvariable].style.display = "none";
	Laufvariable++;
	if(Laufvariable !== document.getElementsByClassName("Shop_Item_P").length){Shop_Item_TextLoad();}
}

function MehrButton(i){
	document.getElementsByClassName("Shop_Item_P")[i].innerHTML = document.getElementsByClassName("Shop_Item_P")[i].innerHTML.slice(0, 300) + document.getElementsByClassName("Shop_Item_Span")[i].innerHTML;
	document.getElementsByClassName("Shop_Item_Span_Weiterlesen")[i].style.display = "none";
	document.getElementsByClassName("Shop_Item_Span_Weniger")[i].style.display = "block";
	var test2 = i;
	document.getElementsByClassName("Item")[i].style.height = document.getElementsByClassName("Shop_Item_P")[i].clientHeight + document.getElementsByClassName("Shop_Item_H2")[i].clientHeight + 80 + "px";
	document.getElementsByClassName("Shop_Item_Span_Weniger")[i].onclick = function() {WenigerButton(test2)};
}

function WenigerButton(i){
	var x = document.getElementsByClassName("Shop_Item_P");
	x[i].innerHTML = x[i].innerHTML.slice(0, 300) + " . . .";
	document.getElementsByClassName("Shop_Item_Span_Weniger")[i].style.display = "none";
	document.getElementsByClassName("Shop_Item_Span_Weiterlesen")[i].style.display = "block";
	document.getElementsByClassName("Item")[i].style.height = "20vw";
	test = i;
	document.getElementsByClassName("Shop_Item_Span_Weiterlesen")[i].onclick = function() {MehrButton(test)};
}
