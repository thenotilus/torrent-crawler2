<?php

require_once(APP_ROOT.'/libs/simple_html_dom.php');
require_once(APP_ROOT.'/libs/Torrent.class.php');
echo "lol";
class	Parser
{
    private		$html;
    private		$url;
    private		$max_results;

    public function __construct($url)
    {
        $this->url  = $url;
        $this->html = file_get_html($this->url);
        if (!$this->html) {
            throw new Exception('Html is empty');
        }
    }

    function run($max_results = 5)
    {
        $this->max_results = $max_results;
        $tabs              = $this->html->find("table[id=searchResult] tr");
        if (!$tabs) {
            throw new Exception('Could not find any results.');
        }
        $tabs = array_slice($tabs, 0, $max_results + 1);
        $results = array();
        foreach ($tabs as $tr) {
            $magnet_link = $this->get_magnet_link($tr);
            $name        = $this->get_name($tr);
            $leechers    = $this->get_leechers($tr);
            $seeders     = $this->get_seeders($tr);
            $date        = $this->get_date($tr);
            $size        = $this->get_size($tr);

            if ($magnet_link && $name
                && $leechers && $seeders
                && $date && $size)
            {
                $results[] = new Torrent($name, $seeders, $leechers, $date, $size, $magnet_link);
            }
        }
        return $results;
    }

    function get_magnet_link($tr) {
        $res = $tr->find("td", 1);
        if ($res) {
            $res = $res->find("a[href^=magnet]");
            if ($res) {
                $res = $res[0]->attr["href"];
            }
        }
        else
            $res = null;
        return $res;
    }

    function get_name($tr) {
        $res = $tr->find("td", 1);
        if ($res) {
            $res = $res->find("div[class=detName]");
            $res = $res[0]->children[0];
            //if ($res->innertext()) {
            $res = $res->innertext();
            //}
        }
        else
            $res = null;
        return $res;
    }

    function get_string($tr) {
        $res = $tr->find("td", 1);
        if ($res) {
            $res = $res->find("font[class=detDesc]", 0);
            if ($res) {
                $res = $res->innerText();
            }
        }
        $res = explode(" ", $res);
        if (count($res) <= 1)
            return null;
        return $res;
    }

    function get_date($tr) {
        $res = $this->get_string($tr);
        if ($res && count($res) > 1)
        {
            $res = $res[1];
        }
        return str_replace("&nbsp;", " ", $res);
    }

    function get_size($tr) {
        $res = $this->get_string($tr);
        if ($res)
        {
            $res = $res[3];
        }
        return str_replace("&nbsp;", " ", $res);
    }

    function get_seeders($tr) {
        $res = $tr->find("td", 2);
        if ($res) {
            $res = $res->innertext();
        }
        else
            $res = null;
        return $res;
    }

    function get_leechers($tr) {
        $res = $tr->find("td", 3);
        if ($res) {
            $res = $res->innertext();
        }
        else
            $res = null;
        return $res;
    }

}

?>
