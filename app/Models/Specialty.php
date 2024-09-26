<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $table = 'specialty';
    // protected $fillable=['title','slug','photo','status'];
    protected $fillable = ['title', 'photo', 'status', 'category_id', 'slug'];

    public function cat_info(){
        return $this->hasOne('App\Models\Category','id','cat_id');
    }
    public function parent_info(){
        return $this->hasOne('App\Models\Specialty','id','parent_id');
    }
    public static function getAllCategory(){
        return  Specialty::orderBy('id','DESC');
    }
    public static function shiftChild($cat_id){
        return Specialty::whereIn('id',$cat_id);
    }
    public static function getChildByParentID($id){
        return Specialty::orderBy('id','ASC')->pluck('title','id');
    }

    public function child_cat(){
        return $this->hasMany('App\Models\Specialty','id')->where('status','active');
    }
     public static function getAllParentWithChild(){
        return Specialty::with('child_cat')->where('status','active')->orderBy('title','ASC')->get();
    }
    public function products(){
        return $this->hasMany('App\Models\Product','cat_id','id')->where('status','active');
    }
    public function sub_products(){
        return $this->hasMany('App\Models\Product','child_cat_id','id')->where('status','active');
    }
    public static function getProductByCat($slug){
        // dd($slug);
        return Specialty::with('products')->where('slug',$slug)->first();
        // return Product::where('cat_id',$id)->where('child_cat_id',null)->paginate(10);
    }
    public static function getProductBySubCat($slug){
        // return $slug;
        return Specialty::with('sub_products')->where('slug',$slug)->first();
    }
   

    public static function countActiveCategory(){
        $data=Specialty::where('status','active')->count();
        if($data){
            return $data;
        }
        return 0;
    }
   

 
}
