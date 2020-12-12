
<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<p id="demo7"></p>
	<H2 id="rat"></H2>

	<button id="grand">click me</button><br><br>

	<button id="row" style="position:relative;top:450px" onclick="jo()">click me again</button>

	<h2>dflkdfd</h2>
<script type="text/javascript">
	
var first={

	"name1":"sk nehal",
	"age1":67,
	"address1":"upperbaruan",
"pin":78697,

	"post":"kabirpur",
	"dist":"jajpur"
};
first.name="rahul";


var objName={
	"name":"pratap swain",
	"age":23,
	"address":"korie"
};

let f={"class":"7th",...first,...objName,"class1":"salman"};

let  b=JSON.stringify(f);
console.log(`${b}`);

//spread operator program
  var array=[10,20,30,40,50];
let y=array;
array[1]=89;
y[1]=75;

  console.log(`${array[1]}`);
console.log(y[1]);


		function string(){

		var s="rajesh";

		console.log(s);

				function root(){
				var p="nehal";


					console.log(p);

					console.log(s);

}

root();

}
string();
			//



function man(){

	var g="Graphic designer";
	console.log(g);


function women(){
var j="web developer";

console.log(j);

	console.log(g);


}

women();

}
man();


var myobj={

	"name":'rajesh',

	'branch':'mCA',
	'mob':907807978,

	'car':{

'model':'bmw',
'color':'red',
'wieght':'90kg'

	}
}

let k=JSON.stringify(myobj);
 var n=myobj.car['model'];
alert(n);

// $(function(){
// 	$.ajax({
// url:"https://jsonapi.orG/",
// 	method:'GET',
// 	success:function (data){
// console.log(data);

// 	},
// 	error:function(){

// 	}

// })
// });




function jo(){

 var str=new XMLHttpRequest();

 str.open('GET','samaya.json',true);

str.onload=function(){


if(str.status===200){
    
 var h=str.responseText;
  document.write(h.toUpperCase().split(" "));

}
else
{

console.log("some error");

}


	};
str.send();
}





document.getElementById('grand').addEventListener('click',function(){

var str=new XMLHttpRequest();
str.onreadystatechange=function(){
	

 let goo=document.getElementById('rat');

 goo.innerHTML=this.responseText;

};

str.open("POST","amo.php",true);


 

str.send("fname=nehal & lname=htee & class=nine");

});



</script>
</body>
</html>