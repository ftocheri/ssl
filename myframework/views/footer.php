<!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

  <script>

  	function ASubmit() {
  		var passwordF = $("#password").val();
  		var emailF = $("#email").val();
  		var typeF = "ajax";

  		$.ajax({
  			method: "POST",
  			url: "/login/recv",
  			data: {email: emailF, password: passwordF, type: typeF},
  			success: function(data) {
  				if(data == "good") {
  					window.document.location.href="/login?msg=User Good"
  				}
  				else {
  					window.document.location.href="/login?msg=User Bad"
  				}
  			}
  		})
  	}

  </script>

</body>

</html>