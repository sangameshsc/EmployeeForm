<?php


class Pages extends Controller
{
  public function __construct()
  {
  }



  public function index()
  {
    $data = [
      'title' => 'Employee Details',
    ];

    $this->view('pages/index', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Us'
    ];

    $this->view('pages/about', $data);
  }

  public function iindex()
  {
    $this->view('pages/login');
  }

  public function guest()
  {
    $model = $this->model('Employe');
    $posts = $model->display1();
    $data = [
      'posts' => $posts
    ];
    $this->view('pages/posts', $data);
  }

  public function logout()
  {
    session_unset();
    session_destroy();
    $this->view('pages/login');
  }

  public function login()
  {
    if (isset($_POST)) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      if (admin_name == $email && admin_password == $password) {
        // session_start();
        $_SESSION['admin_name'] = 'email';
        $redirectUri = URLROOT."index/logg";
        header('Location:'.$redirectUri);
        exit;
      } else {
       
        // header('Location:http://localhost/mvc/index/login');

        echo "invalid username and password";
        $this->view('pages/login');
      }
    }
  }

  public function logg()
  {
    if (isset($_SESSION['admin_name'])) {
      $model = $this->model('Employe');
      $posts = $model->display1();
      $data = [
        'posts' => $posts
      ];
      $this->view('pages/adminpage', $data);
    } else {
            // exit;
      $this->view('pages/login');
    }
  }

  public function add()
  {
    if (isset($_SESSION['admin_name'])) {

    $this->view('pages/adetails');
  }else{
    $this->view('pages/login');
  }
}

  public function viiew()
  {
    // { session_start();
    if (isset($_SESSION['admin_name'])) {
      $model = $this->model('Employe');
      $posts = $model->display1();
      $data = [
        'posts' => $posts
      ];
      $this->view('pages/posts', $data);
    } else {
      $this->view('pages/login');
    }
  }

  public function save()
  {
    $target_dir='../public/img/';
    $target_file=$target_dir.basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES["photo"]['tmp_name'],$target_file);
    $model = $this->model('Employe');
    $postData = $_POST;
    $model->insert($postData,$target_file);
    $this->view('pages/adminpage');
    $redirectUri = URLROOT."index/logg";
        header('Location:'.$redirectUri);

    // header('Location:http://localhost/mvc/index/logg');

  }

  public function display()
  {
    $model = $this->model('Employe');
    $posts = $model->display1();
    $data = [
      'posts' => $posts
    ];
    $this->view('pages/display', $data);
  }

  public function delet()
  {
    $this->view('pages/delete1');
  }

  public function deleted()
  {
    $model = $this->model('Employe');
    $model->del();
    header('Location:http://localhost/mvc/index/logg');
  }

  public function search()
  {
    $model = $this->model('Employe');
    $posts = $model->disp();
    if($posts){
    $data = [
      'posts' => $posts
    ];
    $this->view('pages/display', $data);
  }else{
    echo"Search not found";
  }
}

  // public function fir3()
  // {
  //   $model=$this->model('book');
  //   $model->display1();
  //   $data=[
  //     'posts'=>$model
  //   ];
  //   $this->view('pages/posts',$data);

  // }

  public function edit($id)
  {
    if (isset($_SESSION['admin_name'])) {
    $models = $this->model('Employe');
    $models1 = $models->empp($id);
    $this->view('pages/editform', $models1);
    }else{
      $this->view('pages/login');

    }
  }

  public function editsave()
  {
    $target_dir='../public/img/';
    $target_file=$target_dir.basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES["photo"]['tmp_name'],$target_file);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $Phoneno = $_POST['phoneno'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pincode = $_POST['pincode'];
    $file = $target_file;
    $id = $_POST['id'];
    $data = [$firstname, $lastname, $email, $Phoneno, $street, $city, $state, $country, $pincode, $file, $id];
    $modal = $this->model('Employe');
    $modal = $modal->modeleditsave($data,$target_file);
    header('Location:http://localhost/mvc/index/logg');
  }
}
