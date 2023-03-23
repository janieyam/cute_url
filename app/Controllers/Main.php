<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        return view('home_page');
    }

    public function login()
    {
        if (array_key_exists('user_session', session()->get())) {
            return redirect()->to('admin');
        }
        return view('login_page');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function admin()
    {
        if (array_key_exists('user_session', session()->get())) {
            $qturl_m = new \App\Models\CuteUrl();
            $user = session()->get('user_session');

            $data['user'] = $user;
            $data['urls'] = $qturl_m
                ->where('user_id', $user['id'])
                ->orderBy('dtc', 'desc')
                ->findAll();
            return view('admin_page', $data);
        } else {
            return redirect()->to('login');
        }
    }

    public function users()
    {
        if (array_key_exists('user_session', session()->get())) {

            $user_m = new \App\Models\UserAccount();

            $user = session()->get('user_session');

            if (array_key_exists('user_id', $this->request->getGet())) {

                $data['edit_user'] = $user_m->find($this->request->getGet('user_id'));
            }

            $data['user'] = $user;
            $data['users'] = $user_m
                ->where('id !=', $user['id'])
                ->orderBy('dtc', 'desc')
                ->findAll();
            return view('users_page', $data);
        } else {
            return redirect()->to('login');
        }
    }

    public function process($mode)
    {

        switch ($mode) {

            case 'login': {
                    $user_m = new \App\Models\UserAccount();
                    $username = $this->request->getPost('username');
                    $password = $this->request->getPost('pass');
                    $captcha = $this->request->getPost("g-recaptcha-response");
                    
                    //recaptcha verification
                    $url='https://www.google.com/recaptcha/api/siteverify?';
                    $secret_key="6LdxFyYlAAAAAAZeoJYbCEGpKC1ejHAHwSxT7Qix";
                    $recaptcha_data = [
                        'secret' => $secret_key,
                        'response' => $captcha,
                    ];
                    $options = [
                        'http' => [
                        'header' => 'Content-type: application/x-www-form-urlencoded\r\n',
                        'method' => 'POST',
                        'content' => http_build_query($recaptcha_data),
                        ],
                    ];
                    $context = stream_context_create($options);
                    $result = file_get_contents($url, false, $context);
                    $recaptcha_data = json_decode($result);
        

                    $users_data = $user_m
                        ->where('username', $username)
                        ->findAll();
                            
                    if (count($users_data) > 0) {

                        $verify = password_verify($password, $users_data[0]['passw']);
                        
                        //check if user credentials is verified
                        //check if recaptcha succeeded and checked
                        if ($verify && $recaptcha_data->success) {
                            session()->set('user_session', $users_data[0]);                             
                            return redirect()->to('admin');
                        } else {
                            return redirect()->to('login');
                        }
                                
                    } else {
                        return redirect()->to('login');
                    }
                }
            case 'register_user': {

                    $user_m = new \App\Models\UserAccount();
                    $username = $this->request->getPost('username');
                    $password = $this->request->getPost('pass');
                    $password2 = $this->request->getPost('pass2');
                    $short_name = $this->request->getPost('short_name');

                    if ($password === $password2) {
                        $user_m->save([
                            'username' => $username,
                            'passw' => password_hash($password, PASSWORD_ARGON2ID),
                            'short_name' => $short_name,
                        ]);
                    }

                    return redirect()->to('users');
                }
                break;

            case 'update_user': {

                    $user_m = new \App\Models\UserAccount();

                    $id = $this->request->getPost('id');
                    $short_name = $this->request->getPost('short_name');
                    $username = $this->request->getPost('username');
                    $password = $this->request->getPost('pass');

                    $edit['id'] = $id;
                    $edit['short_name'] = $short_name;
                    $edit['username'] = $username;

                    if (!empty($password)) {
                        $edit['passw'] = password_hash($password, PASSWORD_ARGON2ID);
                    }

                    $user_m->save($edit);

                    return redirect()->to('users');
                }
                break;
            case 'delete_user': {

                    $user_m = new \App\Models\UserAccount();
                    $user_id = $this->request->getGet('user_id');

                    $user_m->delete($user_id);
                    return redirect()->to('users');
                }
                break;
            case 'add_url': {
                $qturl_m = new \App\Models\CuteUrl();
                $user = session()->get('user_session');

                $source_url = $this->request->getpost('source_url');

                $random_code = strtolower(random_string('alnum',32));
                $short_code = strtolower(random_string('alnum',8));

                $qturl_m->save([
                    'source_url' => $source_url,
                    'target_code' => $random_code,
                    'custom' => $short_code,
                    'user_id' => $user['id'],
                ]);

                return redirect()->to('admin');
                }
            default:
                return redirect()->to('login');
        }
    }

    public function shortcut_url($custom)
    {
        $qturl_m = new \App\Models\CuteUrl();
        $qturl_d = $qturl_m->where('custom', $custom)->findAll();
        if (count($qturl_d) > 0) {
            return redirect()->to($qturl_d[0]['source_url']);
        } else {
            echo "URL no longer exists.";
        }
    }
}
