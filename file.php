/*this function will go on function.php file */
add_action('init', 'copyRole');

function copyRole()
{
    global $wp_roles;
    if ( ! isset( $wp_roles ) )
        $wp_roles = new WP_Roles();

    $adm = $wp_roles->get_role('administrator');
    //Adding a 'new_role' with all admin caps
    $wp_roles->add_role('new_role', 'My Custom Role', $adm->capabilities);
}
