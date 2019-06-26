<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\db_Model\Category as catModel;
use App\db_Model\Sub_Category as subCatModel;

class mainController extends Controller
{
    //
    public function saveCategory(Request $request)
    {
    	$catName = $request->catName;
    	$catType = $request->catType;

    	$catObj = new catModel;
    	$catObj->category_name = $catName;
        $catObj->category_type = $catType;
        $catObj->category_short_name = "";
        $catObj->description = "";
        $catObj->created_by = 1;
        $catObj->updated_by = 0;

    	$catObj->save();
    	return "<p style='text-align:center'><span style='color:red;font-weight:bold'>Records Succfully 
        Saved</span><br><a href=".route("setting").">Go Back</a></p>";

    }

    public function saveSubCategory(Request $request)
    {
        $subCatName = $request->subCatName;
        $subCatType = $request->subCatType;
        $catId= $request->category;


        $catObj = new subCatModel;
        $catObj->sub_category_name = $subCatName;
        $catObj->sub_category_type = $subCatType;
        $catObj->sub_category_short_name = "";
        $catObj->description = "";
        $catObj->created_by = 1;
        $catObj->updated_by = 0;
        $catObj->category_id = $catId;

    

        $catObj->save();
        return "<p style='text-align:center'><span style='color:red;font-weight:bold'>Records Succfully 
        Saved</span><br><a href=".route("setting").">Go Back</a></p>";

    }

}
