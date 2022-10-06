function sendLetter(data) {
	return fetch('ajax.php',{
		method: "POST",
    	body: data
	})
	.then(function(res){ return res.json(); })
}
window.addEventListener('DOMContentLoaded', () => {
    const button = document.querySelector('button');
	button.addEventListener('click', () => {
		const letInputs = document.querySelectorAll('input');
		const results = document.querySelector('.results');
		const remove = document.querySelector('.remove input' );
		const data = new FormData();
		letInputs.forEach(l => {
			data.append(l.id, l.value);
		});
		data.append('remove', remove);
		results.innerHTML = '';
		sendLetter(data)
		.then(r => {
			if(r.length > 0) {
				r.forEach(l => {
					results.innerHTML = `${results.innerHTML} <div>${l}</div>`;
				});
			}
			console.log(r);
		})
	});
});