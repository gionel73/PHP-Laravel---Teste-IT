<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;


class StudentController extends Controller
{
    public function create()
    {
        
		return view('Student.login');
    }


	public function addStudent(Request $request)
    {
		$student=new Student();
		$this->validate($request,['student'=>'required|min:3','password'=>'required|min:3']);
		$student->name=htmlspecialchars(trim($request->input('student')));
		if(!StudentController::validate_name($student->name)) {
			return redirect('/testit');
		}
		$student->password=htmlspecialchars(trim(md5($request->input('password'))));
		$temp = DB::table('students')->where('name', $student->name)->first();
		if (!$temp) {
				$student->htmltest='';
				$student->csstest='';
				$student->phptest='';
				$student->htmlresult=0;
				$student->cssresult=0;
				$student->phpresult=0;
				$student->save();
								
				StudentController::initSession($student);
					
				return redirect('/testit/home');
				}
		elseif ($temp->password!=$student->password){
				$err1='The password is incorrect';
				return redirect('/testit');
				}
		
		if ($student->name=='admin'){							//  admin -> acces stergere user
			
			$student->htmltest=$temp->htmltest;
			$student->csstest=$temp->csstest;
			$student->phptest=$temp->phptest;
			$student->htmlresult=$temp->htmlresult;
			$student->cssresult=$temp->cssresult;
			$student->phpresult=$temp->phpresult;
			
			StudentController::initSession($student);
			
			$studentsList=Student::all()->pluck('name','id'); 
			return view('student.showStudent',['studentsList'=>$studentsList]);
		}
		else {
			$student->htmltest=$temp->htmltest;
			$student->csstest=$temp->csstest;
			$student->phptest=$temp->phptest;
			$student->htmlresult=$temp->htmlresult;
			$student->cssresult=$temp->cssresult;
			$student->phpresult=$temp->phpresult;
		
			StudentController::initSession($student);
				
			return redirect('/testit/home');
		}
    }
	
	public function deleteStudent($id){
		Student::destroy($id);
		$studentsList=Student::all()->pluck('name','id'); 
		return view('student.showStudent',['studentsList'=>$studentsList]); 
	}
	
	public function saveTest($curs){
		
		$student = Student::where('name', 'LIKE', $_SESSION['name'])->first();
		switch ($curs){
			case 'html': 
				$student['htmltest']=$_SESSION['answers'];
				$student['htmlresult']=$_SESSION['htmlresult'];
				break;
			case 'css': 
				$student['csstest']=$_SESSION['answers'];
				$student['cssresult']=$_SESSION['cssresult'];
				break;
			case 'php': 
				$student['phptest']=$_SESSION['answers'];
				$student['phpresult']=$_SESSION['phpresult'];
				break;
			default: return 'saveTest ERROR';
		}
		
		$student->save();
		StudentController::initSession($student);
		return redirect('/testit/home');
	}

	static function initSession(Student $student){
		
		$_SESSION['name']=$student->name;
		$_SESSION['answers']='';
		$_SESSION['htmltest']=$student->htmltest;
		$_SESSION['csstest']=$student->csstest;
		$_SESSION['phptest']=$student->phptest;
		$_SESSION['htmlresult_old']=$student->htmlresult;
		$_SESSION['cssresult_old']=$student->cssresult;
		$_SESSION['phpresult_old']=$student->phpresult;
		$_SESSION['htmlresult']=0;
		$_SESSION['cssresult']=0;
		$_SESSION['phpresult']=0;
		return true;
	}
	
	static function validate_name($name){
		$err='';
		if(preg_match("/^[a-zA-Z ]*$/",$name)){
			return true;
		}
		else{
			return false;
		}
	}
	
	
}


