<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Input;
use Image;
use DB;
use File;

class Common {

    public $output = array();
    public $head_child_list = array();
    public $head_parent_list = array();
    public $head_amount = array();
    public $parent_head_child_list = array();
    public $head_total_expense_by_month = array();
    public $month_array = array(
        '1' => 'January',
        '2' => 'February',
        '3' => 'March',
        '4' => 'April',
        '5' => 'May',
        '6' => 'June',
        '7' => 'July',
        '8' => 'August',
        '9' => 'September',
        '10' => 'October',
        '11' => 'November',
        '12' => 'December'
    );

    public function get_blood_group() {
        $blood_group = array("A+", "B+", "O+", "AB+", "A-", "O-", "B-", "AB-");
        $str='';
        for($i=0; $i<8;$i++){
            $str.='<option value="'.$blood_group[$i].'">'.$blood_group[$i].'</option>';    
        }
        return $str;
    }

    public function uploadImage($fileInputField, $uploadFolder, $fileName = '', $create_thumb = false, $photoIndex = false) {
        $uploadedFileName = '';

        if (Input::file($fileInputField)) {

            $fileName = preg_replace('/\s*/', '', $fileName);
            $fileName = strtoupper($fileName);
            $fileInfo = Input::file($fileInputField);
            if (is_array($fileInfo))
                $fileInfo = $fileInfo[$photoIndex];


            $uploadedFileName = $fileName . '.' . $fileInfo->getClientOriginalExtension();

            //Upload Thumbnail Image
            if ($create_thumb) {
                $upload_thumb_path = public_path($uploadFolder . '/thumbs');
                if (!File::exists($upload_thumb_path)) {
                    File::makeDirectory($upload_thumb_path, $mode = 0777, true, true);
                }
                Image::make($fileInfo->getRealPath())->resize(150, 150)->save($upload_thumb_path . '/' . $uploadedFileName);
            }

            //Upload Original Image
            $upload_path = public_path($uploadFolder);
            if (!File::exists($upload_path)) {
                File::makeDirectory($upload_path, $mode = 0777, true, true);
            }
            $fileInfo->move($upload_path, $uploadedFileName);
        }

        return $uploadedFileName;
    }

    public function getDistricts($divisionid, $presentdist = NULL) {
        $alldistricts = DB::table('districts')->select('id', 'full_name')->where('division_id', $divisionid)->orderBy('full_name', 'asc')->get();
        $html = "";
        $html .= "<option value='0'>Select District</option>";
        foreach ($alldistricts as $districts) {
            if (isset($presentdist) && ($districts->id == $presentdist)) {
                $selected = 'selected="selected"';
            } else {
                $selected = '';
            }

            $html .= "<option value=" . $districts->id . " " . $selected . ">" . $districts->full_name . "</option>";
        }
        echo $html;
    }

    public function getUpazilas($districtid, $presentupazila = NULL) {
        $allupazilas = DB::table('upazila')->select('id', 'full_name')->where('district_id', $districtid)->orderBy('full_name', 'asc')->get();
        $html = "";
        $html .= "<option value='0'>Select Upazila</option>";
        foreach ($allupazilas as $upazilas) {
            if (isset($presentupazila) && ($upazilas->id == $presentupazila)) {
                $selected = 'selected="selected"';
            } else {
                $selected = '';
            }
            $html .= "<option value=" . $upazilas->id . " " . $selected . ">" . $upazilas->full_name . "</option>";
        }
        echo $html;
    }
 










    public function  get_footer($table_name, $column_name, $check_value)
    {
        $sql_result=DB::table($table_name)->select('*')->where($column_name,$check_value)->first();
        return $sql_result;
    }
 
    public function getStudentsByClass($classid, $shiftid, $sectionid, $group) {
        $query = DB::table('students AS std')
                ->select('std.*')
                ->where([['std.school_row_id', session('school_row_id')], ['std.current_session', session('academic_session_row_id')], ['std.current_class', $classid], ['std.current_shift', $shiftid], ['std.current_section', $sectionid], ['std.current_department', $group]])
                ->orderBy('std.current_rollnumber', 'asc');

        $allStudentsByClass = $query->get();

        $html = "";
        $html .= "<option value='0'>Select Student</option>";
        foreach ($allStudentsByClass as $students) {
            $html .= "<option value=" . $students->student_row_id . ">" . $students->student_name . "</option>";
        }
        echo $html;
    }

    public function getStudentsWithIdByClass($classid, $shiftid, $sectionid, $group) {
        $query = DB::table('students AS std')
                ->select('std.*')
                ->where([['std.school_row_id', session('school_row_id')], ['std.current_session', session('academic_session_row_id')], ['std.current_class', $classid], ['std.current_shift', $shiftid], ['std.current_section', $sectionid], ['std.current_department', $group]])
                ->orderBy('std.current_rollnumber', 'asc');

        $allStudentsByClass = $query->get();

        $html = "";
        $html .= "<option value='0'>Select Student</option>";
        foreach ($allStudentsByClass as $students) {
            $html .= "<option value=" . $students->student_id . ">" . $students->student_name . "</option>";
        }
        echo $html;
    }
 

    public function destroy($id) {
        $file = Upload::find($id);
        $filename = Input::get('database field name for file');
        $path = public_path() . '/path/to/file/';

        if (!File::delete($path . $filename)) {
            Session::flash('flash_message', 'ERROR deleted the File!');
            return Redirect::to('page name');
        } else {
            $file->delete();
            Session::flash('flash_message', 'Successfully deleted the File!');
            return Redirect::to('page name');
        }
    } 


    public function get_site_url(){
        $site_url="http://localhost:81/Lifecycle/";
        return $site_url;
    }

}
