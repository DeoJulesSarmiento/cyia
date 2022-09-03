const navSlide = () => {
	const option = document.querySelector('.option');
	const nav = document.querySelector('.nav-links');
	const navLinks = document.querySelectorAll('.nav-links li');
	

	option.addEventListener('click',()=>{
		//toggle Nav
		nav.classList.toggle('nav-active');

			//Animate Links
	navLinks.forEach((link, index)=>{
	if(link.style.animation){
		link.style.animation = ''
	}else{
			link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0}s`;
		console.log(index/7);
			}
		});

		//option animation
		option.classList.toggle('toggle');
	});

	
}

navSlide();