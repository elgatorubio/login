
    function get_protocol() {
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            return "https://";
        } else {
            return "http://";
        }
    }

    $protocol = get_protocol();
    $host = $_SERVER['HTTP_HOST'];
    $project_folder = '/tskmgr/'; 
    define('$base_url', $protocol . $host . $project_folder);

