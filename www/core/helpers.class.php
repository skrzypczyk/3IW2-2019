<?php
class helpers
{
    public static function getUrl($controller, $action)
    {
        $listOfRoutes = yaml_parse_file("routes.yml");

        foreach ($listOfRoutes as $url => $values) {
            if ($values["controller"]==$controller && $values["action"]==$action) {
                return $url;
            }
        }
        return "/";
    }
}
