//Variables

var dashboard = {};

dashboard.el 					= {};
dashboard.el.container 			= document.querySelector('.dashboard-container');
dashboard.el.inventory_link 	= dashboard.el.container.querySelector('.inventory-link');
dashboard.el.users_link 		= dashboard.el.container.querySelector('.users-link');
dashboard.el.export_link 		= dashboard.el.container.querySelector('.export-link');
dashboard.el.settings_link 		= dashboard.el.container.querySelector('.settings-link');
dashboard.el.modify_buttons		= dashboard.el.container.querySelectorAll('.button-modify');


dashboard.data = {};
dashboard.data.table_nav = ['inventory', 'users', 'export', 'settings'];

//Inventory display on nav click
dashboard.el.inventory_link.addEventListener('click', function (e)
{
	e.preventDefault();

	remove_class_nav();
	dashboard.el.container.classList.add('inventory');
});

//Users display on nav click
dashboard.el.users_link.addEventListener('click', function (e)
{
	e.preventDefault();

	remove_class_nav();
	dashboard.el.container.classList.add('users');
});

//Export display on nav click
dashboard.el.export_link.addEventListener('click', function (e)
{
	e.preventDefault();

	remove_class_nav();
	dashboard.el.container.classList.add('export');
});

//Settings display on nav click
dashboard.el.settings_link.addEventListener('click', function (e)
{
	e.preventDefault();

	remove_class_nav();
	dashboard.el.container.classList.add('settings');
});

//Modify panel display on click on button
for (var i = 0; i < dashboard.el.modify_buttons.length; i++)
{
	dashboard.el.modify_buttons[i].addEventListener('click', function (e)
	{
		e.preventDefault();

		dashboard.el.container.classList.add('modify');
	});
}

//Remove classes
function remove_class_nav ()
{
	for (var i = 0; i < dashboard.data.table_nav.length; i++)
	{
		dashboard.el.container.classList.remove(dashboard.data.table_nav[i]);
	}
}