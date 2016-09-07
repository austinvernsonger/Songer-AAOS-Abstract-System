<?php/**
 * @link       http://austinvernsonger.github.com
 * @since      1.0.0
 * @package    S_Aaos_As
 * @subpackage S_Aaos_As/admin
 */
/**
 * @package    S_Aaos_As
 * @subpackage S_Aaos_As/admin
 * @author     Austin Vern Songer <austinvernsonger@outlook.com>
 */
class S_Aaos_As_Admin {
	/**
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;
	/**
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;
	/**
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		/**
		 * This function is provided for demonstration purposes only.
		 * An instance of this class should be passed to the run() function
		 * defined in S_Aaos_As_Loader as all of the hooks are defined
		 * in that particular class.
		 * The S_Aaos_As_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/s-aaos-as-admin.css', array(), $this->version, 'all' );
	}
	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in S_Aaos_As_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The S_Aaos_As_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/s-aaos-as-admin.js', array( 'jquery' ), $this->version, false );

	}

}
