<?php
if (!function_exists('menuHelper')) {
    /**
     * Returns a human readable file size
     *
     * @param integer $bytes
     * Bytes contains the size of the bytes to convert
     *
     * @param integer $decimals
     * Number of decimal places to be returned
     *
     * @return string a string in human readable format
     *
     * */
    function menuHelper($id)
    {
        $categories = DB::table('categories')->select('id','parent_id','order','name','slug','created_at','updated_at')->where('parent_id',$id)->get();

        $path = array();

        foreach($categories as $cate):
            if($cate->id != '') {
                 $path[] = array("id"=>$cate->id,"parent_id"=>$cate->parent_id,"name"=>$cate->name,"slug"=>$cate->slug,"order"=>$cate->order);
                 $path = array_merge(menuHelper($cate->id), $path);
            }
          endforeach;
          return $path;
    }
}
?>