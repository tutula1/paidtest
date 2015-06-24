<?

class Model_System_User extends CI_Model
{

    public function __construct()
    {

        parent::__construct();

        $this->load->database();

    }


    ////
    ///
    //  Select

    function records($more = 0)
    {

        $S = &$_SESSION['system_user_filter'];

        $Q = 'SELECT *,
                   ( SELECT `name` FROM `system_authority` WHERE `key` = `key_system_authority` ) AS `authority`
            FROM   `system_user`
            WHERE  `delete` IS NULL';

        if (@$S['key_from'])
            $Q .= ' AND `key` >= "' . $S['key_from'] . '"';
        if (@$S['key_to'])
            $Q .= ' AND `key` <= "' . $S['key_to'] . '"';

        if (@$S['name'])
            $Q .= ' AND `name`          LIKE "%' . $S['name'] . '%"';
        if (@$S['mail'])
            $Q .= ' AND `mail`          LIKE "%' . $S['mail'] . '%"';
        if (@$S['authority'])
            $Q .= ' AND `authority`     LIKE "%' . $S['authority'] . '%"';
        if (@$S['configuration'])
            $Q .= ' AND `configuration` LIKE "%' . $S['configuration'] . '%"';

        $Q .= ' ORDER BY `' . $S['field'] . '`' . $S['order'];
        $Q .= ' LIMIT ' . $S['limit'];
        $Q .= ' OFFSET ' . $S['limit'] * intval($S['page'] - 1 + $more);

        $RS = $this->db->query($Q);

        return $RS->result_array();

    }

    public function record($key)
    {

        return $this->db->query('SELECT * FROM `system_user` WHERE `key` = "' . $key .
            '"')->row_array();

    }

    function filter()
    {

        $S = &$_SESSION['system_user_filter'];

        $S['key_from'] = $this->db->escape_str(@$_POST['key_from']);
        $S['key_to'] = $this->db->escape_str(@$_POST['key_to']);
        $S['mail'] = $this->db->escape_str(@$_POST['mail']);
        $S['name'] = $this->db->escape_str(@$_POST['name']);
        $S['authority'] = $this->db->escape_str(@$_POST['authority']);
        $S['configuration'] = $this->db->escape_str(@$_POST['configuration']);
        $S['field'] = $this->db->escape_str(@$_POST['field']);
        $S['order'] = $this->db->escape_str(@$_POST['order']);
        $S['limit'] = $this->db->escape_str(@$_POST['limit']);
        $S['page'] = $this->db->escape_str(@$_POST['page']);

        if (!is_numeric(@$S['key_from']))
            $S['key_from'] = null;
        if (!is_numeric(@$S['key_to']))
            $S['key_to'] = null;

        if (!@$S['field'])
            $S['field'] = 'key';
        if (!@$S['order'])
            $S['order'] = 'DESC';

        if (!(is_numeric(@$S['limit']) && @$S['limit']))
            $S['limit'] = 10;
        if (!(is_numeric(@$S['page']) && @$S['page']))
            $S['page'] = 1;

        return $S;

    }


    ////
    ///
    //  Insert, Update & Delete

    function validation()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('mail', 'mail', 'required|valid_email');
        $this->form_validation->set_rules('name', 'name', 'required');

        if (!$this->form_validation->run())
            return $this->form_validation->error_array();

    }

    function insert()
    {

        if ($validation = $this->validation())
            return $validation;
        if ($this->check() == false) {
            $this->db->query('INSERT `system_user` ( `key_system_authority`,
                                                    `mail`                ,
                       ' . (@$_POST['password'] ? '`password`            ,' : '') .
                '
                                                    `name`                ,
                                                    `configuration`       ,
                                                    `insert`              )
                             VALUES ( "' . $this->db->escape_str(@$_POST['key_system_authority']) .
                '",
                                      "' . $this->db->escape_str(@$_POST['mail']) .
                '",
         ' . (@$_POST['password'] ? '"' . $this->db->escape_str(@$_POST['password']) .
                '",' : '') . '
                                      "' . $this->db->escape_str(@$_POST['name']) .
                '",
                                      "' . $this->db->escape_str(@$_POST['configuration']) .
                '",
                                      NOW( ) )');
            return true;
        } else {
            return false;
        }

    }

    function update()
    {

        if ($validation = $this->validation())
            return $validation;

        $this->db->query('UPDATE `system_user`
                             SET    `key_system_authority` = "' . $this->db->
            escape_str(@$_POST['key_system_authority']) . '",
       ' . (@$_POST['password'] ? '`password`             = "' . $this->db->
            escape_str(@$_POST['password']) . '",' : '') . '
                                    `mail`                 = "' . $this->db->
            escape_str(@$_POST['mail']) . '",
                                    `name`                 = "' . $this->db->
            escape_str(@$_POST['name']) . '",
                                    `configuration`        = "' . $this->db->
            escape_str(@$_POST['configuration']) . '",
                                    `update`               = NOW( )
                             WHERE  `key`                  = "' . $this->db->
            escape_str(@$_POST['key']) . '"');

    }

    function delete($key)
    {

        $this->db->query('UPDATE `system_user`
                             SET    `delete` = NOW( )
                             WHERE  `key` = "' . $key . '"');

    }


    ////
    ///
    //  Authority

    function log_in()
    {

        $RS = $this->db->query('SELECT *,
                                          ( SELECT `authority` FROM `system_authority` WHERE `key` = `key_system_authority` ) AS `authority`
                                   FROM   `system_user`
                                   WHERE  `mail`     = "' . $this->db->
            escape_str($_POST['mail']) . '"
                                   AND    `password` = "' . $this->db->
            escape_str($_POST['password']) . '"
                                   AND    `delete` IS NULL');

        if ($RS->num_rows()) {

            $R = $RS->row_array();

            $_SESSION['user'] = $R['key'];
            $_SESSION['name'] = $R['name'];
            $_SESSION['authority'] = "\n" . $R['authority'] . "\n";
            $_SESSION['configuration'] = $R['configuration'];

            if (@$_POST['remember'])
                setcookie('mail', $_POST['mail'], time() + (60 * 60 * 24 * 365), "/");
            else
                setcookie('mail', '', time() + (60 * 60 * 24 * 0), "/");

            return true;

        } else
            return false;

    }

    function log_out()
    {

        session_destroy();

    }

    function request_password()
    {

        if (isset($_POST['mail'])) {
            $to = $_POST['mail'];
            $subject = "Request password";
            $R = $this->check();
            $message = "
<html>
<head>
<title>Request password</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<b>Password:</b> ".$R['password']."
</body>
</html>
";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <binh.duong@vingle.net>' . "\r\n";

            mail($to, $subject, $message, $headers);
            return true;
        } else {
            return false;
        }
    }

    function check()
    {

        if (isset($_POST['mail'])) {
            $RS = $this->db->query('SELECT *,
                                          ( SELECT `authority` FROM `system_authority` WHERE `key` = `key_system_authority` ) AS `authority`
                                   FROM   `system_user`
                                   WHERE  `mail`     = "' . $this->db->
                escape_str($_POST['mail']) . '"
                                   AND    `delete` IS NULL');

            if ($RS->num_rows()) {
                $R = $RS->row_array();
                return $R;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }

}

?>
