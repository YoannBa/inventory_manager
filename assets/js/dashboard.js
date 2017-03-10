//Variables

var dashboard = {};

dashboard.el 						= {};
dashboard.el.container 				= document.querySelector('.dashboard-container');
dashboard.el.inventory_link 		= dashboard.el.container.querySelector('.inventory-link');
dashboard.el.users_link 			= dashboard.el.container.querySelector('.users-link');
dashboard.el.export_link 			= dashboard.el.container.querySelector('.export-link');
dashboard.el.settings_link 			= dashboard.el.container.querySelector('.settings-link');
dashboard.el.modify_buttons			= dashboard.el.container.querySelectorAll('.button-modify');
dashboard.el.modify_image			= dashboard.el.container.querySelector('.photo-container');
dashboard.el.modify_image_close		= dashboard.el.container.querySelector('.image-form .pop-in-close');
dashboard.el.add_object				= dashboard.el.container.querySelector('.add-object');
dashboard.el.add_close				= dashboard.el.container.querySelector('.adding-form .close');
dashboard.el.modif_item_form		= dashboard.el.container.querySelector('.modif-form');
dashboard.el.modif_item_value   	= dashboard.el.modif_item_form.querySelector('button[type="submit"]');
dashboard.el.modif_item_name    	= dashboard.el.modif_item_form.querySelector('#name');
dashboard.el.modif_item_description = dashboard.el.modif_item_form.querySelector('#description');
dashboard.el.modif_item_price 		= dashboard.el.modif_item_form.querySelector('#price');
dashboard.el.modif_item_tag 		= dashboard.el.modif_item_form.querySelector('#tag');
dashboard.el.modif_item_stock 		= dashboard.el.modif_item_form.querySelector('#number');
dashboard.el.modif_close 			= dashboard.el.modif_item_form.querySelector('.close');

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

		var item_index = this.dataset.index;

		var stock 			= this.parentElement.querySelector('.object-number .number-stock').innerHTML;
			description		= this.parentElement.querySelector('.object-description').innerHTML,
			price			= this.parentElement.querySelector('.price').innerHTML,
			tags			= this.parentElement.querySelector('.object-tags').innerHTML,
			name			= this.parentElement.querySelector('.name-title').innerHTML;

		dashboard.el.modif_item_name.value 				= name;
		dashboard.el.modif_item_description.innerHTML 	= description;
		dashboard.el.modif_item_price.value 			= price;
		dashboard.el.modif_item_tag.value		        = tags;
		dashboard.el.modif_item_stock.value         	= stock;

		dashboard.el.modif_item_value.value = "modif-" + item_index;
		dashboard.el.container.classList.add('modify');
	});
}

dashboard.el.modif_close.addEventListener('click', function (e)
{
	e.preventDefault();
	dashboard.el.container.classList.remove('modify');
});

dashboard.el.add_close.addEventListener('click', function (e)
{
	e.preventDefault();
	dashboard.el.container.classList.remove('adding');
});

dashboard.el.modify_image.addEventListener('click', function () 
{
	remove_class_nav();
	dashboard.el.container.classList.add('image');
});

dashboard.el.modify_image_close.addEventListener('click', function () 
{
	dashboard.el.container.classList.remove('image');
});

dashboard.el.add_object.addEventListener('click', function ()
{
	dashboard.el.container.classList.add('adding');
});

//Remove classes
function remove_class_nav ()
{
	for (var i = 0; i < dashboard.data.table_nav.length; i++)
	{
		dashboard.el.container.classList.remove(dashboard.data.table_nav[i]);
	}
}