let notes = document.querySelectorAll('.note')
let help = document.querySelector('.help');

for(let note of notes) {
				note.onmouseover = function() {
								help.style.display = 'inline';
				}
				note.onmouseout = function() {
								help.style.display = 'none';
				}
}
