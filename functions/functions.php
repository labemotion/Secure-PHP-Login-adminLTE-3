<?php

function protect($string) {
    return htmlspecialchars(trim($string), ENT_QUOTES);
}

function randomHash($lenght = 7) {
    return substr(md5(rand()), 0, $lenght);
}

function isValidURL($url) {
    return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
}

function check_email($email) {
    return preg_match('#^[a-z0-9.!\#$%&\'*+-/=?^_`{|}~]+@([0-9.]+|([^\s]+\.+[a-z]{2,6}))$#si', $email);
}

function check_string($string) {
    $bad_strings = array(
        'content-type:',
        'mime-version:',
        'multipart/mixed',
        'Content-Transfer-Encoding:',
        'bcc:',
        'cc:',
        'to:',
        'from:',
    );
    foreach ($bad_strings as $bad_string) {
        if (eregi($bad_string, strtolower($string))) {
            return false;
        }
    }
    return true;
}

function check_newlines($string) {
    if (preg_match("/(%0A|%0D|\\n+|\\r+)/i", $string) != 0) {
        return false;
    }
    return true;
}

function check_post_request() {
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        return false;
    }
    return true;
}

function strip_html_entities($str) {
    return preg_replace("/&[a-z0-9]{2,6}+;/i", '', $str);
}

function check_header_injection($fields) {
    $injection = false;
    for ($n = 0; $n < count($fields); $n++) {
        if (eregi("%0A", $fields[$n]) || eregi("%0D", $fields[$n]) || eregi("\r", $fields[$n]) || eregi("\n", $fields[$n])) {
            $injection = true;
        }
    }
    return $injection;
}

function checkAdminSession() {
    if (isset($_SESSION['admin_uid'])) {
        return true;
    } else {
        return false;
    }
}

function isValidUsername($str) {
    return preg_match('/^[a-zA-Z0-9-_]+$/', $str);
}

function isValidEmail($str) {
    return filter_var($str, FILTER_VALIDATE_EMAIL);
}

function checkSession() {
    if (isset($_SESSION['uid'])) {
        return true;
    } else {
        return false;
    }
}

function success($text) {
    return '<div class="alert alert-success"><i class="fa fa-check"></i> ' . $text . '</div>';
}

function error($text) {
    return '<div class="alert alert-danger"><i class="fa fa-times"></i> ' . $text . '</div>';
}

function info($text) {
    return '<div class="alert alert-info"><i class="fa fa-info-circle"></i> ' . $text . '</div>';
}

function admin_pagination($query, $ver, $per_page = 10, $page = 1, $url = '?') {
    global $conn;
    $query = $conn->query("SELECT * FROM $query");
    $total = $query->num_rows;
    $adjacents = "2";

    $page = ($page == 0 ? 1 : $page);
    $start = ($page - 1) * $per_page;

    $prev = $page - 1;
    $next = $page + 1;
    $lastpage = ceil($total / $per_page);
    $lpm1 = $lastpage - 1;

    $pagination = "";
    if ($lastpage > 1) {
        $pagination .= "<ul class='pagination'>";

        if ($lastpage < 7 + ($adjacents * 2)) {
            for ($counter = 1; $counter <= $lastpage; $counter++) {
                if ($counter == $page) {
                    $pagination .= "<li><a class='active'>$counter</a></li>";
                } else {
                    $pagination .= "<li><a href='$ver&page=$counter'>$counter</a></li>";
                }
            }
        } elseif ($lastpage > 5 + ($adjacents * 2)) {
            if ($page < 1 + ($adjacents * 2)) {
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                    if ($counter == $page) {
                        $pagination .= "<li><a class='active'>$counter</a></li>";
                    } else {
                        $pagination .= "<li><a href='$ver&page=$counter'>$counter</a></li>";
                    }
                }
                $pagination .= "<li class='disabled'>...</li>";
                $pagination .= "<li><a href='$ver&page=$lpm1'>$lpm1</a></li>";
                $pagination .= "<li><a href='$ver&page=$lastpage'>$lastpage</a></li>";
            } elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
                $pagination .= "<li><a href='$ver&page=1'>1</a></li>";
                $pagination .= "<li><a href='$ver&page=2'>2</a></li>";
                $pagination .= "<li class='disabled'><a>...</a></li>";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                    if ($counter == $page) {
                        $pagination .= "<li><a class='active'>$counter</a></li>";
                    } else {
                        $pagination .= "<li><a href='$ver&page=$counter'>$counter</a></li>";
                    }
                }
                $pagination .= "<li class='disabled'><a>..</a></li>";
                $pagination .= "<li><a href='$ver&page=$lpm1'>$lpm1</a></li>";
                $pagination .= "<li><a href='$ver&page=$lastpage'>$lastpage</a></li>";
            } else {
                $pagination .= "<li><a href='$ver&page=1'>1</a></li>";
                $pagination .= "<li><a href='$ver&page=2'>2</a></li>";
                $pagination .= "<li class='disabled'><a>..</a></li>";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
                    if ($counter == $page) {
                        $pagination .= "<li><a class='active'>$counter</a></li>";
                    } else {
                        $pagination .= "<li><a href='$ver&page=$counter'>$counter</a></li>";
                    }
                }
            }
        }

        if ($page < $counter - 1) {
            $pagination .= "<li><a href='$ver&page=$next'>Next</a></li>";
            $pagination .= "<li><a href='$ver&page=$lastpage'>Last</a></li>";
        } else {
            $pagination .= "<li><a class='disabled'>Next</a></li>";
            $pagination .= "<li><a class='disabled'>Last</a></li>";
        }
        $pagination .= "</ul>\n";
    }


    return $pagination;
}

