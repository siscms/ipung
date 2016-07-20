<?php

if (!function_exists('pretty_date')) {

    function pretty_date($date = '', $format = '', $timezone = TRUE) {
        $date_str = strtotime($date);

        if (empty($format)) {
            $date_pretty = date('l, d/m/Y H:i', $date_str);
        } else {
            $date_pretty = date($format, $date_str);
        }

        if ($timezone) {
            $date_pretty .= ' WIB';
        }

        $date_pretty = str_replace('Sunday', 'Minggu', $date_pretty);
        $date_pretty = str_replace('Monday', 'Senin', $date_pretty);
        $date_pretty = str_replace('Tuesday', 'Selasa', $date_pretty);
        $date_pretty = str_replace('Wednesday', 'Rabu', $date_pretty);
        $date_pretty = str_replace('Thursday', 'Kamis', $date_pretty);
        $date_pretty = str_replace('Friday', 'Jumat', $date_pretty);
        $date_pretty = str_replace('Saturday', 'Sabtu', $date_pretty);

        $date_pretty = str_replace('January', 'Januari', $date_pretty);
        $date_pretty = str_replace('February', 'Februari', $date_pretty);
        $date_pretty = str_replace('March', 'Maret', $date_pretty);
        $date_pretty = str_replace('April', 'April', $date_pretty);
        $date_pretty = str_replace('May', 'Mei', $date_pretty);
        $date_pretty = str_replace('June', 'Juni', $date_pretty);
        $date_pretty = str_replace('July', 'Juli', $date_pretty);
        $date_pretty = str_replace('August', 'Agustus', $date_pretty);
        $date_pretty = str_replace('September', 'September', $date_pretty);
        $date_pretty = str_replace('October', 'Oktober', $date_pretty);
        $date_pretty = str_replace('November', 'November', $date_pretty);
        $date_pretty = str_replace('December', 'Desember', $date_pretty);

        return $date_pretty;
    }

    if (!function_exists('catalog_url')) {

        function catalog_url($catalog = array()) {

            list($date, $time) = explode(' ', $catalog['catalog_input_date']);
            list($year, $month, $day) = explode('-', $date);
            return site_url('catalog/detail/' . $year . '/' . $month . '/' . $day . '/' . $catalog['catalog_id'] . '/' . url_title($catalog['catalog_name'], '-', TRUE) . '.html');
        }

    }

    if (!function_exists('catalog_category_url')) {

        function catalog_category_url($category = array()) {

            return site_url('catalog/category/' . $category['category_id'] . '/' . url_title($category['category_name'], '-', TRUE) . '.html');
        }

    }

    if (!function_exists('template_media_url')) {

        function template_media_url($name = '') {
            return base_url('media/templates/' . config_item('template') . '/' . $name);
        }

    }

    if (!function_exists('upload_url')) {

        function upload_url($name = '') {
            if (stristr($name, '://') !== FALSE) {
                return $name;
            } else {
                return base_url('uploads/' . $name);
            }
        }

    }

    if (!function_exists('media_url')) {

        function media_url($name = '') {
            return base_url('media/' . $name);
        }

    }
}
?>
