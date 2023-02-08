<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Petugas;
use App\Models\Penumpang;
use Illuminate\Support\Facades\Auth;
 
class CustomAuthController extends Controller
{
 
    public function index()
    {
        return view('auth.login');
    }  
       
 
    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        if ($cek = Penumpang::where('username',$request->username)->first()) {
            if(Hash::check($request->password, $cek->password)){
                Session::put('user', $cek);
                Session::put('isLogin', true);
                return redirect()->intended('dashboard')
                            ->withSuccess('Signed in');
            }
        }
        // else if ($cek = Penumpang::where('username',$request->username)->first()) {
        //     if(Hash::check($request->username, $cek->password)){
        //         return redirect()->intended('dashboard')
        //                     ->withSuccess('Signed in');
        //     }
        // }
        return redirect("login")->withSuccess('Login details are not valid');
    }
 
 
 
    public function registration()
    {
        return view('auth.registration');
    }
       
 
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'nama_penumpang' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'jeni_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'username' => 'required',
            'password' => 'required|min:6',
        ]);
            
        Penumpang::create([
            'nama_penumpang' => $request['nama_penumpang'],
            'alamat' => $request['alamat'],
            'telepon' => $request['telepon'],
            'jeni_kelamin' => $request['jeni_kelamin'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
          ]); 
          
        return redirect("dashboard");
    }
 
 
    public function create(array $data)
    {
      return Penumpang::create([
        'nama_penumpang' => $data['nama_penumpang'],
        'alamat' => $data['alamat'],
        'telepon' => $data['telepon'],
        'jeni_kelamin' => $data['jeni_kelamin'],
        'tanggal_lahir' => $data['tanggal_lahir'],
        'username' => $data['username'],
        'password' => Hash::make($data['password']),
      ]); 
    }       
     
 
    public function dashboard()
    {
        if(Session::has('isLogin')){
			return view('dashboard');
		}else{
			return redirect("login")->withSuccess('are not allowed to access');
		}
          
    }
     
 
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return Redirect('login');
    }
}