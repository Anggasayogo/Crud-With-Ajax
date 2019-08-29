<!DOCTYPE html>
<html>
<head>
	<title>Crud with ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

	<form method="post" action="simpan.php" >
		<input type="text" name="nama" placeholder="input Nama">
		<input type="email" name="email" placeholder="Input email">
		<input type="text" name="hoby" placeholder="Input hoby">
		<input type="submit" name="submit" value="kirim">
	</form>

	<hr/>

	<div id="konten">
		
	</div>



	<script>
		$(document).ready(function(){
			loadData()

			$('form').on('submit', function(e){
				e.preventDefault();
				$.ajax({
					type:$(this).attr('method'),
					url:$(this).attr('action'),
        		data:$(this).serialize(),
        		success:function(){
        			loadData();
        			resetForm();
        		}
        	})
			})
		})

		function loadData(){
			$.get('data.php', function(data){
				$('#konten').html(data)
				$('.hapusData').click(function(e){
					e.preventDefault();
					$.ajax({
						type:'get',
						url:$(this).attr('href'),
						success:function(){
							loadData();
						}
					})
				});

				$('.updateData').click(function(e){
					e.preventDefault();
					$('[name=nama]').val($(this).attr('nama'))
					$('[name=email]').val($(this).attr('email'))
					$('[name=hoby]').val($(this).attr('hoby'))
					$('form').attr('action',$(this).attr('href'))
				})
			})
		}

		function resetForm(){
			$('[type=text]').val('');
			$('[type=email]').val('');
			$('[name=nama]').focus();
			$('form').attr('action','simpna.php');
		}
	</script>
</body>
</html>