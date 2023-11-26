<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientRegController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\ContactinfoController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NeighborController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SendSMSController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UpcomingController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WorkingPartner;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//Frontend
Route::get('/', [CommonController::class, 'index'])->name('index');
Route::get('/single/property/{id}', [CommonController::class, 'single_property'])->name('single.property');
Route::post('/send/message/{id}', [CommonController::class, 'send_message'])->name('send.message');
Route::get('/organizer', [CommonController::class, 'organizer'])->name('organizer');
Route::get('/place/properties/{id}', [CommonController::class, 'place_properties'])->name('place.properties');
Route::get('/partners', [CommonController::class, 'partners'])->name('partners');
Route::get('/single/blog/{id}', [CommonController::class, 'single_blog'])->name('single.blog');
Route::get('/service', [CommonController::class, 'service'])->name('service');
Route::get('/neighbor', [CommonController::class, 'neighbor'])->name('neighbor');
Route::get('/single/neighbor/{slug}', [CommonController::class, 'single_neighbor'])->name('single.neighbor');
Route::post('/service/message/store', [CommonController::class, 'service_message_store'])->name('service.message.store');
Route::get('/upcoming', [CommonController::class, 'upcoming'])->name('upcoming');
Route::get('/under/cons', [CommonController::class, 'under_cons'])->name('under.cons');
Route::get('/handover', [CommonController::class, 'handover'])->name('handover');




//About
Route::get('/about/us', [AboutController::class, 'about_us'])->name('about.us');



//working partner
Route::get('/working/partner',[WorkingPartner::class, 'working_partner'])->name('working.partner');
Route::post('/working/partner/store',[WorkingPartner::class, 'working_partner_store'])->name('working.partner.store');
Route::get('/working/partner/edit/{id}',[WorkingPartner::class, 'working_partner_edit'])->name('working.partner.edit');
Route::post('/working/partner/update/{id}',[WorkingPartner::class, 'working_partner_update'])->name('working.partner.update');
Route::get('/working/partner/status/{id}',[WorkingPartner::class, 'working_partner_status'])->name('working.partner.status');
Route::get('/working/partner/delete/{id}',[WorkingPartner::class, 'working_partner_delete'])->name('working.partner.delete');


//Place
Route::get('/place', [PlaceController::class, 'place'])->middleware('auth', 'verified')->name('place');
Route::post('/place/store', [PlaceController::class, 'place_store'])->name('place.store');
Route::get('/place/status/{id}', [PlaceController::class, 'place_status'])->name('place.status');
Route::get('/place/edit/{id}', [PlaceController::class, 'place_edit'])->name('place.edit');
Route::get('/place/delete/{id}', [PlaceController::class, 'place_delete'])->name('place.delete');
Route::post('/place/update/{id}', [PlaceController::class, 'place_update'])->name('place.update');

//Properties
Route::get('/add/properties', [PropertiesController::class, 'add_properties'])->middleware('auth', 'verified')->name('add.properties');
Route::post('/properties/store', [PropertiesController::class, 'properties_store'])->name('properties.store');
Route::get('/properties/list', [PropertiesController::class, 'properties_list'])->middleware('auth', 'verified')->name('properties.list');
Route::get('/property/status/{id}', [PropertiesController::class, 'property_status'])->middleware('auth', 'verified')->name('property.status');
Route::get('/property/edit/{id}', [PropertiesController::class, 'property_edit'])->middleware('auth', 'verified')->name('property.edit');
Route::post('/property/update/{id}', [PropertiesController::class, 'property_update'])->name('properties.update');
Route::post('/preview/update/{id}', [PropertiesController::class, 'preview_update'])->name('preview.update');
Route::get('/property/delete/{id}', [PropertiesController::class, 'property_delete'])->middleware('auth', 'verified')->name('property.delete');
Route::get('/gallery/delete/{id}', [PropertiesController::class, 'gallery_delete'])->middleware('auth', 'verified')->name('gallery.delete');
Route::post('/gallery/update/{id}', [PropertiesController::class, 'gallery_update'])->name('gallery.update');

//Upcoming
Route::get('/add/upcoming', [UpcomingController::class, 'add_upcoming'])->middleware('auth', 'verified')->name('add.upcoming');
Route::post('/upcoming/store', [UpcomingController::class, 'upcoming_store'])->middleware('auth', 'verified')->name('upcoming.store');


//Contact Info
Route::get('contact/info', [ContactinfoController::class, 'contact_info'])->middleware('auth','verified')->name('contact.info');
Route::post('contact/update', [ContactinfoController::class, 'contact_update'])->name('contact.update');