function web_pagination($query, $ver, $per_page = 10, $page = 1, $url = '?') {
    global $conn;
    $query = $conn->query("SELECT * FROM $query");
    $total = $query->num_rows;
    $adjacents = "2";

    $page = ($page == 0 ? 1 : $page);
    $start = ($page - 1) * $per_page;

    $prev = $page - 1;
    $next = $page + 1;
    $lastpage = ceil($total / $per_page);
    $lpm1 = $lastpage - 1;

    $pagination = "";
    if ($lastpage > 1) {
        $pagination .= "<ul class='pagination'>";

        if ($lastpage < 7 + ($adjacents * 2)) {
            for ($counter = 1; $counter <= $lastpage; $counter++) {
                if ($counter == $page) {
                    $pagination .= "<li><a class='active'>$counter</a></li>";
                } else {
                    $pagination .= "<li><a href='$ver/$counter'>$counter</a></li>";
                }
            }
        } elseif ($lastpage > 5 + ($adjacents * 2)) {
            if ($page < 1 + ($adjacents * 2)) {
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                    if ($counter == $page)
                        $pagination .= "<li><a class='active'>$counter</a></li>";
                    else
                        $pagination .= "<li><a href='$ver/$counter'>$counter</a></li>";
                }
                $pagination .= "<li class='disabled'>...</li>";
                $pagination .= "<li><a href='$ver/$lpm1'>$lpm1</a></li>";
                $pagination .= "<li><a href='$ver/$lastpage'>$lastpage</a></li>";
            } elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
                $pagination .= "<li><a href='$ver/1'>1</a></li>";
                $pagination .= "<li><a href='$ver/2'>2</a></li>";
                $pagination .= "<li class='disabled'><a>...</a></li>";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                    if ($counter == $page)
                        $pagination .= "<li><a class='active'>$counter</a></li>";
                    else
                        $pagination .= "<li><a href='$ver/$counter'>$counter</a></li>";
                }
                $pagination .= "<li class='disabled'><a>..</a></li>";
                $pagination .= "<li><a href='$ver/$lpm1'>$lpm1</a></li>";
                $pagination .= "<li><a href='$ver/$lastpage'>$lastpage</a></li>";
            } else {
                $pagination .= "<li><a href='$ver/1'>1</a></li>";
                $pagination .= "<li><a href='$ver/2'>2</a></li>";
                $pagination .= "<li class='disabled'><a>..</a></li>";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
                    if ($counter == $page)
                        $pagination .= "<li><a class='active'>$counter</a></li>";
                    else
                        $pagination .= "<li><a href='$ver/$counter'>$counter</a></li>";
                }
            }
        }

        if ($page < $counter - 1) {
            $pagination .= "<li><a href='$ver/$next'>Next</a></li>";
            $pagination .= "<li><a href='$ver/$lastpage'>Last</a></li>";
        } else {
            $pagination .= "<li><a class='disabled'>Next</a></li>";
            $pagination .= "<li><a class='disabled'>Last</a></li>";
        }
        $pagination .= "</ul>\n";
    }


    return $pagination;
}

function idinfo($uid, $value) {
    global $mdb;
    $query = $mdb->query("SELECT * FROM users WHERE id='$uid'");
    $row = $query->fetch_assoc();
    return $row[$value];
}
