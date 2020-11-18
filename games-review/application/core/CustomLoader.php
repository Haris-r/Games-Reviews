<?php
/**
 * Created by PhpStorm.
 * User: 55134289
 * Date: 26/04/2019
 * Time: 13:37
 */
class CustomLoader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if ($return):
            $pageContent = $this->view('templates/header', $vars, $return);
            $pageContent .= $this->view($template_name, $vars, $return);
            $pageContent .= $this->view('templates/footer', $vars, $return);

            return $pageContent;
        else:
            $this->view('templates/header', $vars);
            $this->view($template_name, $vars);
            $this->view('templates/footer', $vars);
        endif;
    }
}
?>