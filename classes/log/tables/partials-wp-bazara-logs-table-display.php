<?php

/**
 * The admin area of the plugin to load the User List Table
 */
?>

<div class="wrap">
    <h2><?php _e( 'جدول گزارش عملکرد', $this->plugin_text_domain); ?></h2>
        <div id="nds-wp-list-table-demo">
            <div id="nds-post-body">
				<form id="nds-user-list-form" method="get">
					<input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />
					<?php
						$this->logs_table->search_box( __( 'Find', $this->plugin_text_domain ), 'nds-user-find');
						$this->logs_table->display();
					?>
				</form>
            </div>
        </div>
</div>
