<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@Welcome');

//Xử Lý Đăng Nhập Và Đăng Xuất
Route::get('/dangki', 'UserController@getSignUp')->name('dangki');
Route::post('/post-dangki', 'UserController@postSignUp')->name('post-dangki');

Route::get('/login', 'UserController@getLogin')->name('login');
Route::post('/post-login', 'UserController@postLogin')->name('post-login');

Route::get('/logout', 'UserController@getLogout')->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/Home', 'DashboardController@Home')->name('home');
    //Xử Lý Dữ Liệu Người Dùng
    Route::group(['prefix' => 'admin'], function () {
        //Xem danh sách người Dùng
        Route::get('/list-user', 'UserController@getListUser')->name('list-user');
        //Thêm người dùng
        Route::get('/addUser', 'UserController@getAddUser')->name('AddUser');
        Route::post('/post-addUser', 'UserController@postAddUser')->name('postAddUser');
        //Sữa người dùng
        Route::get('/editUser/{user_id}', 'UserController@getEditUser')->name('EditUser');
        Route::post('/post-editUser/{user_id}', 'UserController@postEditUser')->name('postEditUser');
        //Xóa người dùng
        Route::get('/delUser/{user_id}', 'UserController@DeleteUser')->name('DelUser');
    });
    //Xử Lý Dữ Liệu Trong Trang Chuyên Mục
    Route::group(['prefix' => 'chuyenmuc'], function () {
        //Xem danh sách chuyên mục
        Route::get('/', 'CategoryController@ListCate')->name('list-cate');
        //Thêm Chuyên Mục
        Route::get('/add-cate', 'CategoryController@getAddCate')->name('AddCate');
        Route::post('/post-add-cate', 'CategoryController@postAddCate')->name('postAddCate');
        //Sửa Chuyên Mục
        Route::get('/edit-cate/{cate_id}', 'CategoryController@getEditCate')->name('EditCate');
        Route::post('/post-edit-cate/{cate_id}', 'CategoryController@postEditCate')->name('postEditCate');
        //Xóa Chuyên Mục
        Route::get('/delCate/{cate_id}', 'CategoryController@DeleteCate')->name('DelCate');
    });
    //Xử lí dữ liệu loại tin trong chuyên mục
    Route::group(['prefix' => 'type'], function () {
        //Xem danh sách loại tin
        Route::get('/loai-tin', 'TypeCateController@getListType')->name('list-type');
        //Thêm loại tin
        Route::get('/them-loai-tin', 'TypeCateController@getAddType')->name('AddType');
        Route::post('/post-add-type', 'TypeCateController@postAddType')->name('postAddType');
        //Sửa loại tin
        Route::get('/sua-loai-tin/{type_id}', 'TypeCateController@getEditType')->name('EditType');
        Route::post('/post-edit-cate/{type_id}', 'TypeCateController@postEditType')->name('postEditType');
        //Xóa loại tin
        Route::get('/delCate/{type_id}', 'TypeCateController@DeleteType')->name('DelType');
    });
    //Xử Lý Dữ Liệu Trong Trang Bài Viết
    Route::group(['prefix' => 'post'], function () {
        //Xem danh sách bài viết
        Route::get('/post', 'PostsController@ListPost')->name('list-post');
        //Thêm Bài Viết
        Route::get('/add-post', 'PostsController@getAddPost')->name('AddPost');
        Route::post('/post-add-post', 'PostsController@postAddPost')->name('postAddPost');
        //Xem Bài Viết
        Route::get('/view-post/{id}', 'PostsController@ViewPost')->name('ViewPost');
        //Sửa Bài Viết
        Route::get('/edit-post/{id}', 'PostsController@getEditPost')->name('EditPost');
        Route::post('/post-edit-post/{id}', 'PostsController@postEditPost')->name('postEditPost');
        //Xóa Bài Viết
        Route::get('/delPost/{id}', 'PostsController@DeletePost')->name('DelPost');
    });
    Route::group(['prefix' => 'slide'], function () {
        //Xem danh sách slide
        Route::get('/slide', 'SlideController@ListSlide')->name('slide');
        //Thêm slide vào danh sách
        Route::get('/add-slide', 'SlideController@getAddSlide')->name('AddSlide');
        Route::post('/post-add-slide', 'SlideController@postAddSlide')->name('postAddSlide');
        //Sửa slide trong danh sách
        Route::get('/edit-slide/{slide_id}', 'SlideController@getEditSlide')->name('EditSlide');
        Route::post('/post-edit-slide/{slide_id}', 'SlideController@postEditSlide')->name('postEditSlide');
        //Xóa ảnh Slide
        Route::get('/del-slide/{slide_id}', 'SlideController@DeleteSlide')->name('DelSlide');
    });
    Route::group(['prefix' => 'ajax'], function () {
        Route::get('type/{cate_id}', 'AjaxController@getType')->name('get-type');
    });
});
//Giao diện front-end
Route::group(['prefix' => '/'], function () {
    Route::get('/Trang-chu', 'PagesController@Index')->name('index');
    Route::get('/viewall', 'PagesController@ViewPageAll')->name('viewall');
    Route::get('/chuyen-muc/{cate_id}', 'PagesController@ViewPageCate')->name('viewcate');
    Route::get('/loai-tin/{cate_id}', 'PagesController@ViewPageType')->name('viewtype');
    Route::get('/tacgia/{user_id}', 'PagesController@ViewPageAuthor')->name('viewauthor');
    Route::get('/baiviet/{id}', 'PagesController@ViewPosts')->name('viewpost');
});