//About
Route::get('about/banner', [AboutController::class, 'about_banner'])->middleware('auth', 'verified')->name('about.banner');
Route::post('banner/update', [AboutController::class, 'banner_update'])->name('banner.update');
Route::get('about/section', [AboutController::class, 'about_section'])->middleware('auth', 'verified')->name('about.section');
Route::post('about/section/update', [AboutController::class, 'about_section_update'])->name('about.section.update');
Route::get('about/why/choose', [AboutController::class, 'why_choose'])->middleware('auth', 'verified')->name('why.choose');
Route::post('about/why/update', [AboutController::class, 'why_choose_update'])->name('why.choose.update');
Route::get('counter/up', [AboutController::class, 'counter_up'])->middleware('auth', 'verified')->name('counter.up');
Route::post('counter/up/update', [AboutController::class, 'counter_up_update'])->name('counter.up.update');

//Agent
Route::get('/agent', [AgentController::class, 'agent'])->middleware('auth', 'verified')->name('agent');
Route::post('/agent/store', [AgentController::class, 'agent_store'])->name('agent.store');
Route::get('/agent/details/{id}', [AgentController::class, 'agent_details'])->middleware('auth', 'verified')->name('agent.details');
Route::post('/agent/update/{id}', [AgentController::class, 'agent_update'])->name('agent.update');
Route::get('/agent/delete/{id}', [AgentController::class, 'agent_delete'])->name('agent.delete');

//Testimonial
Route::get('/testimonial', [TestimonialController::class, 'testimonial'])->middleware('auth', 'verified')->name('testimonial');
Route::post('/testimonial/store', [TestimonialController::class, 'testimonial_store'])->name('testimonial.store');
Route::get('/testimonial/status/{id}', [TestimonialController::class, 'testimonial_status'])->name('testimonial.status');
Route::get('/testimonial/details/{id}', [TestimonialController::class, 'testimonial_details'])->name('testimonial.details');
Route::post('/testimonial/update/{id}', [TestimonialController::class, 'testimonial_update'])->name('testimonial.update');
Route::get('/testimonial/delete/{id}', [TestimonialController::class, 'testimonial_delete'])->name('testimonial.delete');


//Blog
Route::get('/add/blog', [BlogController::class, 'add_blog'])->middleware('auth', 'verified')->name('add.blog');
Route::post('/blog/store', [BlogController::class, 'blog_store'])->name('blog.store');
Route::get('/blog/list', [BlogController::class, 'blog_list'])->middleware('auth', 'verified')->name('blog.list');
Route::get('/blog/details/{id}', [BlogController::class, 'blog_details'])->middleware('auth', 'verified')->name('blog.details');
Route::post('/blog/update/{id}', [BlogController::class, 'blog_update'])->name('blog.update');
Route::get('/blog/delete/{id}', [BlogController::class, 'blog_delete'])->name('blog.delete');


//Message
Route::get('/message', [MessageController::class, 'message'])->middleware('auth', 'verified')->name('message');
Route::get('/message/read/{id}', [MessageController::class, 'message_read'])->middleware('auth', 'verified')->name('message.read');
Route::get('/message/delete/{id}', [MessageController::class, 'message_delete'])->middleware('auth', 'verified')->name('message.delete');
Route::get('/service/message/', [MessageController::class, 'service_message'])->middleware('auth', 'verified')->name('service.message');
Route::get('/service/message/read/{id}', [MessageController::class, 'service_message_read'])->middleware('auth', 'verified')->name('service.message.read');
Route::get('/service/message/delete/{id}', [MessageController::class, 'service_message_delete'])->name('service.message.delete');


//Dashboard Users
Route::get('/users', [UsersController::class, 'users'])->middleware('auth', 'verified')->name('users');
Route::post('/user/store', [UsersController::class, 'user_store'])->name('user.store');
Route::get('/user/delete/{id}', [UsersController::class, 'user_delete'])->name('user.delete');
Route::get('/user/edit/{id}', [UsersController::class, 'user_edit'])->name('user.edit');
Route::post('/user/update/{id}', [UsersController::class, 'user_update'])->name('user.update');

//Search
Route::get('/search', [SearchController::class, 'search'])->name('search');


