<?
function _url_($path){
    return url($path);
}
/**
 * 路由可能是http，也可能是https，这里设置，全局使用
 * @param $path
 * @return string
 */
function _asset_($path)
{
    return asset($path);
}

/**
 * 整理request对象获取客户端的数据
 * @param $data
 * @return array
 */
function datas($data)
{
    $return = array();

    foreach ($data as $v) {
        if ($v['value'] === null) $v['value'] = '';
        $return[$v['name']] = $v['value'];
    }

    return $return;
}

/**
 * 判断数组中某个key对应的值是否有效，有效则true，否则为false
 * @param $key
 * @param $array
 * @return bool
 */
function array_member($key, $array)
{
    if (array_key_exists($key, $array) && $array[$key] !== null && $array[$key] !== '') {
        return true;
    } else {
        return false;
    }
}

