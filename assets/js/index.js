//Variables

var index = {};

index.el 				= {};
index.el.container 	   	= document.querySelector('.index-container');
index.el.login_button  	= index.el.container.querySelector('.button.connection');
index.el.login_close   	= index.el.container.querySelector('.connection .pop-in-close');
index.el.signup_button 	= index.el.container.querySelector('.button.sign-up');
index.el.signup_close  	= index.el.container.querySelector('.sign-up .pop-in-close');

//Log-in pop-in appear on button click
index.el.login_button.addEventListener('click', function (e)
{
	e.preventDefault();

	index.el.container.classList.add('login');
});

//Log-In pop-in close on button click
index.el.login_close.addEventListener('click', function (e)
{
	e.preventDefault();

	index.el.container.classList.remove('login');
});

//Sign-up pop-in appear on button click
index.el.signup_button.addEventListener('click', function (e)
{
	e.preventDefault();

	index.el.container.classList.add('signup');
});

//Log-In pop-in close on button click
index.el.signup_close.addEventListener('click', function (e)
{
	e.preventDefault();

	index.el.container.classList.remove('signup');
});




