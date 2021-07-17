<script>
window.addEventListener('DOMContentLoaded', function () {
    let fform = document.querySelector('.form__block_div form');
	fform.onsubmit = async (event) => {
        event.preventDefault();
        let readData = new FormData(fform);

        let response = await fetch('send_message.php', {
            method: 'POST',
            body: readData
            //body: JSON.stringify(readData)
        });

        let result = await response.json();
        //console.log('result');
        console.log(result);
		fform.reset();
	};

});// 
</script>

		</main>
		<footer class="footer-container">
		</footer>
	</body>
</html>