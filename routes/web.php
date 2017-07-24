<?php
 
//---------------------Testimonials---------------------------
Route::get('/admin/testimonial', 'AdminController@view_testimonial');
Route::get('/admin/testimonial/add', 'AdminController@create_testimonial');
Route::any('/admin/testimonial/store', 'AdminController@store_testimonial');

Route::get('/donor-profile', 'DonorController@donor_profile');
Route::post('/donor/search', 'DonorController@search');
Route::get('donor/viewprofile/{id}', 'DonorController@viewprofile');
Route::get('/Blogs', 'BlogController@view');

Route::any('/donor-logout','DonorController@logout');


Route::get('/search-doctor', 'DoctorController@FindDoctor');
Route::any('/view-doctor', 'DoctorController@ViewDoctor');
Route::get('/search-blood-donor', 'HomeController@SearchBloodDonor');
Route::post('/view/search-blood-donor','HomeController@ShowBloodDonor');
Route::get('/search-donor', 'HomeController@SearchDonor');
Route::get('/our-policy', 'HomeController@OurPolicy');
Route::get('/speech-of-CEO', 'SpeechController@index');


Route::get('/admin/donor/get_district/{id}', 'DonorController@get_district');
Route::get('/admin/donor/get_upazilla/{id}', 'DonorController@get_upazilla');



Route::post('/search-any','HomeController@SearchAny');



//-------------------------------------------Galary------------------------------------------------
Route::get('/admin/addGallery', 'PhotoController@addGallery');
Route::any('/admin/storeGallery', 'PhotoController@storeGallery');
Route::any('/admin/viewGallery', 'PhotoController@viewGallery');
Route::any('/admin/addPhoto', 'PhotoController@addPhoto');
Route::any('/admin/storePhoto', 'PhotoController@storePhoto');
Route::any('/admin/viewPhoto', 'PhotoController@viewPhoto');









//----------------User-------------
Route::get('/DonorSearchByLocation', 'SearchController@DonorSearchByLocation');
Route::get('/search', 'SearchController@index');
Route::get('/my-profile', 'ProfileController@viewMyProfile');
//Route::get('/', 'PostController@WhoWeAre');





//----------------------Home page route---------------------------//
Route::get('/', 'HomeController@index');
Route::get('/blood-news', 'HomeController@blood_news');
Route::get('/blood-info', 'HomeController@blood_info');
Route::get('/blood-request', 'HomeController@blood_request');
Route::any('/blood-request-store', 'HomeController@blood_request_store');
Route::any('/activity-list', 'HomeController@activity_list');
Route::get('/news', 'HomeController@news_page');
Route::get('/news-detail/{id}', 'HomeController@news_detail_page');
Route::get('/write-to-doctor', 'HomeController@write_to_doctor');
Route::get('/view-doctor', 'HomeController@view_doctor');
Route::get('/view-hospital', 'HomeController@view_hospital');
Route::any('/search-hospital', 'HomeController@search_hospital');
Route::get('/view-ambulance', 'HomeController@view_ambulance');
Route::get('/blog', 'HomeController@blog_page');
Route::get('/blog-detail', 'HomeController@blog_detail');
Route::get('/recent-event/{id}', 'HomeController@recent_event');
Route::get('/upcoming-event/{id}', 'HomeController@upcoming_event');
Route::get('/volunteer', 'HomeController@volunteer');
Route::get('/make-donation', 'HomeController@make_donation');
Route::get('/about-us', 'HomeController@about_us');
Route::get('/contact', 'HomeController@contact');
Route::get('/read-more/detail/{id}', 'HomeController@read_more');
Route::get('/events', 'HomeController@events');





Route::get('/VisionMissionValue', 'PostController@VisionMissionValue');
Route::get('/FAQ', 'FaqController@faq');
Route::get('/aboutus', 'PostController@aboutus');
Route::get('/gallery', 'PhotoController@index');
//Route::get('/contact', 'PostController@contactPage');
Route::get('/project', 'HomeController@projectPage');
//Route::get('/events', 'HomeController@eventsPage'); 
Route::get('/donate', 'DonorController@donate');
Route::get('/profile', 'ProfileController@index');





Route::get('/home', 'HomeController@index')->name('home');
Route::get('/monthly-entry', 'MonthlyEntryController@view');
Route::get('/gradingSystem', 'GradingSystemController@view');


//-------Admin -----------
Route::get('/admin/home', 'AdminController@index');
Route::get('/admin/view', 'AdminController@view_admin');
Route::get('/admin/create', 'AdminController@create');
Route::get('/admin/{id}', 'AdminController@show')->name('show');
Route::get('/admin/{id}/edit', 'AdminController@edit'); 
Route::get('/admin/store', 'AdminController@store')->name('store');
Route::post('/admin/update', 'AdminController@update');
Route::any('/admin/destroy/{id}', 'AdminController@destroy');

//-------------------------more about blood------------------------
Route::get('/admin/more-blood/view', 'AdminController@view_more_blood');
Route::get('/admin/more-blood/edit/{id}', 'AdminController@edit_more_blood');
Route::post('/admin/more-blood/update', 'AdminController@update_more_blood');



//--------Donor-------------------------------------
Route::get('/test', 'TestController@index');

Route::get('/donor', 'DonorController@index');
Route::get('/donor-login', 'DonorController@donor_login');
Route::post('/donor/login', 'DonorController@donor_login_access');


