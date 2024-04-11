<input type="text" id="pesquisar">
<button type="submit" id="btn">PESQUISAR</button>

	<script src="js/jquery-3.7.1.min.js"></script>
	<script type="text/javascript">
		$("#pesquisar").on("keypress", function(event) {
        if (event.which === 13) {
           		$('#btn').trigger("click")
            }        
    	});		

	</script>