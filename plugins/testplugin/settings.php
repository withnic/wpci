<?php
// SpotSettingsPage
class SpotSettingsPage
{
	public function __construct()
	{
		add_action('admin_menu', [$this, 'add_plugin_page']);
		add_action('admin_init', [$this, 'page_init']);
	}

	/**
	* Add options page
	*/
	public function add_plugin_page()
	{
		add_options_page(
			'Spot Settings',
			'Spot',
			'manage_options',
			'spot-setting-admin',
			[$this, 'create_admin_page']
		);
	}

	/**
	* Spot Setting page
	*/
	public function create_admin_page()
	{
		?>
		<div class="wrap">
		  <div class="form-table-wrapper">
		    <form method="post" action="/">
			  <input type="text">
			  <button type="submit" >検索する</button>
			</form>
		  </div>
		  <div>
		  <div>結果</div>
		  </div>
		</div>
		<?php
	}

	public function page_init()
	{

	}

}

//if (is_admin())
new SpotSettingsPage();
