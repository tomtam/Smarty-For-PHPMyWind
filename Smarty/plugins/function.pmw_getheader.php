<?php
function smarty_function_pmw_getheader($params, &$smarty){
    global $dosql, $cfg_webname, $cfg_generator, $cfg_author,$cfg_seotitle, $cfg_keyword, $cfg_description;
    $arr=explode(',',$params['set']);
    foreach($arr as $val){
        $a=explode(':',$val);
        switch ($a[0])
        {
            case "所属站点":
                $sid = $a[1];
                break;
            case "所属栏目":
                $cid = $a[1];
                break;
            case "详情ID":
                $id  = $a[1];
                break;
            case '自定义信息':
                $str = $a[1];
                break;
        }
    }
    $sid = empty($sid)?1:$sid;
    $cid = empty($cid)?'':$cid;
    $id  = empty($id)?'':$id;
    $str = empty($str)?'':$str;
    //检查站点标识
    if($sid != 1)
    {
        $r = $dosql->GetOne("SELECT `sitekey` FROM `#@__site` WHERE `id`=$sid");
        if(isset($r['sitekey']))
        {
            $cfg_webname     = $GLOBALS['cfg_webname_'.$r['sitekey']];
            $cfg_generator   = $GLOBALS['cfg_generator_'.$r['sitekey']];
            $cfg_author      = $GLOBALS['cfg_author_'.$r['sitekey']];
            $cfg_seotitle    = $GLOBALS['cfg_seotitle_'.$r['sitekey']];
            $cfg_keyword     = $GLOBALS['cfg_keyword_'.$r['sitekey']];
            $cfg_description = $GLOBALS['cfg_description_'.$r['sitekey']];
        }
    }



    //设置了自定义标题
    if($str != '')
    {
        $header_str  = '<title>'.$str.' - '.$cfg_webname.'</title>'."\n";
        $header_str .= '<meta name="generator" content="'.$cfg_generator.'" />'."\n";
        $header_str .= '<meta name="author" content="'.$cfg_author.'" />'."\n";
        $header_str .= '<meta name="keywords" content="'.$cfg_keyword.'" />'."\n";
        $header_str .= '<meta name="description" content="'.$cfg_description.'" />'."\n";
    }


    else
    {
        //显示详细信息
        if(!empty($cid) && !empty($id))
        {
            $r = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=$cid");

            if(isset($r['infotype']))
            {
                if($r['infotype'] == 1)
                    $tbname = '#@__infolist';

                else if($r['infotype'] == 2)
                    $tbname = '#@__infoimg';

                else if($r['infotype'] == 3)
                    $tbname = '#@__soft';

                else if($r['infotype'] == 4)
                    $tbname = '#@__goods';

                else
                    $tbname = '#@__infolist';


                //获取栏目信息
                $r2 = $dosql->GetOne("SELECT * FROM `$tbname` WHERE `id`=$id");

                $header_str = '<title>';

                if(isset($r2['title']))
                    $header_str .= $r2['title'].' - ';

                if(isset($r['classname']))
                    $header_str .= $r['classname'];

                $header_str .= ' - '.$cfg_webname.'</title>'."\n";
                $header_str .= '<meta name="generator" content="'.$cfg_generator.'" />'."\n";
                $header_str .= '<meta name="author" content="'.$cfg_author.'" />'."\n";
                $header_str .= '<meta name="keywords" content="';

                if(isset($r2['keywords']))
                    $header_str .= $r2['keywords'];
                else
                    $header_str .= $cfg_keyword;

                $header_str .= '" />'."\n";
                $header_str .= '<meta name="description" content="';

                if(isset($r2['description']))
                    $header_str .= $r2['description'];
                else
                    $header_str .= $cfg_description;

                $header_str .= '" />'."\n";
            }
            else
            {
                $header_str = '';
            }
        }

        //显示栏目信息
        else if(!empty($cid))
        {
            $r = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE `id`=$cid");

            $header_str = '<title>';

            if(!empty($r['seotitle']))
                $header_str .= $r['seotitle'];
            else if(!empty($r['classname']))
                $header_str .= $r['classname'].' - '.$cfg_webname;
            else
                $header_str .= $cfg_webname;

            $header_str .= '</title>'."\n";
            $header_str .= '<meta name="generator" content="'.$cfg_generator.'" />'."\n";
            $header_str .= '<meta name="author" content="'.$cfg_author.'" />'."\n";
            $header_str .= '<meta name="keywords" content="';

            if(!empty($r['keywords']))
                $header_str .= $r['keywords'];
            else
                $header_str .= $cfg_keyword;

            $header_str .= '" />'."\n";
            $header_str .= '<meta name="description" content="';

            if(!empty($r['description']))
                $header_str .= $r['description'];
            else
                $header_str .= $cfg_description;

            $header_str .= '" />'."\n";
        }

        //显示站点信息
        else
        {
            if($cfg_seotitle != '')
                $header_title = $cfg_seotitle. ' - ' .$cfg_webname;
            else
                $header_title = $cfg_webname;

            $header_str  = '<title>'.$header_title.'</title>'."\n";
            $header_str .= '<meta name="generator" content="'.$cfg_generator.'" />'."\n";
            $header_str .= '<meta name="author" content="'.$cfg_author.'" />'."\n";
            $header_str .= '<meta name="keywords" content="'.$cfg_keyword.'" />'."\n";
            $header_str .= '<meta name="description" content="'.$cfg_description.'" />'."\n";
        }
    }
    $smarty->assign('header',$header_str);
}
?>