Route::get('/donor-register', 'DonorController@donor_register');
Route::get('/donor/create', 'DonorController@index');
Route::post('/donor/store', 'DonorController@store');
Route::get('/donor/{id}', 'DonorController@show');
Route::get('/donor/{id}/edit', 'DonorController@edit');
Route::post('/donor/update', 'DonorController@update');
Route::any('/donor/{id}/destroy', 'DonorController@destroy');

//------------------Doctor----------------------------------
Route::get('admin/doctor/view', 'DoctorController@view');
Route::get('admin/doctor/create', 'DoctorController@create');
Route::post('admin/doctor/store', 'DoctorController@store');
Route::get('admin/doctor/search_view', 'DoctorController@search_view');
Route::post('admin/doctor/search', 'DoctorController@search');
Route::get('admin/doctor/edit/{id}', 'DoctorController@doctor_edit');
Route::post('admin/doctor/update', 'DoctorController@doctor_update');
Route::any('admin/doctor/delete/{id}', 'DoctorController@doctor_delete');
Route::post('admin/doctor/write', 'DoctorController@write_to_doctor');
Route::get('admin/doctor/problem-view', 'DoctorController@view_problem');
Route::any('admin/doctor/problem/delete/{id}', 'DoctorController@problem_delete');
Route::get('admin/doctor/problem-view/{id}', 'DoctorController@problem_show')->name('show');

//-------------------------Hospital------------------------
Route::get('admin/hospital/view_hospital', 'DoctorController@hospital_view');
Route::get('admin/hospital/create_hospital', 'DoctorController@hospital_create');
Route::any('admin/hospital/hospital_store', 'DoctorController@hospital_store');
Route::get('admin/hospital/edit/{id}', 'DoctorController@hospital_edit');
Route::post('admin/hospital/hospital_update', 'DoctorController@hospital_update');
Route::any('admin/hospital/delete/{id}', 'DoctorController@hospital_delete');

//------------------------Designation----------------------------
Route::get('admin/designation/view_designation', 'DoctorController@designation_view');
Route::get('admin/designation/create_designation', 'DoctorController@designation_create');
Route::post('admin/designation/store_designation', 'DoctorController@store_designation');
Route::get('admin/designation/edit/{id}', 'DoctorController@designation_edit');
Route::post('admin/designation/update_designation', 'DoctorController@designation_update');
Route::any('admin/designation/delete/{id}', 'DoctorController@designation_delete');


//--------------------------Degree---------------------------------

Route::get('admin/degree/view_degree', 'DoctorController@degree_view');
Route::get('admin/degree/create_degree', 'DoctorController@degree_create');
Route::post('admin/degree/store_degree', 'DoctorController@degree_store');
Route::get('admin/degree/edit/{id}', 'DoctorController@degree_edit');
Route::post('admin/degree/update_degree', 'DoctorController@degree_update');
Route::any('admin/degree/delete/{id}', 'DoctorController@degree_delete');


//-------------------------Blood Request-----------------------------
Route::get('/bloodrequest', 'DonorController@blood_request_view');
Route::get('/bloodrequest/create', 'DonorController@blood_request_create');
Route::post('/bloodrequest/store', 'DonorController@blood_request_store');

//------------------------------Search -------------------------------
/*
Route::get('/search', 'HomeController@search');
Route::get('/search/ajax', 'HomeController@ajax');
Route::get('api/dependent-dropdown','APIController@index');
Route::get('api/get-state-list','APIController@getStateList');
Route::get('api/get-city-list','APIController@getCityList');
*/

//---------Content--------------------
Route::get('/admin/content', 'ContentController@index'); 
Route::get('/admin/content/create', 'ContentController@create');
Route::get('/admin/content/{id}', 'ContentController@show');
Route::get('/admin/content/{id}/edit', 'ContentController@edit'); 
Route::get('/admin/content/store', 'ContentController@store')->name('store');
Route::post('/admin/content/update', 'ContentController@update');
Route::any('/admin/content/{id}/destroy', 'ContentController@destroy');

//-------------------Blog-----------------------------
Route::any('/blog/category', 'BlogController@blog_category');
Route::any('/blog/createCategory', 'BlogController@create_category');
Route::any('/blog/saveCategory', 'BlogController@save_category');
Route::any('/blog/content', 'BlogController@view_blog');
Route::any('/blog/create', 'BlogController@create_blog');
Route::any('/blog/saveBlog', 'BlogController@save_blog');
Route::any('/blog/editcategory/{id}', 'BlogController@edit_blog_category');
Route::post('/blog/update_category', 'BlogController@update_blog_category');
Route::any('/blog/editblog/{id}', 'BlogController@edit_blog');
Route::post('/blog/updateBlog', 'BlogController@update_blog');
Route::any('/blog/destroy/{id}', 'BlogController@delete_blog');
//-----------------------Mail box----------------------
Route::any('admin/mailbox/inbox', 'MailController@show_inbox');
Route::any('admin/mailbox/compose', 'MailController@show_compose');
Route::any('admin/mailbox/read/{id}', 'MailController@show_read');
Route::any('admin/mailbox/sent', 'MailController@show_sent');








//----------------SMS ------------------------------
Route::get('/sms', 'SmsController@index');


Route::get('ajax',function(){
   return view('message');
});
Route::post('/getmsg','AjaxController@index');



Route::get('/error',function(){
   abort(404);
});

Route::resource('admin','AdminController');
Route::resource('donor','DonorController');
//Route::resource('content','ContentController');


//Route::get('/', 'UserController@index');
Route::get('/WhoWeAre', 'PostController@WhoWeAre');


Auth::routes();