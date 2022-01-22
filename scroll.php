<DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		body{
			width: 100%;
		}

		#topBtn{
		  display: none;
		  position: fixed;
		  bottom: 20px;
		  right: 30px;
		  z-index: 99;
		  font-size: 18px;
		  border: none;
		  outline: none;
		  background-color: orange;
		  color: white;
		  cursor: pointer;
		  padding: 15px;
		  border-radius: 4px;
		}
		#topBtn:hover{
		  background-color: orange;
		  opacity: .7;
		}

	</style>
</head>
<body>
	<button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
	<script>
			var mybutton = document.getElementById("topBtn");

			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			    mybutton.style.display = "block";
			  } else {
			    mybutton.style.display = "none";
			  }
			}
			
			function topFunction() {
			  document.body.scrollTop = 0;
			  document.documentElement.scrollTop = 0;
			}
		</script>
</body>
</html>