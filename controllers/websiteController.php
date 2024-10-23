<?php
namespace controllers;

use \Models\student;

class websiteController{
  public function index(){
    return view("index", ['name' => 'index page']);
   

  }
  public function students(){
    return view("students.index", ['data' => student::all()]);
  }
  public function atif(){
    echo "atif";
  }
  public function haris(){
    echo "haris";
  }
  public function edit($id){
    $student = student::find($id);
    return view ("students.edit", ['student'=>$student]);
  }
  public function update($id) {
    $student = student::find($id);
    $student->fill($_POST);
    $student->save();
    header("Location: /students");
  }
  public function delete($id){
    $student = student::find($id);
    $student->delete();
    header("Location: /students");
   
  }
  public function save(){
    
    $student = new student();
    $student->fill($_POST);
    $student->save();
    header("Location: /students");
  }
 

}
?>