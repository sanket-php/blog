<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class demo1 extends Model
{
  public function getData(){
    return $users = DB::table('employee')->get();
  }

  public function insertData($request) {
      $values = array('id' => $request->id,'name' => $request->name,'address' => $request->address, 'mobile' => $request->mobile);
      if(DB::table('employee')->insert($values)) {
        return true;
      } else {
        return false;
      }
  }

  public function deleteRecords($request) {
    $a = DB::delete('delete from employee where id = ?',[$request->id]);
    if($a) {
      return true;
    } else {
      return false;
    }
  }
}