//Client
Route::get('/client/register', [ClientController::class, 'client_register'])->name('client.register');
Route::post('/client/store', [ClientRegController::class, 'client_store'])->name('client.store');
Route::get('/client/verify/{user_id}', [ClientRegController::class, 'client_verify'])->name('client.verify');
Route::post('/client/verification/{user_id}', [ClientRegController::class, 'client_verification'])->name('verification');
Route::get('/client/forget', [ClientRegController::class, 'forget'])->name('forget');
Route::post('/forget/pass', [ClientRegController::class, 'forget_pass'])->name('forget.pass');
Route::get('/otp/verify/{id}', [ClientRegController::class, 'otp_verify'])->name('otp.verify');
Route::post('/forget/otp/{id}', [ClientRegController::class, 'forget_otp'])->name('forget.otp');
Route::get('/update/pass/{id}', [ClientRegController::class, 'update_pass'])->name('update.pass');
Route::post('/password/update/{id}', [ClientRegController::class, 'password_update'])->name('password.update');
Route::get('/resend/{user_id}', [ClientRegController::class, 'resend'])->name('resend');
Route::get('/client/login', [ClientController::class, 'client_login'])->name('client.login.page');
Route::post('/client/loggedIn', [ClientRegController::class, 'client_loggedIn'])->name('client.login');
Route::get('/profile', [ClientController::class, 'client_profile'])->name('client.profile');
Route::post('/profile/update/{id}', [ClientController::class, 'client_profile_update'])->name('client.profile.update');
Route::get('/client/logout', [ClientController::class, 'client_logout'])->name('client.logout');
Route::get('/client/dashboard', [ClientController::class, 'client_dashboard'])->name('client.dashboard');
Route::get('/not/found', [ClientController::class, 'not_found'])->name('not.found');
Route::post('/client/password/change/{id}', [ClientRegController::class, 'client_password_change'])->name('client.password.change');


//Partner
Route::get('/partner/list', [PartnerController::class, 'partner_list'])->middleware('auth', 'verified')->name('partner.list');
Route::post('/partner/store', [PartnerController::class, 'partner_store'])->name('partner.store');
Route::get('/partner/details/{id}', [PartnerController::class, 'partner_details'])->middleware('auth', 'verified')->name('partner.details');
Route::post('/partner/update/{id}', [PartnerController::class, 'partner_update'])->name('partner.update');
Route::get('/partner/status/{id}', [PartnerController::class, 'partner_status'])->name('partner.status');
Route::get('/partner/delete/{id}', [PartnerController::class, 'partner_delete'])->name('partner.delete');


//Neighbor
Route::get('/neighbor/apartment', [NeighborController::class, 'neighbor_apartment'])->middleware('auth', 'verified')->name('neighbor.apartment');
Route::post('/neighbor/apartment/store', [NeighborController::class, 'neighbor_apartment_store'])->name('neighbor.apartment.store');
Route::get('/neighbor/apartment/edit/{id}', [NeighborController::class, 'neighbor_apartment_edit'])->middleware('auth', 'verified')->name('neighbor.apartment.edit');
Route::post('/neighbor/apartment/update/{id}', [NeighborController::class, 'neighbor_apartment_update'])->name('neighbor.apartment.update');
Route::get('/neighbor/apartment/status/{id}', [NeighborController::class, 'neighbor_apartment_status'])->name('neighbor.apartment.status');
Route::get('/neighbor/apartment/delete/{id}', [NeighborController::class, 'neighbor_apartment_delete'])->name('neighbor.apartment.delete');


Route::get('/neighbor/person', [NeighborController::class, 'neighbor_person'])->middleware('auth', 'verified')->name('neighbor.person');
Route::post('/neighbor/person/store', [NeighborController::class, 'neighbor_person_store'])->name('neighbor.person.store');
Route::get('/neighbor/status/{id}', [NeighborController::class, 'neighbor_status'])->name('neighbor.status');
Route::get('/neighbor/edit/{id}', [NeighborController::class, 'neighbor_edit'])->name('neighbor.edit');
Route::post('/neighbor/update/{id}', [NeighborController::class, 'neighbor_update'])->name('neighbor.person.update');
Route::get('/neighbor/delete/{id}', [NeighborController::class, 'neighbor_delete'])->name('neighbor.delete');


//Organizer
Route::get('/organizer/dash/', [OrganizerController::class, 'organizer_dash'])->middleware('auth', 'verified')->name('organizer.dash');
Route::post('/organizer/store/', [OrganizerController::class, 'organizer_store'])->name('organizer.store');
Route::get('/organizer/status/{id}', [OrganizerController::class, 'organizer_status'])->name('organizer.status');
Route::get('/organizer/edit/{id}', [OrganizerController::class, 'organizer_edit'])->name('organizer.edit');
Route::post('/organizer/update/{id}', [OrganizerController::class, 'organizer_update'])->name('organizer.update');
Route::get('/organizer/delete/{id}', [OrganizerController::class, 'organizer_delete'])->name('organizer.delete');


//Send SMS
Route::get('/send/sms', [SendSMSController::class, 'send_sms'])->name('send.sms');
Route::post('/send/delivered', [SendSMSController::class, 'sms_delivered'])->name('sms.delivered');




Route::get('/test', [AboutController::class, 'test'])->name('test');
