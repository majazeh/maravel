<?php

function maravel_path($path = null)
{
    $path = trim($path, '/');
    return __DIR__ . ($path ? "/$path" : '');
}

function _t($trans)
{
    return $trans;
}

function order_link($order, $sort)
{
    $query = request()->all();
    $query['order'] = $order;
    $query['sort'] = $sort;
    return Request::create(url()->current(), 'GET', $query)->getUri();
}

function result_message(&$array, $text)
{
    $text = strtoupper(preg_replace("/[\.!]/", '', str_replace(' ', '_', $text)));
    $array['message'] = $text;
    $array['message_text'] = _t($text);
}
